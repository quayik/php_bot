<?php
$update = print_r(json_decode(file_get_contents("php://input"), TRUE), true);
$temp = file_get_contents('https://api.telegram.org/bot1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM/sendMessage?chat_id=548527630&text=' . $update);