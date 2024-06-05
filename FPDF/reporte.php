<?php
	include 'plantilla.php';
    include '../Conexiones/ConexionBdZapateria.php';

    $query = "SELECT Zapato.idZapato, Proveedor.nombreProveedor, Color.nombreColor, Zapato.Descripcion, Zapato.Costo, Clasificacion.nombreClasificacion, Categoria.nombreCategoria
            FROM Zapato, Proveedor, Color, Clasificacion, Categoria
            WHERE Zapato.idProveedor = Proveedor.idProveedor AND Zapato.idColor = Color.idColor AND Zapato.idClasificacion= Clasificacion.idClasificacion AND Zapato.idCategoria= Categoria.idCategoria";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF('L');
    $pdf->SetMargins(10, 20 , 15);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFont('Arial','',10); 

	$contador = 1;
	while($row = $resultado->fetch_assoc())
	{
        $pdf->SetTextColor(0);
        if ($contador %2 == 0){
            $pdf->SetFillColor(210,210,210);
        }else{
            $pdf->SetFillColor(255);
        }
        $pdf->Cell(10,6,$contador,1,0,'L',1);
		$pdf->Cell(20,6,utf8_decode($row['idZapato']),1,0,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['nombreProveedor']),1,0,'L',1);
        $pdf->Cell(40,6,utf8_decode($row['nombreClasificacion']),1,0,'L',1);
        $pdf->Cell(40,6,utf8_decode($row['nombreCategoria']),1,0,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['nombreColor']),1,0,'L',1);
        $pdf->Cell(90,6,utf8_decode($row['Descripcion']),1,0,'L',1);
        $pdf->Cell(20,6,utf8_decode($row['Costo']),1,1,'L',1);
        $contador += 1;
	}
    date_default_timezone_set('America/Mexico_City');
    $fecha=date('_d-m-y_H-i-s-a');
	$pdf->Output('D',"Zapateria$fecha.pdf");
?>