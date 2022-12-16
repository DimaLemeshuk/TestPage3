<?php
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $fio = urldecode($fio);
    $email = urldecode($email);
    $fio = trim($fio);
    $email = trim($email);
    echo $fio;
    echo "<br>";
    echo $email;
    echo "<br>";
    //if (mail("lemesukdima8@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: info@dimalemeshuk.github.io/TestPage3/ \r\n"))
    if (mail("lemesukdima8@gmail.com", "TEMA", "rrbbfeebfbfbf" ,"From: lemesukdima8@gmail.com \r\n"))
    //From: info@localhost:8888/site2/ \r\n
    //From: info@localhost:8888/site2/send.php
    {     
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
?>
