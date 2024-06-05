<?php
	require '../Librerias/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../Imagenes/Banner.png', 5, 15, 200 );
			$this->SetFont('Arial','B',15);
			$this->Cell(-70);
			$this->Cell(0,50, utf8_decode('ZAPATERIA FERCH'),0,0,'C');
			$this->Ln(10);
            $this->Cell(50,50, utf8_decode('MARCAS'),0,1,'C');
            $this->Ln(-10);

			$this->SetFillColor(0,0,0);
			$this->SetTextColor(0,0,0,0);
			$this->SetFont('Arial','B',12);
			$this->Cell(30,6,'ID MARCA:',0,1,'L',0);
			$this->Cell(30,6,'MARCA:',0,1,'L',0);
	        $this->SetLeftMargin(70);
            $this->Ln(-12);

		}
		
		function Footer()
		{
            date_default_timezone_set('America/Mexico_City');
            $fecha=date('d/m/y H:i');
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
            $this->Cell(40,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
            $this->Cell(100,10, utf8_decode("Fecha de Impresión: $fecha"),0,0,'C' );
            
		}		
	}
?>