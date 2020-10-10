<!doctype html>
<html lang="en">

<head>
<title>:: Mplify :: Blog Dashboard</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
<meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/admin/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/admin/vendor/animate-css/animate.min.css">
<link rel="stylesheet" href="../assets/admin/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="../assets/admin/vendor/morrisjs/morris.css" />
<link rel="stylesheet" href="../assets/admin/vendor/summernote/dist/summernote.css"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="../assets/admin/css/main.css">
<link rel="stylesheet" href="../assets/admin/css/color_skins.css">
</head>
<body class="theme-blue">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/admin/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay" style="display: none;"></div>

<div id="wrapper">

    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-brand">
                <a href="index.html">
                    <img src="../assets/admin/images/logo-icon.svg" alt="Mplify Logo" class="img-responsive logo">
                    <span class="name">mplify</span>
                </a>
            </div>
            
            <div class="navbar-right">
                <ul class="list-unstyled clearfix mb-0">
                    <li>
                        <div class="navbar-btn btn-toggle-show">
                            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                        </div>                        
                        <a href="javascript:void(0);" class="btn-toggle-fullwidth btn-toggle-hide"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form id="navbar-search" class="navbar-form search-form">
                            <input value="" class="form-control" placeholder="Search here..." type="text">
                            <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                        </form>
                    </li>
                    <li>
                        <div id="navbar-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                        <img class="rounded-circle" src="../assets/admin/images/user-small.png" width="30" alt="">
                                    </a>
                                    <div class="dropdown-menu animated flipInY user-profile">
                                        <div class="d-flex p-3 align-items-center">
                                            <div class="drop-left m-r-10">
                                                <img src="../assets/admin/images/user-small.png" class="rounded" width="50" alt="">
                                            </div>
                                            <div class="drop-right">
                                                <h4>Samuel Morriss</h4>
                                                <p class="user-name">samuelmorris@info.com</p>
                                            </div>
                                        </div>
                                        <div class="m-t-10 p-3 drop-list">
                                            <ul class="list-unstyled">
                                                <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                                                <li><a href="#"><i class="icon-envelope-open"></i>Messages</a></li>
                                                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                                                <li class="divider"></li>
                                                <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="leftsidebar" class="sidebar">
        <div class="sidebar-scroll">
            <nav id="leftsidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="heading">Main</li>
                    <li class="active">
                        <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Blog</span></a>
                        <ul>
                            <li><a href="{{ 'index' }}">Dashboard</a></li>
                            <li><a href="{{ 'blog-add' }}">New Post</a></li>
                            <li><a href="{{ 'blog-list' }}">Blog List</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>