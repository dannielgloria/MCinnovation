<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'josemendez2694@gmail.com';
    $subject = $_POST['subject'];
    $email_body = "Usuario: $name. \n".
                    "Correo electronico: $email. \n".
                        "Mensaje: $message. \n";
