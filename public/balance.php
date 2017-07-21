<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');
$paypal = new Freshtimes\Paypal(getenv("USERNAME"), getenv("PASSWORD"), getenv("SIGNATURE"), getenv("ENVIRONMENT"));
$response = $paypal->call('GetBalance');
?>
<html>
<head>
    <title>Fresh Times Family Reunion Goal</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>
<body>

<div id="thermometer">

    <div class="track">
        <div class="goal">
            <div class="amount"> 10000 </div>
        </div>
        <div class="progress">
            <div class="amount"> <?php echo $response['L_AMT0']; ?> </div>
        </div>
    </div>

</div>

<script src="js/script.js"></script>
</body>
</html>