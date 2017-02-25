<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <style>

    @media (orientation:landscape) {
        .col{
            border:1px solid #00f;
        }
    }

    @media (orientation:portrait) {
        .col{
            border:1px solid #f00;
        }
    }
    </style>
</head>
<body>

    <div class="row">

        <div class="col col-sm-6">
            HeJ
        </div>

        <div class="col col-sm-6">
            HeJ
        </div>

    </div>

    <script>

    function checkOrientation(){
        if (window.matchMedia("(orientation: portrait)").matches) {
            $(".col").addClass("col-sm-12");
            $(".col").removeClass("col-sm-6");
        }

        if (window.matchMedia("(orientation: landscape)").matches) {
            $(".col").addClass("col-sm-6");
            $(".col").removeClass("col-sm-12");
        }
    }

    checkOrientation();

    // Listen for orientation changes
    window.addEventListener("orientationchange", function() {
        checkOrientation();
    }, false);
    </script>

</body>
</html>
