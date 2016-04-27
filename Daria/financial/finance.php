<?php require_once '../../content_top.php'; ?>
<?php require 'options.php';?><!DOCTYPE HTML>
<html>
<head>
<title>Financial calculator</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="script.js"></script>
</head>

<body>
<form id="credit">
<div class="text"><label>Loan amount</label> <input type="text" name="amount" id="amount" value="300000" /></div>
<div class="text"><label>Loan term (months)</label><input type="text" name="term" id="term" value="36" /></div>
<div class="text"><label>APR</label><input type="text" name="rate" id="rate" value="15.5" /></div>
<div class="select"><label>Start month</label>
<select name="startmonth" id="startmonth">
<?php
    $current_month = date("n");
    foreach($month_array as $key => $value) { ?>
    <option value="<?php echo $key+1; ?>" <?php if($current_month == $key+1) { ?>selected="selected"<?php } ?>><?php echo $value; ?></option>
<?php } ?>
</select>
<select name="startyear" id="startyear">
<?php
    $current_year = date("Y");
    for($i = $current_year - 10; $i <= $current_year + 10; $i++ ) { ?>
    <option value="<?php echo $i; ?>" <?php if($current_year == $i) { ?>selected="selected"<?php } ?>><?php echo $i; ?></option>
<?php } ?>
</select>
</div>
<div class="submit"><button type="submit">Calculate</button></div>
</form>

<p><strong>Monthly payment:</strong> <span id="payment"></span></p>
<p><strong>Overpay:</strong> <span id="overpay"></span></p>
<div id="schedule"></div>

</body>
</html>
<?php require_once '../../content_bottom.php'; ?>