<?php


 class Report {
    
    private $title;
    private $body;

    public function __construct($title, $body) {
        $this->title = $title;
        $this->body = $body;
    }
    
    public function generateReport() {
        // Genera el reporte en un formato específico
        echo("Generating report...");
    }

    public function printReport() {
        // Imprime el reporte
        echo("Printing report: " . $this->title);
    }
}




$oReport= new Report("Titulo del informe", "cuerpor del inform");
$oReport->generateReport();
$oReport->printReport();


?>