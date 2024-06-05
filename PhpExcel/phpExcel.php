<?php
    include '../Conexiones/ConexionBdZapateria.php';
    require '../Librerias/PHPExcel-1.8/Classes/PHPExcel.php';

    $consulta = "SELECT Zapato.idZapato, Proveedor.nombreProveedor, Clasificacion.nombreClasificacion, Categoria.nombreCategoria, Color.nombreColor, Zapato.Descripcion, Zapato.Costo
                FROM Zapato, Proveedor, Clasificacion, Categoria, Color
                WHERE Zapato.idProveedor = Proveedor.idProveedor
                    AND Zapato.idClasificacion = Clasificacion.idClasificacion
                    AND Zapato.idCategoria = Categoria.idCategoria
                    AND Zapato.idColor = Color.idColor";
      
    $resultado = $conexion->query($consulta);

    if($resultado->num_rows > 0 ){ 
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("Fernanda Garcia") // Nombre del autor
                    ->setLastModifiedBy("Fernanda Garcia") //Ultimo usuario que lo modificó
                    ->setTitle("Reporte Excel") // Titulo
                    //->setSubject("Reporte Excel con PHP y MySQL") //Asunto
                    ->setDescription("Listado de zapatos") //Descripción
                    ->setKeywords("listado zapatos") //Etiquetas
                    ->setCategory("Reporte excel"); //Categorias

        //$tituloReporte = "Relación de alumnos por carrera"; TITULO
        $titulosColumnas = array('NUM','CLAVE','PROVEEDOR','CLASIFICACIÓN',
                                'CATEGORÍA','COLOR','DESCRIPCIÓN','COSTO');
        $letrasColumnas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        
        // Se combinan las celdas A1 hasta D1, para colocar ahí el titulo del reporte
        /* $objPHPExcel->setActiveSheetIndex(0)
        ->mergeCells('A1:D1'); */

        
        //->setCellValue('A1',$tituloReporte)  Titulo del reporte
        //->setCellValue('A1',  $titulosColumnas[0])  //Titulo de las columnas

        // Se agregan los titulos del reporte
        for($k=0;$k<=7;$k++){
             $objPHPExcel->setActiveSheetIndex(0) 
             ->setCellValue($letrasColumnas[$k].'1',  $titulosColumnas[$k]);
        } 

      
        $i = 2; //Numero de fila donde se va a comenzar a rellenar
        $contador = 1;
        //Relleno de la tabla
         while ($fila = $resultado->fetch_array()) {
            $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, (string)$contador)
            ->setCellValue('B'.$i, (string)$fila['idZapato'])
            ->setCellValue('C'.$i, $fila['nombreProveedor'])
            ->setCellValue('D'.$i, $fila['nombreClasificacion'])
            ->setCellValue('E'.$i, $fila['nombreCategoria'])
            ->setCellValue('F'.$i, $fila['nombreColor'])
            ->setCellValue('G'.$i, $fila['Descripcion'])
            ->setCellValue('H'.$i, (string)$fila['Costo']);
            $contador++;
            $i++;
         }


        $estiloTituloColumnas = array(
            'font' => array(
                'name'  => 'Arial',
                'bold'  => true,
                'color' => array('rgb' => 'FFFFFF')
            ),
            'fill' => array(
                'type'  => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'b84654')
            ),
            'borders' => array('top' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                        'color' => array('rgb' => '143860')),
            'bottom' => array(
                    'style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                    'color' => array('rgb' => '143860'))
            ),
            'alignment' =>  array(
                'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                'wrap'      => TRUE
            )
        );
          
        $estiloInformacion = new PHPExcel_Style();
        $estiloInformacion->applyFromArray( array(
            'font' => array('name'  => 'Arial',
                            'color' => array('rgb' => '000000')
            ),
            'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color'=> array( 'rgb' => 'F3F3F3')
          ),
            'alignment' =>  array(
                'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            ),
            'borders' => array(
                'left' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array( 'rgb' => '3a2a47')),
                'right' => array('style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array( 'rgb' => '3a2a47')),
                'bottom'=> array('style' => PHPExcel_Style_Border::BORDER_MEDIUM ,
                'color' => array( 'rgb' => '3a2a47'))
            )
        ));


        // $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->applyFromArray($estiloTituloReporte);
        $objPHPExcel->getActiveSheet()->getStyle('A1:H1')->applyFromArray($estiloTituloColumnas);
        $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A2:H".($i-1));

        
        foreach(range('C','G') as $i){
            $objPHPExcel->getActiveSheet()->getColumnDimension($i)->setAutoSize(true);
        }

        // Se asigna el nombre a la hoja
        $objPHPExcel->getActiveSheet()->setTitle('Zapatos');
        
        // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
        $objPHPExcel->setActiveSheetIndex(0);
        
        // Inmovilizar paneles
        //$objPHPExcel->getActiveSheet(0)->freezePane('A4');
        $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,2);

        // Se manda el archivo al navegador web, con el nombre que se indica, en formato 2007
        //header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        date_default_timezone_set('America/Mexico_City');
        $fecha=date('_d-m-y_H-i-s-a');

        header("Content-Type: application/xlsx");
        header("Content-Disposition: attachment; filename=CatalogoZapatos$fecha.xlsx");
        //header('Cache-Control: max-age=0');
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;

     }else{
        print_r('No hay resultados para mostrar');
    }
?>