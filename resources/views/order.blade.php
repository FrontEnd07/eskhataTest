<!DOCTYPE html>
<html lang="en">

<head>
    <title>eshata test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    </script>
    <style>
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
    </style>
</head>

<body>
    @include('Header.header')
    <div class="intro">
        <div class="container">
            <div class="row text-center">
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>