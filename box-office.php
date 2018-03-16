<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="assets/vendor/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <script src="assets/vendor/axios.min.js"></script>
    <title>Box Office - LocalTube</title>
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
        <h1>Box Office - Localtube</h1>
    </div>
</div>
<div class="container">
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>SL No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
<script src="assets/js/box-office.js"></script>
</body>
</html>