<!DOCTYPE html>
<html lang="en">

<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>eshata test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        html,
        body {
            height: 100%;
        }

        .full-page {
            height: 100vh;
            width: 100vw;
        }

        nav {
            background: #fff3e263;
        }

        .intro {
            width: 100%;
            background-position: center top;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 350px;
            height: 46vh;
            display: -webkit-flex;
            display: -moz-box;
            display: flex;
            -webkit-align-items: center;
            -moz-box-align: center;
            align-items: center;
            -webkit-transition: all .4s cubic-bezier(.25, .1, .25, 1) 0s;
            -moz-transition: all .4s cubic-bezier(.25, .1, .25, 1) 0s;
            -o-transition: all .4s cubic-bezier(.25, .1, .25, 1) 0s;
            transition: all .4s cubic-bezier(.25, .1, .25, 1) 0s;
            background-image: url(https://upgrade.tj/storage/app/logo/thumb-2000x1000-header-61e4986ff3c4f.jpeg);
            background-size: cover;
        }

        .tableContent {
            margin-top: 1rem;
        }

        .row+.row {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container">
            <div class="d-flex justify-content-between col-12">
                <div class="d-flex">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Bootstrap
                    </a>
                </div>
                <div>
                    <a href="{{ url('create') }}" class="btn btn-warning">Добавить заказ</a>
                </div>
            </div>
        </div>
    </nav>