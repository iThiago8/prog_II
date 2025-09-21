<?php

abstract class Printer {
    protected string $document;

    public function __construct(string $document) {
        $this->document = $document;
    }

    abstract public function print(): void;
}

class PDFPrinter extends Printer {
    public function print(): void {
        echo "Printing PDF document: '$this->document'...";
        echo "<br>PDF was printed successfully.";
    }
}

class TextPrinter extends Printer {
    public function print(): void {
        echo "Printing text document: '$this->document'...";
        echo "<br>Text was printed successfully.";
    }
}

class ImagePrinter extends Printer {
    public function print(): void {
        echo "Printing image document: '$this->document'...";
        echo "<br>Image was printed successfully.";
    }
}

$pdfPrinter = new PDFPrinter("Annual_Report_2024.pdf");
$pdfPrinter->print();

echo "<br><br>";

$textPrinter = new TextPrinter("Notes.txt");
$textPrinter->print();

echo "<br><br>";

$imagePrinter = new ImagePrinter("Vacation_Photo.jpg");
$imagePrinter->print();

