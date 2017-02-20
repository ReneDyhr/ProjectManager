<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Dashboard Lite</title>

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

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                    <i class="material-icons">search</i>
                </label>

                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search"/>
                    <label class="mdl-textfield__label" for="search">Enter your query...</label>
                </div>
            </div>

            <div class="material-icons mdl-badge mdl-badge--overlap mdl-button--icon notification" id="notification"
                 data-badge="23">
                notifications_none
            </div>

            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp notifications-dropdown"
                for="notification">
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

            <ul class="mdl-menu mdl-list mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right mdl-shadow--2dp messages-dropdown"
                for="inbox">
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

            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
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
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">settings</i>
                        Settings
                    </span>
                </li>
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Log out
                    </span>
                </li>
            </ul>

            <button id="more"
                    class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp settings-dropdown"
                for="more">
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
            <a class="mdl-navigation__link" href="index.html">
                <i class="material-icons" role="presentation">dashboard</i>
                Dashboard
            </a>
            <a class="mdl-navigation__link" href="forms.html">
                <i class="material-icons" role="presentation">person</i>
                Account
            </a>
            <a class="mdl-navigation__link" href="maps.html">
                <i class="material-icons" role="presentation">map</i>
                Maps
            </a>
            <a class="mdl-navigation__link mdl-navigation__link--current" href="ui.html">
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

    <main class="mdl-layout__content">
        <div class="mdl-grid">

            <!-- UI Buttons-->
            <div class="mdl-cell mdl-cell--10-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone">
                <div class="mdl-card mdl-shadow--2dp ui-buttons">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Buttons</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="ui-section pull-left">
                        <h6>STANDART BUTTONS</h6>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Normal</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-light-blue">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-blue">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-yellow">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-red">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-purple">
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button">
                                    Button
                                </button>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Disabled</span>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-light-blue" disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-blue" disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-yellow" disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-red" disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-purple" disabled>
                                    Button
                                </button>
                            </li>
                            <li class="mdl-list__item">
                                <button class="mdl-button mdl-js-button" disabled>
                                    Button
                                </button>
                            </li>
                        </ul>
                    </div>
                        <div class="ui-section pull-left">
                            <h6>BUTTONS WITH ICONS</h6>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Normal</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-light-blue">
                                        <i class="material-icons">assignment_returned</i>
                                        Archive
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-blue">
                                        <i class="material-icons">create</i>
                                        Create
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-yellow">
                                        <i class="material-icons">drafts</i>
                                        Drafts
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-red">
                                        <i class="material-icons">forward</i>
                                        Forward
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-purple">
                                        <i class="material-icons">reply</i>
                                        Reply
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button">
                                        <i class="material-icons">send</i>
                                        Send
                                    </button>
                                </li>
                            </ul>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-light-blue" disabled>
                                        <i class="material-icons">assignment_returned</i>
                                        Archive
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-blue" disabled>
                                        <i class="material-icons">create</i>
                                        Create
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-yellow" disabled>
                                        <i class="material-icons">drafts</i>
                                        Drafts
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-red" disabled>
                                        <i class="material-icons">forward</i>
                                        Forward
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-purple" disabled>
                                        <i class="material-icons">reply</i>
                                        Reply
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button" disabled>
                                        <i class="material-icons">send</i>
                                        Send
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="ui-section pull-left">
                            <h6>SOCIAL BUTTONS</h6>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Normal</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--facebook">
                                        <i class="material-icons"></i>
                                        Facebook
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--twitter">
                                        <i class="material-icons"></i>
                                        Twitter
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--dribble">
                                        <i class="material-icons"></i>
                                        Dribble
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--behance">
                                        <i class="material-icons"></i>
                                        Behance
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--linkedin">
                                        <i class="material-icons"></i>
                                        Linkedin
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--github">
                                        <i class="material-icons"></i>
                                        Github
                                    </button>
                                </li>
                            </ul>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--facebook" disabled>
                                        <i class="material-icons"></i>
                                        Facebook
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--twitter" disabled>
                                        <i class="material-icons"></i>
                                        Twitter
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--dribble" disabled>
                                        <i class="material-icons"></i>
                                        Dribble
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--behance" disabled>
                                        <i class="material-icons"></i>
                                        Behance
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--linkedin" disabled>
                                        <i class="material-icons"></i>
                                        Linkedin
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--github" disabled>
                                        <i class="material-icons"></i>
                                        Github
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="ui-section pull-left">
                            <h6>ICON BUTTONS</h6>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Normal</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored-light-blue">
                                        <i class="material-icons">assignment_returned</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored-blue">
                                        <i class="material-icons">create</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored-yellow">
                                        <i class="material-icons">drafts</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored-red">
                                        <i class="material-icons">forward</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect mdl-button--colored-purple">
                                        <i class="material-icons">reply</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                        <i class="material-icons">send</i>
                                    </button>
                                </li>
                            </ul>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored-light-blue" disabled>
                                        <i class="material-icons">assignment_returned</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored-blue" disabled>
                                        <i class="material-icons">create</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored-yellow" disabled>
                                        <i class="material-icons">drafts</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored-red" disabled>
                                        <i class="material-icons">forward</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored-purple" disabled>
                                        <i class="material-icons">reply</i>
                                    </button>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--icon" disabled>
                                        <i class="material-icons">send</i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="ui-section pull-left">
                            <h6>FAB BUTTON</h6>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Normal</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                                        <i class="material-icons">add</i>
                                    </button>
                                </li>
                            </ul>
                            <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Disabled</span>
                                </li>
                                <li class="mdl-list__item">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" disabled>
                                        <i class="material-icons">add</i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UI Progress bar-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card mdl-shadow--2dp ui-progress-bars">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Progress bar</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list pull-left">
                            <li class="mdl-list__item">
                                <span class="text-color--gray">Deafult</span>
                            </li>
                            <li class="mdl-list__item">
                                <div id="p1" class="mdl-progress mdl-js-progress mdl-progress--red"></div>
                                <script>
                                    document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
                                        this.MaterialProgress.setProgress(44);
                                    });
                                </script>
                            </li>
                            <li class="mdl-list__item">
                                <div id="p2" class="mdl-progress mdl-js-progress mdl-progress--yellow"></div>
                                <script>
                                    document.querySelector('#p2').addEventListener('mdl-componentupgraded', function() {
                                        this.MaterialProgress.setProgress(44);
                                    });
                                </script>
                            </li>
                            <li class="mdl-list__item">
                                <div id="p3" class="mdl-progress mdl-js-progress mdl-progress--light-blue"></div>
                                <script>
                                    document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
                                        this.MaterialProgress.setProgress(86);
                                    });
                                </script>
                            </li>
                            <li class="mdl-list__item">
                                <div id="p4" class="mdl-progress mdl-js-progress mdl-progress--purple"></div>
                                <script>
                                    document.querySelector('#p4').addEventListener('mdl-componentupgraded', function() {
                                        this.MaterialProgress.setProgress(66);
                                    });
                                </script>
                            </li>
                        </ul>
                        <ul class="mdl-list pull-left">
                                <li class="mdl-list__item">
                                    <span class="text-color--gray">Indeterminate</span>
                                </li>
                                <li class="mdl-list__item">
                                    <div id="p5" class="mdl-progress mdl-js-progress mdl-progress__indeterminate mdl-progress--red"></div>
                                </li>
                                <li class="mdl-list__item">
                                    <div id="p6" class="mdl-progress mdl-js-progress mdl-progress__indeterminate mdl-progress--yellow"></div>
                                </li>
                                <li class="mdl-list__item">
                                    <div id="p7" class="mdl-progress mdl-js-progress mdl-progress__indeterminate mdl-progress--light-blue"></div>
                                </li>
                                <li class="mdl-list__item">
                                    <div id="p8" class="mdl-progress mdl-js-progress mdl-progress__indeterminate mdl-progress--purple"></div>
                                </li>

                            </ul>
                    </div>
                </div>
            </div>

            <!-- UI Toggles-->
            <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--5-col-tablet mdl-cell--5-col-phone">
                <div class="mdl-card mdl-shadow--2dp ui-toggles">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Toggles</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="ui-section pull-left">
                            <h6>RADIO BUTTON</h6>
                            <ul class="mdl-list">
                                <li class="mdl-list__item">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-radio--colored-red" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="2">
                                        <span class="mdl-radio__label">Apple</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-radio--colored-yellow" for="option-2">
                                        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2" checked>
                                        <span class="mdl-radio__label">Orange</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-radio--colored-light-blue" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="2">
                                        <span class="mdl-radio__label">Grapes</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-radio--colored-purple" for="option-4">
                                        <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="2">
                                        <span class="mdl-radio__label">Cherry</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="ui-section pull-left">
                            <h6>CHECKBOX</h6>
                            <ul class="mdl-list">
                                <li class="mdl-list__item">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-checkbox--colored-red " for="checkbox-1">
                                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Apple</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-checkbox--colored-yellow" for="checkbox-2">
                                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" checked>
                                        <span class="mdl-checkbox__label">Orange</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-checkbox--colored-light-blue" for="checkbox-3">
                                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" checked>
                                        <span class="mdl-checkbox__label">Grapes</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-checkbox--colored-purple" for="checkbox-4">
                                        <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Cherry</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="ui-section pull-left">
                            <h6>SWITCH</h6>
                            <ul class="mdl-list">
                                <li class="mdl-list__item">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-switch--colored-red" for="switch-1">
                                        <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                        <span class="mdl-switch__label">Apple</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-switch--colored-yellow" for="switch-2">
                                        <input type="checkbox" id="switch-2" class="mdl-switch__input">
                                        <span class="mdl-switch__label">Orange</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-switch--colored-light-blue" for="switch-3">
                                        <input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
                                        <span class="mdl-switch__label">Grapes</span>
                                    </label>
                                </li>
                                <li class="mdl-list__item">
                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-switch--colored-purple" for="switch-4">
                                        <input type="checkbox" id="switch-4" class="mdl-switch__input">
                                        <span class="mdl-switch__label">Cherry</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

</div>

<!-- inject:js -->
<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/widgets/employer-form/employer-form.min.js"></script>
<script src="js/widgets/line-chart/line-chart-nvd3.min.js"></script>
<script src="js/widgets/map/maps.min.js"></script>
<script src="js/widgets/pie-chart/pie-chart-nvd3.min.js"></script>
<script src="js/widgets/table/table.min.js"></script>
<script src="js/widgets/todo/todo.min.js"></script>
<!-- endinject -->

</body>
</html>
