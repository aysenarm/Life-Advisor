<?php require_once 'content_top.php'; ?>
    <div class="example">
        <!-- defining main tabs elements -->
        <div id="tabs-container">
            <ul class="tabs">
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">Post Twitt</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">1</a></li>
            </ul>
        </div>
        <!-- defining top menu -->
        <div id="nav-container">
            <ul class="navv" id="1">
                <!-- defining top menu elements -->
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
            </ul>

            <ul class="navv" id="2" style="display:none;">
                <li><a href="/Life-Advisor/Daria/twitter/autoposting.php">Post Twitt</a></li>
                <li><a href="/Life-Advisor/Daria/twitter/twitts.php">All Twitts</a></li>
            </ul>
            <ul class="navv" id="3" style="display:none;">
                <li><a href="#">Меню #8</a></li>
                <li><a href="#">Меню #9</a></li>
                <li><a href="#">Меню #10</a></li>
            </ul>
            <ul class="navv" id="4" style="display:none;">
                <li><a href="#">Меню #11</a></li>
                <li><a href="#">Меню #12</a></li>
            </ul>
        </div>
        <div style="clear:both"></div>
    </div>
