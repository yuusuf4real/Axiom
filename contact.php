<?php

    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $phoneNo = $_POST ['phoneNo'];
    $message = $_POST ['message'];


    $email_from = 'info.yusufariyibi@gmail.com';

    $email_subject = 'New form submission';

    $email_body = 'User Name : $name.\n'.
                    'User Email: $email.\n'.
                        'User Message: $message.\n';

    $to = 'olatunjidigital@gmail.com';

    $headers = 'From: $email_from \r\n';

    $headers .= 'Reply_To: $email \r\n';
    
    mail ($to, $email_subject, $email_body, $headers);

    header ('Location: contact.html');



?>