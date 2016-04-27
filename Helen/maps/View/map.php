<?php
require_once '../../../content_top.php';
require "../Controller/map.php"; ?>

<!-- enter any address -->
<form action="get_address.php" method="post">
    <div>Please, enter your address:</div>
    <input type='text' name='address' placeholder='Enter your address here'/>
    <input type='submit' value='Search' />
</form>



<div id="mapholder"></div>
