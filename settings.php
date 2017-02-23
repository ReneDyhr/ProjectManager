<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/header.php';
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-card mdl-shadow--2dp settings">
        <div class="mdl-card__title">
            <h2>Settings</h2>
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

                <div class="form__article settings__contacts">
                    <h3>Contacts</h3>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col input-group">
                            <i class="material-icons pull-left">call</i>

                            <div class="mdl-textfield mdl-js-textfield pull-left">
                                <input class="mdl-textfield__input" type="text" id="phone">
                                <label class="mdl-textfield__label" for="phone">XXXXXXXX</label>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col input-group">
                            <i class="material-icons pull-left">mail_outline</i>

                            <div class="mdl-textfield mdl-js-textfield pull-left">
                                <input class="mdl-textfield__input" type="text" id="email" value="luke@skywalker.com"/>
                                <label class="mdl-textfield__label" for="email">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col input-group">
                            <i class="material-icons pull-left">place</i>

                            <div class="mdl-textfield mdl-js-textfield pull-left">
                                <input class="mdl-textfield__input" type="text" id="address"/>
                                <label class="mdl-textfield__label" for="address">Address</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form__article settings__general_skills">
                    <h3>General skills</h3>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="3" id="AboutMe"></textarea>
                        <label class="mdl-textfield__label" for="AboutMe">About me</label>
                    </div>
                </div>


                <div class="form__article settings__general_skills">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--9-col">
                            <h3>Weather</h3>
                        </div>
                        <div class="mdl-cell mdl-cell--3-col">
                            <button type="button" onclick="resetMap();" class="mdl-button pull-right" data-upgraded=",MaterialButton">Reset Map</button>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                            <input class="mdl-textfield__input" value="Celsius" type="text" id="degrees" readonly tabIndex="-1"/>

                            <label class="mdl-textfield__label" for="degrees">Degrees</label>

                            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="degrees">
                                <li class="mdl-menu__item">Celsius</li>
                                <li class="mdl-menu__item">Fahrenheit</li>
                            </ul>

                            <label for="gender">
                                <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                            </label>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <button onclick="getLocation();" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored-light-blue" data-upgraded=",MaterialButton,MaterialRipple">Use Current Position</button>
                        </div>

                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <div id="mapCanvas"></div>
                    </div>
                </div>


                <div class="form__action">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="isInfoReliable">
                        <input type="checkbox" id="isInfoReliable" class="mdl-checkbox__input" required/>
                        <span class="mdl-checkbox__label">Entered information is reliable</span>
                    </label>
                    <button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>


<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBW0td9v69m95iy5Q2YiMebpIO7ztCnuPU"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

function resetMap(){
    localStorage.lat = 55.25;
    localStorage.lng = 9.49;
    localStorage.removeItem("location");
    initialize(new google.maps.LatLng(localStorage.lat, localStorage.lng));
}



function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        alert('Your browser doesn\'t support this feature!');
    }
}
function showPosition(position) {
    // localStorage.lat = position.coords.latitude;
    // localStorage.lng = position.coords.longitude;
    localStorage.location = true;
    // initialize(new google.maps.LatLng(localStorage.lat, localStorage.lng));
}


var latLng = new google.maps.LatLng(localStorage.lat, localStorage.lng);
function initialize(latLng) {
    var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        zoom: 8,
        center: latLng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: styles
    });
    var marker = new google.maps.Marker({
        position: latLng,
        title: '',
        map: map,
        draggable: true
    });

    google.maps.event.addListener(marker, 'drag', function() {
        localStorage.lat = marker.getPosition().lat();
        localStorage.lng = marker.getPosition().lng();
    });

    google.maps.event.addListener(marker, 'dragend', function() {
        localStorage.lat = marker.getPosition().lat();
        localStorage.lng = marker.getPosition().lng();
    });

    google.maps.event.addListener(map, 'click', function(event) {
        if (marker == undefined){
            marker = new google.maps.Marker({
                position: event.latLng,
                map: map,
                animation: google.maps.Animation.DROP,
            });
        }else{
            marker.setPosition(event.latLng);
        }
        localStorage.lat = event.latLng.lat();
        localStorage.lng = event.latLng.lng();
    });
}
// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize(latLng));

</script>
<script src="js/settings.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/lib/footer.php';
