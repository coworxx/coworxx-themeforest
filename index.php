<?php require_once("vendor/autoload.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 101 Template for Coworxx UG (haftungsbeschränkt)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .meineKlasse1 {
            background-color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <button id="b1">Hide Content</button>
            <button id="b2">Show Content</button>
            <button id="b3">Add Red</button>
            <button id="b4">Remove Red</button>
            <button id="b5">Toogle</button>
            <button id="b6">2x Toogle</button>
            <button id="b7">Wrap it</button>
            <button id="b8">Picture</button>
            <button id="b9">Smaller Picture</button>
        </div>
    </div>
    <div class="row content">
       <div class="col-md-6 col-md-offset-3 text-center">
          <p>Content</p>
           <img class="img-responsive" src="http://coworxx.de/wp-content/uploads/2013/10/ruderer-banner_1284x350.jpg" alt="coworxx bild" />
       </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 id="wrapme">Wrap me</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img id="bild" class="img-responsive" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h4>Test</h4>
            <h4>Test 2</h4>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Custom Scripts -->
<script type="text/javascript">
    $(document).ready(
        function(){
            $("#b1").click(
                function(){
                    $(".content").hide("slow");
                }
            );
            $("#b2").click(
                function(){
                    $(".content").show("slow");
                }
            );
            $("#b3").click(
                function(){
                    $(".content").addClass("meineKlasse1");
                }
            );
            $("#b4").click(
                function(){
                    $(".content").removeClass("meineKlasse1");
                }
            );
            $("#b5").click(
                function(){
                    $(".content").slideToggle();
                }
            );
            $("#b6").click(
                function(){
                    $(".content").slideToggle().slideToggle();
                }
            );
            $("#b7").click(
                function(){
                    $("#wrapme").wrap('<div style="background-color: red;"></div>');
                }
            );
            $("#b8").click(
                function(){
                    $("#bild").attr({
                        src: "http://coworxx.de/wp-content/uploads/2013/10/rahmen-welove.jpg"
                    });
                }
            );
            $("#b9").click(
                function(){
                    $("#bild").attr({
                        width: "100"
                    });
                }
            );
            $("h4:last").css({
               background: "red"
            });
        }
    );
</script>
</body>
</html>
