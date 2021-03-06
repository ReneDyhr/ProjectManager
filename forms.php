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
                <a class="mdl-navigation__link mdl-navigation__link--current" href="forms.html">
                    <i class="material-icons" role="presentation">person</i>
                    Account
                </a>
                <a class="mdl-navigation__link" href="maps.html">
                    <i class="material-icons" role="presentation">map</i>
                    Maps
                </a>
                <a class="mdl-navigation__link" href="ui.html">
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

        <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-card mdl-shadow--2dp employer-form" action="#">
                <div class="mdl-card__title">
                    <h2>Form</h2>
                    <div class="mdl-card__subtitle">Please complete the form</div>
                </div>

                <div class="mdl-card__supporting-text">
                    <form action="#" class="form">
                        <div class="form__article">
                            <h3>Personal data</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="firstName" value="Luke"/>
                                    <label class="mdl-textfield__label" for="firstName">First name</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="secondName" value="Skywalker"/>
                                    <label class="mdl-textfield__label" for="secondName">Second name</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="birthday" value="25 May, 1977"/>
                                    <label class="mdl-textfield__label" for="birthday">Birthday</label>
                                </div>

                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Male" type="text" id="gender" readonly tabIndex="-1"/>

                                    <label class="mdl-textfield__label" for="gender">Gender</label>

                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="gender">
                                        <li class="mdl-menu__item">Male</li>
                                        <li class="mdl-menu__item">Female</li>
                                    </ul>

                                    <label for="gender">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form__article">
                            <h3>Employment</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" value="CreativeIT" id="company" disabled/>
                                    <label class="mdl-textfield__label" for="company">Company</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="company_email" value="hello@creativit.io" disabled/>
                                    <label class="mdl-textfield__label" for="company_email">Company email</label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" value="Lead developer" id="position"/>
                                    <label class="mdl-textfield__label" for="position">Position</label>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                    <input class="mdl-textfield__input" value="Senior" type="text" id="qualification" readonly tabIndex="-1"/>
                                    <label class="mdl-textfield__label" for="qualification">Qualification</label>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown"
                                        for="qualification">
                                        <li class="mdl-menu__item">Young Padawan</li>
                                        <li class="mdl-menu__item">Junior</li>
                                        <li class="mdl-menu__item">Middle</li>
                                        <li class="mdl-menu__item">Senior</li>
                                    </ul>
                                    <label for="qualification">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <span>Type of employment:</span>

                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-fulltime">
                                <input type="radio" id="partition-fulltime" class="mdl-radio__button" name="employment" value="1" checked/>
                                <span class="mdl-radio__label">Fulltime</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-partTime">
                                <input type="radio" id="partition-partTime" class="mdl-radio__button" name="employment" value="2"/>
                                <span class="mdl-radio__label">Part time</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="partition-remote">
                                <input type="radio" id="partition-remote" class="mdl-radio__button" name="employment" value="3"/>
                                <span class="mdl-radio__label">Remote</span>
                            </label>
                        </div>

                        <div class="form__article employer-form__contacts">
                            <h3>Contacts</h3>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">call</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="phone">
                                        <label class="mdl-textfield__label" for="phone">XXX-XX-XX</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Mobile" type="text" id="phone_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="phone_type">
                                        <li class="mdl-menu__item">Mobile</li>
                                        <li class="mdl-menu__item">Home</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="phone_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <img src="images/skype.svg">

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="skype" value="Pilot_luke"/>
                                        <label class="mdl-textfield__label" for="skype">Skype</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Personal" type="text" id="skype_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="skype_type">
                                        <li class="mdl-menu__item">Personal</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="skype_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">mail_outline</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="email" value="luke@skywalker.com"/>
                                        <label class="mdl-textfield__label" for="email">Email</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Work" type="text" id="email_type" readonly tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="email_type">
                                        <li class="mdl-menu__item">Personal</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="email_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>

                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--9-col input-group">
                                    <i class="material-icons pull-left">place</i>

                                    <div class="mdl-textfield mdl-js-textfield pull-left">
                                        <input class="mdl-textfield__input" type="text" id="address"/>
                                        <label class="mdl-textfield__label" for="address">Address</label>
                                    </div>
                                </div>

                                <div class="mdl-cell mdl-cell--3-col mdl-textfield mdl-js-textfield getmdl-select">
                                    <input class="mdl-textfield__input" value="Home" type="text" id="address_type" readonly
                                           tabIndex="-1"/>
                                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="address_type">
                                        <li class="mdl-menu__item">Home</li>
                                        <li class="mdl-menu__item">Work</li>
                                    </ul>
                                    <label for="address_type">
                                        <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form__article employer-form__general_skills">
                            <h3>General skills</h3>

                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="3" id="AboutMe"></textarea>
                                <label class="mdl-textfield__label" for="AboutMe">About me</label>
                            </div>
                        </div>

                        <div class="form__action">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="isInfoReliable">
                                <input type="checkbox" id="isInfoReliable" class="mdl-checkbox__input" required/>
                                <span class="mdl-checkbox__label">Entered information is reliable</span>
                            </label>
                            <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                Submit
                            </button>
                        </div>
                    </form>
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
