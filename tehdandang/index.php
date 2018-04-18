<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Teh Dandang - Segar Alami dan Murninya</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logodandang.png" alt="logo" width="200"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($_GET['p']=='home'){ echo 'active'; } ?>"><a href="index.php?p=home">HOME</a></li>
                        <li class="<?php if($_GET['p']=='about-us'){ echo 'active'; } ?>"><a href="index.php?p=about-us">ABOUT US</a></li>
                        <li class="dropdown <?php if(($_GET['p']=='white-tea')|($_GET['p']=='green-tea')|($_GET['p']=='oolong-tea')|($_GET['p']=='black-tea')|($_GET['p']=='jasmine-tea')){ echo 'active'; } ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">TYPES OF TEA <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">  
                                <li><a href="index.php?p=white-tea">WHITE TEA</a></li>
                                <li><a href="index.php?p=green-tea">GREEN TEA</a></li>
                                <li><a href="index.php?p=oolong-tea">OOLONG TEA</a></li>
                                <li><a href="index.php?p=black-tea">BLACK TEA</a></li>
                                <li><a href="index.php?p=jasmine-tea">JASMINE TEA</a></li>
                            </ul>
                        </li>
                        <li class="<?php if($_GET['p']=='our-product'){ echo 'active'; } ?>"><a href="index.php?p=our-product">OUR PRODUCT</a></li> 
                        <li class="<?php if($_GET['p']=='contact-us'){ echo 'active'; } ?>"><a href="index.php?p=contact-us">CONTACT US</a></li>
                        <li class="<?php if($_GET['p']=='info'){ echo 'active'; } ?>"><a href="index.php?p=info">INFO</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <?php
        $pages_dir = 'pages';
        if(!empty($_GET['p'])) {
            $pages = scandir($pages_dir,0);
            unset($pages[0], $pages[1]);

            $p = $_GET['p'];
            if(in_array($p.'.php', $pages)) {
                include($pages_dir.'/'.$p.'.php');
            } else {
                include($pages_dir.'/404.php');
            }
        } else {
            include($pages_dir.'/home.php');
        }
    ?>
    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 PT Kartini Teh Nasional. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php?p=home">Home</a></li>
                        <li><a href="index.php?p=about-us">About Us</a></li>
                        <li><a href="index.php?p=contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>