<?php
require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * PHP Email Form Configuration
 * Used in BootstrapMade templates for contact forms.
 */

class PHP_Email_Form {
  
  public $mail;
  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $ajax = false;
  public $messages = [];
  
    public function __construct() {
        // Initialize PHPMailer when class is instantiated
        $this->mail = new PHPMailer(true);
    }

  public function add_message($content, $label = '', $priority = 0) {
    $this->messages[$priority] = "$label: $content\n";
  }

  public function send() {
    $message_body = '';

    ksort($this->messages);
    foreach ($this->messages as $msg) {
      $message_body .= $msg;
    }

    $headers = 'From: ' . $this->from_name . ' <' . $this->from_email . '>' . "\r\n" .
               'Reply-To: ' . $this->from_email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    $message_body .= $headers;
        
    try {
        // Server settings  
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.gmail.com';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'miguelvillamizar365@gmail.com';     // your Gmail
        $this->mail->Password   = 'bibq nqpr hmjn cshs';       // ⚠️ not your normal password, but an "App Password"
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port       = 587;

        // Recipients
        $this->mail->setFrom($this->from_email, 'Web Page Xavi.m');
        $this->mail->addAddress($this->to);

        // Content
        $this->mail->isHTML(true);
        $this->mail->Subject = $this->subject;
        $this->mail->Body    = $message_body;

        $this->mail->send();
        echo 'El mensaje ha sido enviado!';
    } catch (Exception $e) {
        echo "El mensaje no ha posido ser enviado. Error: {$this->mail->ErrorInfo}";
    }
  }
}
?>
