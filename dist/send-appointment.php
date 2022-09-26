<?
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' && !empty($_POST['name'])) {
    
    $message  = "Имя пользователя: " . $_POST['name'] . "\r\n";
    $message .= "Телефон пользователя: " . $_POST['tel'] . "\r\n";
    $message .= "Вид обследования: "."\r\n";
    $message .= $_POST['exam1'] ."\r\n";
    $message .= $_POST['exam2'] ."\r\n";
    $message .= $_POST['exam3'] ."\r\n";
    $message .= $_POST['exam4'] ."\r\n";
    $message .= $_POST['exam5'] ."\r\n";
    $message .= $_POST['exam6'] ."\r\n";
    $message .= "Желаемая дата: " . $_POST['date'];     

    $mailTo = "moksh2008@yandex.ru"; // Ваш e-mail для получения писем. Обязательно проверьте спам, письма часто попадают туда.
    $subject = "Medical Center Запись"; // Тема сообщения
    $headers= "pochta@portfolioirinagromova.ru";//Адрес вашего почтового ящика на хостинге. Нужно для корректной отправки с сайта. Указывать обязательно.
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: info@site.ru <info@site.ru>\r\n";
    if(mail($mailTo, $subject, $message, $headers)) {
        echo "Спасибо, ".$_POST['name'].", мы свяжемся с вами в самое ближайшее время!"; 
    } else {
        echo "Сообщение не отправлено!"; 
    }
}
?>