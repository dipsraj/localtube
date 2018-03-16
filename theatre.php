<?php
if(!isset($_POST['videoName']) || empty($_POST['videoName']))
    header('Location: box-office');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/vendor/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>
    <script src="assets/vendor/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/mediaelementplayer.min.css">
    <title>Theatre - LocalTube</title>
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
        <h4><?php echo $_POST['videoName']?></h4>
    </div>
</div>
<div class="container">
    <video controls="controls" style="width: 100%; max-width: 100%;">
        <source type="video/mp4" src="videos/<?php echo $_POST['videoName']?>.mp4" />
        <track src="videos/<?php echo $_POST['videoName']?>.srt" kind="captions" srclang="en" label="English">
    </video>
</div>
<script>
    $('video').mediaelementplayer({
        startVolume:0.3,
        startLanguage:'en'
    });
</script>
</body>
</html>
