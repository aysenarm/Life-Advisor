<?php
require 'options.php' ;

function render_table($array) {
$return = '' ;
$return .= '<table class="table table-bordered">
<thead>
<tr>
<th>№</th>
<th>Payment Date</th>
<th>Due amount</th>
<th>Interest</th>
<th>Credit body</th>
<th>Annuity</th>
</tr>
</thead>
<tbody>' ;
foreach ($array as $key => $value) {
    $return .= '<tr>
                <td>' . $key . '</td>
                <td>' . $value['month'] . '</td>
                <td>' . $value['dept'] . '</td>
                <td>' . $value['percent_pay'] . '</td>
                <td>' . $value['credit_pay'] . '</td>
                <td>' . $value['payment'] . '</td>
                </tr>';
    }
$return .= '</tbody></table>' ;
return $return;
}

function credit($term, $rate, $amount, $month, $year, $round = 2)  {
  // $term - срок кредита (в месяцах)/ loan term(months), $rate - процентная ставка/ interest rate, $amount - сумма кредита/ loan amount
  // $month - месяц начала выплат/ starting month, $year - год начала выплат/ starting year, $round - округление сумм/ rounding sum
global $month_array;

$result = array();

$term = (integer)$term;
$rate = (float)str_replace(",", ".", $rate);
$amount = (float)str_replace(",", ".", $amount);
$round = (integer)$round ;

$month_rate = ($rate/100/12) ;   //  месячная процентная ставка по кредиту (= годовая ставка / 12)
$k = ($month_rate * pow((1 + $month_rate), $term)) / ( pow((1 + $month_rate), $term) - 1  ) ; // коэффициент аннуитета
$payment = round($k * $amount, $round) ;   // Размер ежемесячных выплат
$overpay = ($payment * $term) - $amount ;
$debt = $amount ;

for ($i = 1; $i <= $term; $i++) {

   $schedule[$i] = array()  ;

   $percent_pay = round($debt * $month_rate, $round) ;
   $credit_pay =  round($payment - $percent_pay, $round) ;

   $schedule[$i]['month'] = $month_array[$month-1] . ' ' . $year ;
   $schedule[$i]['dept'] = number_format($debt, $round, ',', ' ') ;
   $schedule[$i]['percent_pay'] = number_format($percent_pay, $round, ',', ' ') ;
   $schedule[$i]['credit_pay'] = number_format($credit_pay, $round, ',', ' ') ;
   $schedule[$i]['payment'] =  number_format($payment, $round, ',', ' ') ;

   $debt = $debt - $credit_pay ;

   if($month++ >= 12) { $month = 1; $year++ ;  }
}

$result['overpay'] = number_format($overpay, $round, ',', ' ') ; ;
$result['payment'] = number_format($payment, $round, ',', ' ') ; ;
$result['schedule'] = render_table($schedule) ;

return $result ;

}



