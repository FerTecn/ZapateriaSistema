<?php
	require '../Librerias/fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../Imagenes/Banner.png', 45, 15, 200 );
			$this->SetFont('Arial','B',15);
			$this->Cell(80);
			$this->Cell(110,50, utf8_decode('ZAPATERIA FERCH'),0,0,'C');
			$this->Ln(10);
            $this->Cell(272,50, utf8_decode('LISTADO DE ZAPATOS'),0,1,'C');
            $this->Ln(-10);

			$this->SetFillColor(0,0,0);
			$this->SetTextColor(255,255,255);
			$this->SetFont('Arial','B',12);
			$this->Cell(10,6,'NO',1,0,'C',1);
			$this->Cell(20,6,'CLAVE',1,0,'C',1);
			$this->Cell(30,6,'MARCA',1,0,'C',1);
			$this->Cell(40,6,utf8_decode('CLASIFICACIÓN'),1,0,'C',1);
			$this->Cell(40,6,utf8_decode('CATEGORÍA'),1,0,'C',1);
			$this->Cell(30,6,'COLOR',1,0,'C',1);
			$this->Cell(90,6,utf8_decode('DESCRIPCIÓN'),1,0,'C',1);
			$this->Cell(20,6,'PRECIO',1,1,'C',1); 
	
		}
		
		function Footer()
		{
            date_default_timezone_set('America/Mexico_City');
            $fecha=date('d/m/y H:i');
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
            $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
            $this->Cell(-70,10, utf8_decode("Fecha de Impresión: $fecha"),0,0,'C' );
            
		}		
	}
?>