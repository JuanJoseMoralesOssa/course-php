<?php

// include_once '../src/Models/Contact.php';

namespace Dia2\Controllers;

use Dia2\Models\Contact;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController
{

    // Atributos
    private string $jsonFile;

    // Magic Methods, tienen un comportamiento especial
    function __construct(string $jsonFile)
    {
        // Constructor
        $this->jsonFile = $jsonFile;
    }

    public function readJsonFlie()
    {
        return json_decode(
            file_get_contents($this->jsonFile),
            true
        );
    }

    public function add(Contact $contact)
    {
        $contacts = $this->readJsonFlie($this->jsonFile);

        $contacts[] = $contact->to_array();

        file_put_contents($this->jsonFile, json_encode($contacts));
        $this->notifyEmail($contact);
    }

    public function notifyEmail(Contact $contact)
    {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Utilizamos las credenciales de mailtrap
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '1ce913cf90f2c3';
            $mail->Password = '2e89ee7a13cf28';                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('juan.1701920252@ucaldas.edu.co', 'Mailer');
            $mail->addAddress($contact->get_email(), $contact->get_name());     //Add a recipient

            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Añadido a la agenda';
            $mail->Body    = "<b>Felicitaciones</b> {$contact->get_name()} ha sido añadido a la agenda";
            $mail->AltBody = '<b>Felicitaciones</b> {$contact->get_name()} ha sido añadido a la agenda';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

// No hay necesidad de cerrarla
