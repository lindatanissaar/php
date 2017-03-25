<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?= PROJECT_NAME ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/components/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        nav.horizontal h3{
            padding-bottom:20px;
        }

        nav.horizontal ul{
            height:50px;
            background-image:-moz-linear-gradient(top, #212F40 , #222140);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#212F40 ), to(#222140), color-stop(1,#222140));
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            -khtml-border-radius: 8px;
            border-radius: 8px;
            border:1px solid #222140;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.25);
            -moz-box-shadow: 5px 5px 5px rgba(0,0,0,0.25);
            -webkit-box-shadow: 5px 5px 5px rgba(0,0,0,0.25);
            margin:0px;
        }

        nav.horizontal ul li{
            list-style:none;
            display:inline;
            float:left;
        }

        nav.horizontal ul li a{
            display:block;
            height:28px;
            margin:2px 6px 2px 6px;
            padding:15px 20px 20px 20px;

            font-size:12px;
            font-weight:bold;
            color: white;
            text-transform:uppercase;
            text-decoration:none;

            border:1px solid transparent;
            background-image:none;

            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            -khtml-border-radius: 10px;
            border-radius: 10px;
        }

        nav.horizontal ul li a:hover{
            background-image:-moz-linear-gradient(top, #0C1218, #111820);
            background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#161616), to(#111820), color-stop(1,#111820));
            -moz-border-radius: 10px;
            -webkit-border-radius: 10px;
            -khtml-border-radius: 10px;
            border-radius: 10px;

            border:1px solid #0C1218;

            box-shadow: inset 4px 4px 4px rgba(0,0,0,0.25);
            -moz-box-shadow: inset 4px 4px 4px rgba(0,0,0,0.25);
            -webkit-box-shadow: inset 4px 4px 4px rgba(0,0,0,0.25);
        }

        img {
            opacity: 0.5;
            filter: alpha(opacity=50); /* For IE8 and earlier */
            width: 100%;
        }

        .image {
            position: relative;
            width: 100%; /* for IE 6 */
        }

        h2 {
            position: absolute;
            top: 200px;
            left: 0;
            width: 100%;
            text-shadow: 2px 3px #212F40;
        }

        h2 span {
            color: white;
            font: bold 18px/36px Helvetica, Sans-Serif;
            letter-spacing: -1px;
            background: #2c8054;
            padding: 10px;
            margin-left: 5px;
            transition: font 2s;
        }

        h2 span.spacer {
            padding:0 5px;
            margin-left: 5px;
        }

        h2 span:hover {
            font: bold 28px/46px Helvetica, Sans-Serif;
        }

        #btn {
            position: absolute;
            top: 400px;
            left: 50px;
            background: #212F40;
            transition: padding 1s;
            color: white;
            border-radius: 5px;
            padding: 15px 35px 15px 35px;
        }

        #btn:hover {
            padding: 15px 50px 15px 50px;
        }

        h2 span:hover {
            font: bold 28px/46px Helvetica, Sans-Serif;

        }
    </style>


    <!-- jQuery -->
    <script src="vendor/components/jquery/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <!-- Main component for a primary marketing message or call to action -->
    <?php if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
    <?php @require "views/$controller/{$controller}_$action.php"; ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
