<?php
/**
 * PHP Email Form Configuration
 * Used in BootstrapMade templates for contact forms.
 */

class PHP_Email_Form {
  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $ajax = false;
  public $messages = [];

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

    return mail($this->to, $this->subject, $message_body, $headers);
  }
}
?>
