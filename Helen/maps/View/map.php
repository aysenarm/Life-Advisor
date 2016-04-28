<?php
require_once '../../../content_top.php';
require "../Controller/map.php"; ?>

<!-- enter any address -->
<form action="get_address.php" method="post">
    <div style="margin-top: 200px;"></div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <h4>Please, enter your address:</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <input class="form-group-lg" type='text' name='address' placeholder='Enter your address here'/>
            <input class="btnbtn-group-lg btn-danger" type='submit' value='Search' />
        </div>
    </div>

</form>



<div id="mapholder"></div>
