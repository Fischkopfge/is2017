
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
   //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
   class Pdf extends FPDF {
        /**
        * Constructor de la clase
        */
        public function __construct() {
            parent::__construct();
        }

        /***
        * El encabezado del reporte PDF
        */
        public function Header(){
            $this->Image('images/worker.png',10,8,22);
            $this->SetFont('Arial','B',12);
            $this->Cell(30);
            $this->Cell(120,20,'Lista de Trabajadores',0,0,'C');
            $this->Ln('5');
            $this->SetFont('Arial','B',8);
            $this->Cell(30);
            $this->Cell(120,10,'Contacto:',0,0,'C');
            $this->Ln('20');
       }
       // El pie del pdf
       public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
    }
?>
