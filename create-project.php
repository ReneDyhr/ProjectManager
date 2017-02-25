<?php
include $_SERVER['DOCUMENT_ROOT'].'/config.php';
if(isset($_POST['create'])){
    $name = $_POST['name'];
    $deadline = $_POST['deadline'];
    $description = $_POST['description'];

    if(empty($name)){
        $errors[] = "You have to give it a name!";
    }

    if(empty($deadline)){
        $errors[] = "You have to give it a deadline!";
    }

    if(empty($description)){
        $errors[] = "You have to give it a description!";
    }


    if(empty($errors)){
        $Projects->createProject($user_id, $name, $deadline, $description);
        Alert::setAlert("success", array("Your project is now created!"));
        header("location:/index.php");
        exit();
    }else{
        Alert::setAlert("danger", $errors);
    }
}

include $_SERVER['DOCUMENT_ROOT'].'/lib/header.php';
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp settings">
        <div class="mdl-card__title">
            <h2>Create Project</h2>
            <div class="mdl-card__subtitle">Please complete the form</div>
        </div>

        <div class="mdl-card__supporting-text">
            <form action="#" method="post" class="form">
                <div class="form__article">
                    <h3>Project data</h3>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="name" id="projectName" value=""/>
                            <label class="mdl-textfield__label" for="projectName">Project Name</label>
                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="deadline" type="text" id="deadline" value="None"/>
                            <label class="mdl-textfield__label" for="deadline">Deadline</label>
                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <textarea class="mdl-textfield__input" name="description" type="text" rows="3" id="description"></textarea>
                            <label class="mdl-textfield__label" for="description">Description</label>
                        </div>
                    </div>

                </div>


                <div class="form__action">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="isInfoReliable">
                        <input type="checkbox" id="isInfoReliable" class="mdl-checkbox__input" required/>
                        <span class="mdl-checkbox__label">Entered information is reliable</span>
                    </label>
                    <button name="create" type="submit" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<script src="js/settings.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/footer.php';
