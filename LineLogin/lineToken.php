<?php
// include("../../dbconnect.php");
define('CLIENT_ID', 'oPg3Er3Fi6z6NbvGrhygxV');
define('LINE_API_URI', 'https://notify-bot.line.me/oauth/authorize?');
define('CALLBACK_URI', 'https://localhost/public_html/screen/employee/line/callback.php');

$queryStrings = [
    'response_type' => 'code',
    'client_id' => CLIENT_ID,
    'redirect_uri' => CALLBACK_URI,
    'scope' => 'notify',
    'state' => 'abcdef123456'
];

$queryString = LINE_API_URI . http_build_query($queryStrings);
header("Location: $queryString");
?>