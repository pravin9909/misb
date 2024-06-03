<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// class MailController extends Controller
// {
//     protected $mailer;

//     public function __construct()
//     {
//         $this->mailer = new PHPMailer(true);
//         $this->mailer->isSMTP();
//         $this->mailer->Host = config('mail.host');
//         $this->mailer->SMTPAuth = true;
//         $this->mailer->Username = config('mail.username');
//         $this->mailer->Password = config('mail.password');
//         $this->mailer->SMTPSecure = config('mail.encryption');
//         $this->mailer->Port = config('mail.port');
//     }

//     public function sendMail($to, $subject, $body)
//     {
//         try {
//             $this->mailer->setFrom(config('mail.from.address'), config('mail.from.name'));
//             $this->mailer->addAddress($to);
//             $this->mailer->Subject = $subject;
//             $this->mailer->Body = $body;
//             $this->mailer->send();
//             return true;
//         } catch (Exception $e) {
//             return false;
//         }
//     }
// }
?>
