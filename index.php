<?php
$update = json_decode(file_get_contents("php://input"), TRUE);
$temp = file_get_contents('https://api.telegram.org/bot1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM/sendMessage?chat_id=' . $update['message']['chat']['id'] . '&text=' . $update['message']['text']);