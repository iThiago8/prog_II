<?php

abstract class Message {
    protected string $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    abstract public function format(): string;
}

class UppercaseMessage extends Message {
    public function format(): string {
        return strtoupper($this->text);
    }
}

class LowercaseMessage extends Message {
    public function format(): string {
        return strtolower($this->text);
    }
}

class CapitalizedMessage extends Message {
    public function format(): string {
        return ucwords(strtolower($this->text));
    }
}

$originalText = "hello WORLD! testiNg A MessAGe.";

$uppercaseMsg = new UppercaseMessage($originalText);
echo "Original: $originalText";
echo "<br>Uppercase: " . $uppercaseMsg->format();

echo "<br><br>";

$lowercaseMsg = new LowercaseMessage($originalText);
echo "Lowercase: " . $lowercaseMsg->format();

echo "<br><br>";

$capitalizedMsg = new CapitalizedMessage($originalText);
echo "Capitalized: " . $capitalizedMsg->format();

