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


if(isset($_POST['createTask'])){
    $name = $_POST['taskName'];

    if(empty($name)){
        $errors[] = "You have to give your tasks a name!";
    }


    if(empty($errors)){
        $Projects->createTask($project_id, $user_id, $name);
        Alert::setAlert("success", array("Your task is now created!"));
        header("location:/project/".$project_id);
        exit();
    }else{
        Alert::setAlert("danger", $errors);
    }
}

include $_SERVER['DOCUMENT_ROOT'].'/lib/header.php';
?>
<main class="mdl-layout__content">

    <div class="mdl-grid mdl-grid--no-spacing">

        <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp pie-chart">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Project Information</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table projects-table">
                            <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Project Name</td>
                                    <td class="mdl-data-table__cell--numeric"><?php echo $Project->name; ?></td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">Deadline</td>
                                    <td class="mdl-data-table__cell--numeric"><?php echo $deadline; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--2-col-phone overflow-x-auto">
                <div class="mdl-card mdl-shadow--2dp pie-chart">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Members</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <table class="mdl-data-table mdl-js-data-table projects-table">
                            <thead>
                                <tr>
                                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                                    <th class="mdl-data-table__cell--numeric">Tasks</th>
                                    <th class="mdl-data-table__cell--non-numeric">Total Time Used</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $Users = $Projects->getProjectUsers($project_id);
                                foreach ($Users as $user) {
                                    $getUser = $Account->getUsers($user->user_id);

                                    $totalTimes = $Projects->getProjectTotalTime($project_id, $user->user_id);

                                    if(empty($totalTimes->totaltime)){
                                        $totalTime = "Nothing recorded";
                                    }else{
                                        $totalTime = Basics::secondsToTime($totalTimes->totaltime);
                                    }
                                    ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?php echo $getUser->name; ?></td>
                                        <td class="mdl-data-table__cell--numeric"><?php echo $totalTimes->totaltasks;?></td>
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


            <!-- Table-->
            <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--6-col-phone overflow-x-auto">
                <div class="mdl-card mdl-shadow--2dp tasks">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Tasks</h2>
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-card__subtitle-text">
                            <a href="#" data-toggle="modal" data-target="#createTask" class="mdl-button mdl-button--small" data-upgraded=",MaterialButton">Create Task</a>
                        </div>
                    </div>
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric"></th>
                                <th class="mdl-data-table__cell--non-numeric">Name</th>
                                <th class="mdl-data-table__cell--non-numeric">Member</th>
                                <th class="mdl-data-table__cell--non-numeric">Start Time</th>
                                <th class="mdl-data-table__cell--non-numeric">End Time</th>
                                <th class="mdl-data-table__cell--non-numeric">Time used</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-check"></i></td>
                                <td class="mdl-data-table__cell--non-numeric">Working on create account</td>
                                <td class="mdl-data-table__cell--non-numeric">René Dyhr</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 10:00</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 12:00</td>
                                <td class="mdl-data-table__cell--non-numeric">2 hours</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-times"></i></td>
                                <td class="mdl-data-table__cell--non-numeric">Working on create account</td>
                                <td class="mdl-data-table__cell--non-numeric">René Dyhr</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 10:00</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 12:00</td>
                                <td class="mdl-data-table__cell--non-numeric">2 hours</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-clock-o"></i></td>
                                <td class="mdl-data-table__cell--non-numeric">Working on create account</td>
                                <td class="mdl-data-table__cell--non-numeric">René Dyhr</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 10:00</td>
                                <td class="mdl-data-table__cell--non-numeric">26. Feb 2017, 12:00</td>
                                <td class="mdl-data-table__cell--non-numeric">2 hours</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--6-col-phone overflow-x-auto">
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


<div id="createTask" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create Task</h4>
            </div>
            <form action="#" method="post" class="form">
                <div class="modal-body settings">
                    <div class="form__article">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="taskName" id="taskName" value=""/>
                                <label class="mdl-textfield__label" for="taskName">Task Name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="mdl-button" data-dismiss="modal" data-upgraded=",MaterialButton,MaterialRipple">Close</button>
                    <button name="createTask" type="submit" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored-blue" data-upgraded=",MaterialButton">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/footer.php';
