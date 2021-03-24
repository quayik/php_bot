<?php
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update['message']['chat']['id'];
$iMessageText = $update['message']['text'];
$url = get_url($chatId, "test")
$temp = file_get_contents();

function get_url($chatId, $text){
    $endpoint = 'https://api.telegram.org/bot';
    $botToken = '1705693811:AAFRF0B5Z2BNaRC9kIDY1p_gMOI_ZNPz8OM';
    $url = $endpoint . '/sendMessage?chat_id=' . $chatId . '&text=' . $text;
    return $url;
}