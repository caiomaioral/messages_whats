<?php

$apiURL   =  'https://eu45.chat-api.com/instance113069/'; 
$token    =  '09loia222u00jbus';

$caio = '11981866702';
$gabi = '11984162831';
$abu  = '4891616347';
$jhon = '11980734441';

$message  =  'http://agiledevelopment.com.br/messages_whats/files/receipt.pdf';
$phone    =  '55' . $caio;

$data = json_encode(
    array(
        'chatId'    =>  $phone.'@c.us',
        'body'      =>  $message,
        'filename'  =>  'Informativo',
        'caption'   =>  'Leia com atenção!',          
    )
);

$url = $apiURL.'sendFile?token='.$token;

$options = stream_context_create(
    array('http' =>
        array(
            'method'   => 'POST',
            'header'   => 'Content-type: application/json',
            'content'  => $data
        )
    )
);

$response = file_get_contents($url, false, $options);

echo $response . '<br />'; 

//
// Enviar a mensagem
//
$message  =  'Olá! Estou te mandando essa mensagem de teste pois estou fazendo uma aplicação para envio de mensagens via Whatsapp.';

$data = json_encode(
    array(
        'chatId' => $phone.'@c.us',
        'body' => $message
    )
);

$url = $apiURL.'sendMessage?token='.$token;

$options = stream_context_create(
    array('http' =>
        array(
            'method'   => 'POST',
            'header'   => 'Content-type: application/json',
            'content'  => $data
        )
    )
);

$response = file_get_contents($url, false, $options);

echo $response; 

exit;

?>