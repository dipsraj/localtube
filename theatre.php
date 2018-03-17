<?php
if(!isset($_POST['fullVideoName']) || empty($_POST['fullVideoName']))
    header('Location: box-office');
else{
    $fullVideoName = $_POST['fullVideoName'];
    $onlyName = substr($fullVideoName,0,strrpos($fullVideoName,'.'));
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/vendor/jquery.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>
    <script src="assets/vendor/mediaelement-and-player.min.js"></script>
    <script src="assets/vendor/core.js"></script>
    <script src="assets/vendor/sweetalert2.all.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/mediaelementplayer.min.css">
    <title>Theatre - LocalTube</title>
    <style>
        a:focus{
            outline: none !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="home">LocalTube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="box-office">BoxOffice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About</a>
            </li>
        </ul>
    </div>
</nav>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h4><?php echo $onlyName ?></h4>
    </div>
</div>
<div class="container">
    <video controls="controls" style="width: 100%; max-width: 100%;">
        <source type="video/mp4" src="videos/<?php echo $fullVideoName ?>" />
        <track src="videos/<?php echo $onlyName ?>.srt" kind="captions" srclang="en" label="English">
    </video>
</div>

<div class="container" style="margin-top: 20px">
    <div class="card">
        <button type="button" class="btn btn-primary" id="videoProblem">
            Problem playing this video?
        </button>
    </div>
</div>

<script>
    $(function () {
        $('video').mediaelementplayer({
            startVolume:0.3,
            startLanguage:'en',
            defaultSeekBackwardInterval: function(media) {return (media.duration * 0.005);},
            defaultSeekForwardInterval: function(media) {return (media.duration * 0.005);}
        });
    });

    $("#videoProblem").click(function () {
        swal({
            type: 'info',
            html: '<a href="videos/<?php echo $fullVideoName ?>">Download and Watch</a>',
            showConfirmButton:false
        })
    });
</script>
</body>
</html>
