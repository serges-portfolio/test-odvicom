<?php
header("Content-type: text/html; charset=utf-8");

$to = 'vspox23@gmail.com';

$name = $_POST['name'];
$phone = $_POST['phone'];
$site = $_SERVER['HTTP_HOST'];

$date = date("d.m.Y");
$time = date("H:i");

$subject = "Заявка ".$site." ".$date." ".$time;

    $message = '
    <html>
    <head>
    <title>'.$subject.'</title>
    </head>
    <body>
    <p>Имя покупателя: '.$name.'</p>
	<p>Телефон покупателя: '.$phone.'</p>
    </body>
    </html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf8\r\n";

$headers .= "From: ".$site." <info@".$site.">\r\n";
$headers .= "Reply-To: info@".$site."\r\n";

$headers .= "X-Mailer: PHP/" . phpversion();

if(!empty($_POST['name']) && !empty($_POST['phone'])) {

mail($to, $subject, $message, $headers);

}

?>