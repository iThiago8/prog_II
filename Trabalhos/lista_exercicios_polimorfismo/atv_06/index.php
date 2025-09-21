<?php

class Report {
    public function __call($methodName, $arguments) {
        if ($methodName === 'generate') {
            $argCount = count($arguments);

            switch ($argCount) {
                case 1:
                    return $this->generateBasic($arguments[0]);
                case 2:
                    return $this->generateWithDate($arguments[0], $arguments[1]);
                case 3:
                    return $this->generateDetailed($arguments[0], $arguments[1], $arguments[2]);
                default:
                    echo "Invalid number of parameters for generate method";
            }
        } else {
            echo "Method $methodName does not exist";
        }
    }

    private function generateBasic(string $title): string {
        return "Basic Report: $title";
    }

    private function generateWithDate(string $title, string $date): string {
        return "Report: $title - Generated on: $date";
    }

    private function generateDetailed(string $title, string $date, string $author): string {
        return "Detailed Report: $title - Generated on: $date - By: $author";
    }
}

$report = new Report();

echo $report->generate("Sales Report");
echo "<br><br>";

echo $report->generate("Monthly Report", "2024-12-01");
echo "<br><br>";

echo $report->generate("Annual Report", "2024-12-31", "John Doe");
echo "<br><br>";

$report->invalidMethod();
