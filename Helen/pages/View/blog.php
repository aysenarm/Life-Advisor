<?php
require_once '../../../content_top.php';
?>
<style>
    .dummy {
        margin-top: 100%;
    }
    .thumbnail {
        border: none;
        background-color: #2c2d2c;
        border-radius: 0;
        position: absolute;
        top: 0px;
        bottom: 0;
        left: 15px;
        right: 0;
        text-align:center;
        padding-top: 28px;
    }
    .col-md-2 a{
        text-transform: uppercase;
        color: white;
        font-family: 'Cabin', sans-serif;
        font-size: 1em;
        text-decoration: none;
    }
    .col-md-2 form:hover {
        background-color: #ef494a;
    }
    h1{
        text-transform: uppercase;
        color: #ef494a;
        font-family: 'Cabin', sans-serif;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }
</style>
<h1>Blog</h1>
<div class="row">
    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/' ?>Helen/pages/View/show_menu_pages.php" method="post">
            <input type="hidden" name="menu" value="Recipes"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>recipes</a></button>
        </form>
    </div>

    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/' ?>Helen/pages/View/show_menu_pages.php" method="post">
            <input type="hidden" name="menu" value="House"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>house</a></button>
        </form>
    </div>

    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/' ?>Helen/pages/View/show_menu_pages.php" method="post">
            <input type="hidden" name="menu" value="Health"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>health</a></button>
        </form>
    </div>

    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/' ?>Helen/pages/View/show_menu_pages.php" method="post">
            <input type="hidden" name="menu" value="Finances"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>finances</a></button>
        </form>
    </div>

    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/Helen/pages/View/show_menu_pages.php';?>" method="post">
            <input type="hidden" name="menu" value="People"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>people</a></button>
        </form>
    </div>

    <div class="col-md-2">
        <div class="dummy"></div>
        <form class="thumbnail" action="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/Life-Advisor/' ?>Helen/pages/View/show_menu_pages.php" method="post">
            <input type="hidden" name="menu" value="Time managment"/>
            <button type="submit" style="background: none; border: none;outline: none;"><a>time management</a></button>
        </form>
    </div>

</div>
