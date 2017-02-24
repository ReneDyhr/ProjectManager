<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/header.php';
?>
<main class="mdl-layout__content">

    <div class="mdl-grid mdl-grid--no-spacing">

        <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">

            <!-- Pie chart-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp pie-chart">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">My Day</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="pie-chart__container">

                        </div>
                    </div>
                </div>
            </div>
            <!-- Weather widget-->
            <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col-phone">
                <div class="mdl-card mdl-shadow--2dp weather">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Weather</h2>
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-card__subtitle-text">
                            <i class="material-icons">room</i>
                            <span class="weather-city"></span>
                        </div>
                    </div>
                    <div class="mdl-card__supporting-text mdl-card--expand">
                        <p class="weather-temperature"></p>

                        <p class="weather-description"></p>
                        <p class="weather-update"></p>
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
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Project</th>
                            <th class="mdl-data-table__cell--non-numeric">Users</th>
                            <th class="mdl-data-table__cell--non-numeric">Deadline</th>
                            <th class="mdl-data-table__cell--non-numeric">Total Time Used</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Projects->getUserProjects($user_id) as $project) {
                            $Project = $Projects->getProjects($project->project_id);

                            $totalTime = $Projects->getProjectTotalTime($Project->id, $user_id);

                            $userList = "";
                            foreach ($Projects->getProjectUsers($Project->id) as $user_id) {
                                $userList .= $user_id->user_id;
                            }

                            if($Project->deadline==NULL){
                                $deadline = "None";
                            }else{
                                $deadline = $Project->deadline;
                            }
                            ?>
                            <tr class="is-selected">
                                <td class="mdl-data-table__cell--non-numeric"><a href="#"><?php echo $Project->name; ?></a></td>
                                <td class="mdl-data-table__cell--non-numeric"><?php echo $userList; ?></td>
                                <td class="mdl-data-table__cell--non-numeric"><?php echo $deadline; ?></td>
                                <td class="mdl-data-table__cell--non-numeric"><?php echo Basics::secondsToTime($totalTime); ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
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
<script>

function getMinutesBetweenDates(startDate, endDate) {
    var diff = endDate.getTime() - startDate.getTime();
    return (diff / 60000);
}

function weather(lat, lng){
    $.getJSON('http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon=' + lng + '&appid=5342396fae3e79c95bce218695ccdd33&units=metric', function(data){

        var update = Math.floor(getMinutesBetweenDates(new Date(data['dt']*1000), new Date()));

        var city = data['name'] + ', ' + data['sys']['country'];
        var temp = Math.round( data['main']['temp'] * 10 ) / 10;
        var wind = "Wind " + data['wind']['speed'] + " m/s";
        $('.weather-city').html(city);
        $('.weather-temperature').html(temp + "<sup>&deg;</sup>");
        $('.weather-description').html(wind);

        $('.weather-update').html("Last updated " + update + " minutes ago");
    });
}


if(localStorage.location==undefined){
    weather(localStorage.lat, localStorage.lng);
    console.log("TESTe");
}else{
    console.log("TEST");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert('Your browser doesn\'t support this feature!');
        }
    }
    function showPosition(position) {
        weather(position.coords.latitude, position.coords.longitude);
    }
    getLocation();
}
</script>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/footer.php';
