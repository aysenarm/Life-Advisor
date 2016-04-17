<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    

    
    
    <style>
        #myNavbar{
            border:0;
            background-color: #2c2d2c;
        }

        .navbar{
            border-radius: 0;

            margin-bottom: 5px;

        }
        .sidenav{
            background-color: #2c2d2c;

        }
        .sidenav a{
            text-transform: uppercase;
            color: white;
            font-family: 'Cabin', sans-serif;
            font-size: 1.2em;
            text-decoration: none;
        }
        footer{
            margin-top: 5px;
            background-color: #2c2d2c;
        }
        .logo{
            margin-bottom: 45px;
            margin-top: 30px;
        }
        .logo2{
            margin-top: 25px;
            margin-bottom: 150px;
        }
        .sidenav a:hover {
            background-color: #ef494a;
            border-radius: 25px;
            padding: 3px 20px;
        }
        .navbar{

            border:hidden;
        }
        .picture{
            width: 358px;
        }
        img{
            max-width:100% !important;
        }
        .well{
            border: 1px solid #2c2d2c;
            border-radius: 0;
            padding: 0;
            margin-top: 5px;
        }
        .well img{
            margin:0;
        }
        .block{
            background-color: #2c2d2c;
        }
        .block p{
            color: white;
            font-family: 'Cabin', sans-serif;
            font-size: 1.35em;
            border-left: 2px solid #ef494a;
            text-align: left;
            padding-left: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
        }
        .glyphicon-cutlery{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .glyphicon-usd{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .glyphicon-calendar{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .glyphicon-heart{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .glyphicon-home{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .glyphicon-globe{
            color: white;
            float:left;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
        }
        .text{
            margin-left: 40px;
            margin-right: 15px;
            margin-top: 10px;
        }
        .link{
            text-align: right;
        }
        .link a{
            color: #ef494a;
            text-decoration: none;
            padding-right: 15px;
        }
        .control-label{

            color: white;
            font-family: 'Cabin', sans-serif;
            font-size: 1.2em;
            font-weight: 200;
            text-transform: uppercase;
            display: inline-block;
        }
        .colortext{
            color: #ef494a;
        }
        .btn-large{
            margin-top: 15px;
        }
        .media{
            margin-top: 150px;
        }
        ul.social-network {
            list-style: none;
            display: inline;
            margin-left:0 !important;
            padding: 0;
            margin-top: 50px;
        }
        ul.social-network li {
            display: inline;
            margin: 0 5px;
        }
        .social-network a.icoRss:hover i, .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
        .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
            color:#fff;
        }
        .social-circle li a {
            display:inline-block;
            position:relative;
            margin:0 auto 0 auto;
            -moz-border-radius:50%;
            -webkit-border-radius:50%;
            border-radius:50%;
            text-align:center;
            width: 50px;
            height: 50px;
            font-size:20px;
        }
        .social-circle li i {
            margin:0;
            line-height:50px;
            text-align: center;
        }
        .social-circle li a:hover i, .triggeredHover {
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -ms--transform: rotate(360deg);
            transform: rotate(360deg);
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }
        .social-circle i {
            color: #fff;
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -o-transition: all 0.8s;
            -ms-transition: all 0.8s;
            transition: all 0.8s;
        }
        .media a {
            background-color:#ef494a;
        }
        .com{
            color: white;
            font-family: 'Cabin', sans-serif;
            font-size: 1.2em;
            margin-top: 85px;
        }
        @media (max-width:800px) {
            #myCarousel {
                display:none !important;
            }
        }


    </style>
</head>
<body>

<div class="container">

<nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <form class="navbar-form navbar-right" role="search" action="search.php" method="post">
                <div class="form-group input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search.." >
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Antonio/index.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> My account</a></li>
            </ul>
        </div>

</nav>

<div class="container">
    <div class="row content ">
        <div class="col-sm-4 sidenav text-center">
            <img class="logo" src="images/logo.png">
            <p><a href="index.php">home</a></p>
            <p><a href="#">recipes</a></p>
            <p><a href="#">house</a></p>
            <p><a href="#">health</a></p>
            <p><a href="#">finances</a></p>
            <p><a href="#">people</a></p>
            <p><a href="#">time managment</a></p>
            <p><a href="#">chat</a></p>
            <p><a href="#">our partners</a></p>
            <p><a href="#">contact us</a></p>
            <p><a href="#">donate</a></p>
            <img class="logo2" src="images/logo2.png">

            <div class="form-group">
                <p class="control-label" for="email">subscribe our <span class="colortext">newsletter</span></p>
                    <div class="input-group col-xs-7">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input id="email" name="email" class="form-control" placeholder="Your email..." type="text" required="">
                    </div>
                    <input type="submit" value="Subscribe Now!" class="btn btn-large" id="sub-btn"/>
            </div>

            <div class="media">
                <p class="control-label">connect with <span class="colortext">us</span></p><br/>
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

            <p class="com">&copy; 2016 <span class="colortext">Comrades</span> All rights Reserved</p><br/>

        </div>

        <div class="col-sm-8 text-left">
