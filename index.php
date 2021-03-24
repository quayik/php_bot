<?php
$testUrl = 'https://api.telegram.org/bot1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM/sendMessage?chat_id=548527630&text=1';
$temp1 = file_get_contents($testUrl);
/*$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update['message']['chat']['id'];
$iMessageText = $update['message']['text'];
$temp2 = file_get_contents('https://api.telegram.org/bot1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM/sendMessage?chat_id=548527630&text=2');
$url = get_url($chatId, "test")
$temp4 = file_get_contents('https://api.telegram.org/bot1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM/sendMessage?chat_id=548527630&text=' . $url);
$temp = file_get_contents($url);

function get_url($chatId, $text){
    $endpoint = 'https://api.telegram.org/bot';
    $botToken = '1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM';
    $url = $endpoint . $botToken . '/sendMessage?chat_id=' . $chatId . '&text=' . $text;
    return $url;
}*/