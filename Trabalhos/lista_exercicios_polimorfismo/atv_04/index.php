<?php

abstract class Notification {
    protected string $recipient;

    public function __construct(string $recipient) {
        $this->recipient = $recipient;
    }

    abstract public function send(): void;
}

class Email extends Notification {
    public function send(): void {
        echo "Sending email to $this->recipient...";
        echo "<br>Email sent successfully!";
    }
}

class SMS extends Notification {
    public function send(): void {
        echo "Sending SMS to the number $this->recipient...";
        echo "<br>SMS sent successfully!";
    }
}

class Push extends Notification {
    public function send(): void {
        echo "Sending Push notification to the device $this->recipient...";
        echo "<br>Push notification sent successfully!";
    }
}


$email = new Email("thiago.padilha@unoesc.edu.br");
$email->send();

echo "<br><br>";

$sms = new SMS("53991738426");
$sms->send();

echo "<br><br>";

$push = new Push("Thiago's A52");
$push->send();
