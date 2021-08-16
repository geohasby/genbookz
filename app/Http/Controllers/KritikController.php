<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class KritikController extends Controller
{
    function showContactForm(){
        return view('kritik');
    }

    function sendMail(Request $request){
        
        $subject = "Kritik dan Saran";
        $emailAddress = 'genbookz@gmail.com';
        $message = $request->input('message');

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail = new PHPMailer(); // create a new object
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'genbookz@gmail.com';                 // SMTP username
            $mail->Password = 'genhalilintar';                           // SMTP password
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Port = 465; // or 587

            // Siapa yang mengirim email
            $mail->setFrom("genbookz@gmail.com", "Genbookz");

            // Siapa yang akan menerima email
            $mail->addAddress('genbookz20@gmail.com', 'Genbookz');     // Add a recipient
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            //$mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = $message;

            $mail->send();

            return redirect()->route('kritik')->with('success', 'Terimakasih, pesan berhasil dikirim');

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
}
