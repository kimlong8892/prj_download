<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Responsive Admin Dashboard Template">
<meta name="keywords" content="admin,dashboard">
<meta name="author" content="stacks">
<!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title -->
<title>Space - Responsive Admin Dashboard Template</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link href="{{ asset('theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('theme/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('theme/assets/plugins/icomoon/style.css') }}" rel="stylesheet">
<link href="{{ asset('theme/assets/plugins/uniform/css/default.css') }}" rel="stylesheet"/>
<link href="{{ asset('theme/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('theme/assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet">

<!-- Theme Styles -->
<link href="{{ asset('theme/assets/css/space.min.css') }}" rel="stylesheet">
<link href="{{ asset('theme/assets/css/custom.css') }}" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
    body{
        font-family: Arial, Sans;
        margin: 0;
    }

    .wrapper{
        text-align:center;
        transform: translateX(-50%);
        background: #2a2a2a55;
    }

    .spanner{
        position:absolute;
        top: 50%;
        left: 0;
        background: #2a2a2a55;
        width: 100%;
        display:block;
        text-align:center;
        height: 300px;
        color: #FFF;
        transform: translateY(-50%);
        z-index: 1000;
        visibility: hidden;
    }

    .overlay{
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        visibility: hidden;
        background: #2a2a2a55;
    }

    .loader,
    .loader:before,
    .loader:after {
        border-radius: 50%;
        width: 2.5em;
        height: 2.5em;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation: load7 1.8s infinite ease-in-out;
        animation: load7 1.8s infinite ease-in-out;
    }
    .loader {
        color: #ffffff;
        font-size: 10px;
        margin: 80px auto;
        position: relative;
        text-indent: -9999em;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }
    .loader:before,
    .loader:after {
        content: '';
        position: absolute;
        top: 0;
    }
    .loader:before {
        left: -3.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }
    .loader:after {
        left: 3.5em;
    }
    @-webkit-keyframes load7 {
        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em;
        }
        40% {
            box-shadow: 0 2.5em 0 0;
        }
    }
    @keyframes load7 {
        0%,
        80%,
        100% {
            box-shadow: 0 2.5em 0 -1.3em;
        }
        40% {
            box-shadow: 0 2.5em 0 0;
        }
    }

    .show{
        visibility: visible;
    }

    .spanner, .overlay{
        opacity: 0;
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        transition: all 0.3s;
    }

    .spanner.show, .overlay.show {
        opacity: 1
    }
</style>
