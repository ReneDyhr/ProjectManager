<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
?>

<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Manager</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- inject:css -->
<link rel="stylesheet" href="css/lib/getmdl-select.min.css">
<link rel="stylesheet" href="css/lib/nv.d3.min.css">
<link rel="stylesheet" href="css/application.css">
<script src="js/custom.js"></script>
<!-- endinject -->

</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <!-- Search-->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                        <i class="material-icons">search</i>
                    </label>

                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="search"/>
                        <label class="mdl-textfield__label" for="search">Enter your query...</label>
                    </div>
                </div>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification" data-badge="23">
                    notifications_none
                </div>
                <!-- Notifications dropdown-->
                <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown" for="notification">
                    <li class="mdl-list__item">
                        You have 23 new notifications!
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--primary">
                                <i class="material-icons">plus_one</i>
                            </span>
                            <span>You have 3 new orders.</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label">just now</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--secondary">
                                <i class="material-icons">error_outline</i>
                            </span>
                            <span>Database error</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label">1 min</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--primary">
                                <i class="material-icons">new_releases</i>
                            </span>
                            <span>The Death Star is built!</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label">2 hours</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--primary">
                                <i class="material-icons">mail_outline</i>
                            </span>
                            <span>You have 4 new mails.</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label">5 days</span>
                        </span>
                    </li>
                    <li class="mdl-list__item list__item--border-top">
                        <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">ALL NOTIFICATIONS</button>
                    </li>
                </ul>

                <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon message" id="inbox" data-badge="4">
                    mail_outline
                </div>
                <!-- Messages dropdown-->
                <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown" for="inbox">
                    <li class="mdl-list__item">
                        You have 4 new messages!
                    </li>
                    <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--primary">
                                <text>A</text>
                            </span>
                            <span>Alice</span>
                            <span class="mdl-list__item-sub-title">Birthday Party</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label label--transparent">just now</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--baby-blue">
                                <text>M</text>
                            </span>
                            <span>Mike</span>
                            <span class="mdl-list__item-sub-title">No theme</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label label--transparent">5 min</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--cerulean">
                                <text>D</text>
                            </span>
                            <span>Darth</span>
                            <span class="mdl-list__item-sub-title">Suggestion</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label label--transparent">23 hours</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item mdl-list__item--two-line list__item--border-top">
                        <span class="mdl-list__item-primary-content">
                            <span class="mdl-list__item-avatar background-color--mint">
                                <text>D</text>
                            </span>
                            <span>Don McDuket</span>
                            <span class="mdl-list__item-sub-title">NEWS</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label label--transparent">30 Nov</span>
                        </span>
                    </li>
                    <li class="mdl-list__item list__item--border-top">
                        <button href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">SHOW ALL MESSAGES</button>
                    </li>
                </ul>

                <div class="avatar-dropdown" id="icon">
                    <span>Luke</span>
                    <img src="images/Icon_header.png">
                </div>
                <!-- Account dropdawn-->
                <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown" for="icon">
                    <li class="mdl-list__item mdl-list__item--two-line">
                        <span class="mdl-list__item-primary-content">
                            <span class="material-icons mdl-list__item-avatar"></span>
                            <span>Luke</span>
                            <span class="mdl-list__item-sub-title">Luke@skywalker.com</span>
                        </span>
                    </li>
                    <li class="list__item--border-top"></li>
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon">account_circle</i>
                            My account
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon">check_box</i>
                            My tasks
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <span class="label background-color--primary">3 new</span>
                        </span>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon">perm_contact_calendar</i>
                            My events
                        </span>
                    </li>
                    <li class="list__item--border-top"></li>
                    <li class="mdl-menu__item mdl-list__item">
                        <a href="settings.php" style="color:#fff;" class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon">settings</i>
                            Settings
                        </a>
                    </li>
                    <li class="mdl-menu__item mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                            Log out
                        </span>
                    </li>
                </ul>

                <button id="more" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown" for="more">
                    <li class="mdl-menu__item">
                        Settings
                    </li>
                    <a class="mdl-menu__item" href="https://github.com/CreativeIT/getmdl-dashboard/issues">
                        Support
                    </a>
                    <li class="mdl-menu__item">
                        F.A.Q.
                    </li>
                </ul>
            </div>
        </header>

        <div class="mdl-layout__drawer">
            <header>darkboard</header>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link mdl-navigation__link--current" href="index.php">
                    <i class="material-icons" role="presentation">dashboard</i>
                    Dashboard
                </a>
                <a class="mdl-navigation__link mdl-navigation__link" href="/create-project">
                    <i class="material-icons" role="presentation">create</i>
                    Create Project
                </a>
                <a class="mdl-navigation__link" href="forms.php">
                    <i class="material-icons" role="presentation">person</i>
                    Account
                </a>
                <a class="mdl-navigation__link" href="maps.php">
                    <i class="material-icons" role="presentation">map</i>
                    Maps
                </a>
                <a class="mdl-navigation__link" href="ui.php">
                    <i class="material-icons">view_comfy</i>
                    UI Elements
                </a>

                <div class="mdl-layout-spacer"></div>
                <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                    <i class="material-icons" role="presentation">link</i>
                    GitHub
                </a>
            </nav>
        </div>
