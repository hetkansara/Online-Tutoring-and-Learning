<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>iTutor</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<header>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!"><i class="material-icons">person_outline</i>Profile</a></li>
        <li><a href="#!"><i class="material-icons">security</i>Change Password</a></li>
        <li class="divider"></li>
        <li><a href="#!"><i class="material-icons">keyboard_tab</i>Logout</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav class="blue-grey" role="navigation">
            <div class="nav-wrapper">
                <a id="logo-container" href="#" class="brand-logo logo-font">iTutor</a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown1">Welcome, Admin<i
                                    class="material-icons right">arrow_drop_down</i></a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="sidenav admin-mobilemenu">
                    <li><a href="#!"><i class="material-icons">face</i>Students</a></li>
                    <li><a href="#!"><i class="material-icons">supervisor_account</i>Tutors</a></li>
                    <li><a href="#!"><i class="material-icons">subject</i>Subjects</a></li>
                    <li><a href="#!"><i class="material-icons">note</i>Learning Materials</a></li>
                    <li><a href="#!"><i class="material-icons">work</i>Job Openings</a></li>
                    <li><a href="#!"><i class="material-icons">help_outline</i>FAQs</a></li>
                    <li class="divider"></li>
                    <li><a href="#!"><i class="material-icons">person_outline</i>Profile</a></li>
                    <li><a href="#!"><i class="material-icons">security</i>Change Password</a></li>
                    <li><a href="#!"><i class="material-icons">keyboard_tab</i>Logout</a></li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
</header>
<aside>
    <ul id="slide-out" class="sidenav sidenav-fixed">
        <li class="brand-sidebar blue-grey">
            <a id="logo-container" href="#" class="brand-logo logo-font">iTutor</a>
        </li>
        <li><a href="#!"><i class="material-icons">face</i>Students</a></li>
        <li><a href="#!"><i class="material-icons">supervisor_account</i>Tutors</a></li>
        <li><a href="#!"><i class="material-icons">subject</i>Subjects</a></li>
        <li><a href="#!"><i class="material-icons">note</i>Learning Materials</a></li>
        <li><a href="#!"><i class="material-icons">work</i>Job Openings</a></li>
        <li><a href="#!"><i class="material-icons">help_outline</i>FAQs</a></li>
    </ul>
</aside>