<?php
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
$project_id = $_GET['project_id'];
if(!$Projects->checkUserToProject($user_id, $project_id)){
    header("location:/");
    exit();
}

$Project = $Projects->getProjects($project_id);
if($Project->deadline==NULL OR $Project->deadline=="None" OR $Project->deadline=="0000-00-00 00:00:00"){
    $deadline = "None";
}else{
    $deadline = strftime("%d. %B %Y %H:%M", strtotime($Project->deadline));
}


include $_SERVER['DOCUMENT_ROOT'].'/lib/header.php';
?>
<main class="mdl-layout__content">

    <div class="mdl-grid mdl-grid--no-spacing">

        <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp pie-chart">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><?php echo $Project->name; ?></h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table projects-table">
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Deadline</td>
                                    <td class="mdl-data-table__cell--numeric"><?php echo $deadline; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp pie-chart">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Members</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table projects-table">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                                    <th class="mdl-data-table__cell--non-numeric">Tasks</th>
                                    <th class="mdl-data-table__cell--non-numeric">Total Time Used</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Users = $Projects->getProjectUsers($project_id);
                                foreach ($Users as $user) {
                                    $getUser = $Account->getUsers($user->user_id);

                                    $totalTime = $Projects->getProjectTotalTime($project_id, $user->user_id);

                                    if(empty($totalTime)){
                                        $totalTime = "Nothing recorded";
                                    }else{
                                        $totalTime = Basics::secondsToTime($totalTime);
                                    }
                                    ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $getUser->name; ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $totalTime; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Trending widget-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp trending">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Trending</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list">
                            <li class="mdl-list__item">
                                <span class="mdl-list__item-primary-content list__item-text">UX</span>
                                <span class="mdl-list__item-secondary-content">
                                    <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                </span>
                                <span class="mdl-list__item-secondary-content trending__percent">1 %</span>
                            </li>
                            <li class="mdl-list__item list__item--border-top">
                                <span class="mdl-list__item-primary-content list__item-text">PHP</span>
                                <span class="mdl-list__item-secondary-content">
                                    <i class="material-icons trending__arrow-down" role="presentation">&#xE5C5</i>
                                </span>
                                <span class="mdl-list__item-secondary-content trending__percent">2 %</span>
                            </li>
                            <li class="mdl-list__item list__item--border-top">
                                <span class="mdl-list__item-primary-content list__item-text ">Big Data</span>
                                <span class="mdl-list__item-secondary-content">
                                    <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                </span>
                                <span class="mdl-list__item-secondary-content trending__percent">5 %</span>
                            </li>
                            <li class="mdl-list__item list__item--border-top">
                                <span class="mdl-list__item-primary-content list__item-text">Material Design</span>
                                <span class="mdl-list__item-secondary-content">
                                    <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                </span>
                                <span class="mdl-list__item-secondary-content trending__percent">18 %</span>
                            </li>
                            <li class="mdl-list__item list__item--border-top">
                                <span class="mdl-list__item-primary-content">JavaScript</span>
                                <span class="mdl-list__item-secondary-content">
                                    <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                </span>
                                <span class="mdl-list__item-secondary-content trending__percent">17 %</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Table-->
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone overflow-x-auto">
                <div class="mdl-card mdl-shadow--2dp todo">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Tasks</h2>
                    </div>
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Member</th>
                                <th class="mdl-data-table__cell--non-numeric">Start Time</th>
                                <th class="mdl-data-table__cell--non-numeric">End Time</th>
                                <th class="mdl-data-table__cell--non-numeric">Time used</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone overflow-x-auto">
                <!-- ToDo_widget-->
                <div class="mdl-card mdl-shadow--2dp todo">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">To-do list</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <ul class="mdl-list">

                        </ul>
                    </div>
                    <div class="mdl-card__actions">
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect">remove selected</button>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--fab mdl-shadow--8dp mdl-button--colored ">
                            <i class="material-icons mdl-js-ripple-effect">add</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/footer.php';
