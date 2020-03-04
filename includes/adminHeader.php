<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!"><i class="material-icons">person_outline</i>Profile</a></li>
    <li><a href="#!"><i class="material-icons">security</i>Change Password</a></li>
    <li class="divider"></li>
    <li><a href="#!"><i class="material-icons">keyboard_tab</i>Logout</a></li>
</ul>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Welcome, Admin<i
                            class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
            <li class="divider"></li>
            <li><a href="#!"><i class="material-icons">person_outline</i>Profile</a></li>
            <li><a href="#!"><i class="material-icons">security</i>Change Password</a></li>
            <li><a href="#!"><i class="material-icons">keyboard_tab</i>Logout</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<ul id="slide-out" class="sidenav sidenav-fixed">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
</ul>