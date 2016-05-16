<?php require_once 'content_top.php'; ?>


         <!--
        <div id="tabs-container">
            <ul class="tabs">
                <li><a href="#">Daria</a></li>
                <li><a href="#">Aysen</a></li>
                <li><a href="#">Alex</a></li>
                <li><a href="#">Helen</a></li>
                <li><a href="#">Antonio</a></li>
            </ul>
        </div>

        <div id="nav-container">

            <ul class="navv" id="1">

                <li><a href="#">Subscribers</a>
                    <ul class="sub">
                        <li><a href="/Life-Advisor/Daria/newsletter/Admin/index.php">Subscriber List</a></li>
                        <li><a href="/Life-Advisor/Daria/newsletter/Admin/add_signup_form.php">Add Subscriber</a></li>
                    </ul>
                </li>

                <li><a href="#">Newsletter</a>
                    <ul class="sub">
                        <li><a href="/Life-Advisor/Daria/newsletter/Admin/newsletter-list.php">Newsletter List</a></li>
                        <li><a href="/Life-Advisor/Daria/newsletter/Admin/newsletter.php">Add newsletter</a></li>
                        <li><a href="#">Send newsletter</a></li>
                    </ul></li>

                <li><a href="#">Twitter</a>
                    <ul class="sub">
                        <li><a href="/Life-Advisor/Daria/twitter/autoposting.php">Post Tweet</a></li>
                        <li><a href="/Life-Advisor/Daria/twitter/twitts.php">All Tweets</a></li>
                    </ul>
                </li>

            </ul>

            <ul class="navv" id="2" style="display:none;">
                <li><a href="/Life-Advisor/Aysen/Forum/Admin/Categories/index.php">Categories</a></li>
                <li><a href="/Life-Advisor/Aysen/Gallery/Admin/Galleries/index.php">Galleries</a></li>
                <li><a href="/Life-Advisor/Aysen/Promotions/Admin/Promotions/index.php">Promotions</a></li>
            </ul>
            <ul class="navv" id="3" style="display:none;">
                <li><a href="/Life-Advisor/Alex/contactus_admin.php">Contact Us</a></li>
                <li><a href="/Life-Advisor/Alex/donation_admin.php">Donation</a></li>
                <li><a href="/Life-Advisor/Alex/questionnaire_admin.php">Questionnaire</a></li>
            </ul>
            <ul class="navv" id="4" style="display:none;">
                <li><a href="/Life-Advisor/Helen/pages/View/admin_pages.php">Posts</a></li>
                <li><a href="/Life-Advisor/Helen/pages/View/admin_comments.php">Comments</a></li>

            </ul>
            <ul class="navv" id="5" style="display:none;">
                <li><a href="/Life-Advisor/Antonio/userCabinet/Admin/View/admin_users.php">Users Admin</a></li>

            </ul>
        </div>
        <div style="clear:both"></div>
    -->
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
        padding-top:28px;
    }
    .col-md-2 a{
        text-transform: uppercase;
        color: white;
        font-family: 'Cabin', sans-serif;
        font-size: 1em;
        text-decoration: none;
    }
    .col-md-2 a:hover {
        background-color: #ef494a;
    }
    h1{
        text-transform: uppercase;
        color: #ef494a;
        font-family: 'Cabin', sans-serif;
        text-align: center;
        margin-top: 0;
        margin-bottom: 30px;
    }
    .col-sm-8{
        padding-right: 1.5em;
        padding-left: 1.5em;
    }
    h3{
        text-decoration: underline;
        padding-bottom: 1em;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #ef494a;
        color: white;
    }
    label{
        color: #2c2d2c;
        font-size: 1em;
        text-align: left;
        display: inline-block;
    }
</style>
<h1>Admin panel</h1>
<div class="row row1">
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Antonio/userCabinet/Admin/View/admin_users.php" class="thumbnail purple">Users</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Daria/newsletter/Admin/index.php" class="thumbnail purple">Subscribers</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Alex/donation_admin.php" class="thumbnail purple">Donations</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Daria/newsletter/Admin/newsletter-list.php" class="thumbnail purple">Newsletters</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Aysen/Forum/Admin/Categories/index.php" class="thumbnail purple">Forum</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Helen/pages/View/admin_pages.php" class="thumbnail purple">Posts</a>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Aysen/Gallery/Admin/Galleries/index.php" class="thumbnail purple">Galleries</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Helen/pages/View/admin_comments.php" class="thumbnail purple">Comments</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Aysen/Promotions/Admin/Promotions/index.php" class="thumbnail purple">Promotions</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Daria/twitter/autoposting.php" class="thumbnail purple">Twitter</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Alex/questionnaire_admin.php" class="thumbnail purple">Questions</a>
    </div>
    <div class="col-md-2">
        <div class="dummy"></div>
        <a href="/Life-Advisor/Alex/contactus_admin.php" class="thumbnail purple">Contact Us</a>
    </div>
</div>




