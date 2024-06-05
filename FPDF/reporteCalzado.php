<?php
	include 'plantillaCalzado.php';
    include '../Conexiones/ConexionBdZapateria.php';

    $idSeleccionada = $_GET['id'];

    $query = "SELECT Zapato.idZapato, Proveedor.nombreProveedor, Color.nombreColor, Zapato.Descripcion, Zapato.Costo, Clasificacion.nombreClasificacion, Categoria.nombreCategoria
            FROM Zapato, Proveedor, Color, Clasificacion, Categoria
            WHERE Zapato.idProveedor = Proveedor.idProveedor AND Zapato.idColor = Color.idColor AND Zapato.idClasificacion= Clasificacion.idClasificacion AND Zapato.idCategoria= Categoria.idCategoria AND Zapato.idZapato= '$idSeleccionada'";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
    $pdf->SetMargins(32, 20 , 15);
    $pdf->SetLeftMargin(45);
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
        $pdf->Cell(30,6,$contador,0,1,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['idZapato']),0,1,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['nombreProveedor']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['nombreClasificacion']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['nombreCategoria']),0,1,'L',1);
		$pdf->Cell(30,6,utf8_decode($row['nombreColor']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['Descripcion']),0,1,'L',1);
        $pdf->Cell(30,6,utf8_decode($row['Costo']),0,1,'L',1);
        $contador += 1;
	}
    date_default_timezone_set('America/Mexico_City');
    $fecha=date('_d-m-y_H-i-s-a');
	$pdf->Output('D',"ZapateriaProducto$fecha.pdf");
?>