<?php
include_once 'includes/db.php';
include_once 'includes/functions.php';
include_once 'includes/tolink.php';
include_once 'includes/time_stamp.php';
include_once 'session.php';

$Wall = new Wall_Updates();
$updatesarray=$Wall->Updates($uid);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>UAJM's Life</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/wall.css">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- Costum Script  -->
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/jquery.oembed.js"></script>
        <script type="text/javascript" src="js/wall.js"></script>
        <!-- Custom JavaScript for the Menu Toggle -->
        <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });
        </script>
    </head>

    <body>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a href="#">UAJM's LIFE</a>
                    </li>
                    <li><a href="#">Dashboard</a>
                    </li>
                    <li><a href="#">Shortcuts</a>
                    </li>
                    <li><a href="#">Overview</a>
                    </li>
                    <li><a href="#">Events</a>
                    </li>
                    <li><a href="#">About</a>
                    </li>
                    <li><a href="#">Services</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- Page content -->
            <div id="page-content-wrapper">
                <!--mid column-->
                <div class="col-md-9">
                    <div class="panel">
                        <div class="panel-heading" style="background-color:#111;color:#fff;">Stories</div>
                        <div class="panel-body">
                            <!-- tempat update -->
                            <div class="well">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group" style="padding:14px;">
                                        <textarea class="form-control" id="update" placeholder="Update your status"></textarea>
                                    </div>
                                    <button class="btn btn-primary pull-right update_button" type="button">Post</button>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default">+1</button>
                                            <button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
                                        </div>
                                        <input class="form-control" placeholder="#Hastags, #UAJM, #Apasaja.." type="text">
                                    </div>
                                </form>
                            </div>
                            <!-- end of tempat update -->
                            <div id='flashmessage'>
                                <div id="flash" align="left"></div>
                            </div>
                            <div id="content">
                                <?php include('load_messages.php'); ?>
                            </div>
                        </div>
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->
                </div>
                <!--/end mid column-->
                <!-- right content column-->
                <div class="col-md-3">
                    <div class="panel" id="midCol">
                        <div class="panel-heading" style="background-color:#555;color:#eee;">New Stories</div>
                        <div class="panel-body">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-thumbnail" src="assets/img/foto_profil/136.jpg" height="80" width="80">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="/tagged/modal" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Modal</strong></a></h5>
                                    <small>Kami dari Fakultas Teknologi Info UAJ...</small>
                                    <br>
                                    <br>
                                    <span class="glyphicon glyphicon-comment"> 87</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="/tagged/slider" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Carousel</strong></a></h5>
                                    <small>How to use the Bootstrap slider.</small>
                                    <br>
                                    <span class="badge">322</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="/tagged/typography" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>Typography</strong></a></h5>
                                    <small>See the various textual elements and options.</small>
                                    <br>
                                    <span class="badge">44</span>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placehold.it/80/F0F0F0">
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="/tagged/media" target="ext" class="pull-right"><i class="glyphicon glyphicon-share"></i></a> <a href="#"><strong>@Media</strong></a></h5>
                                    <small>Use @media queries to get the layout you want.</small>
                                    <br>
                                    <span class="badge">119</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/panel-->
                </div>
                <!--/end right column-->
            </div>
            <!-- ./Page Content Wrapper -->
        </div>
    </body>

    </html>
