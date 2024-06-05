<?php
    include '../Conexiones/ConexionBdZapateria.php';
    require '../Librerias/PHPExcel-1.8/Classes/PHPExcel.php';

    $consulta = "SELECT * FROM Proveedor";
    $resultado = $conexion->query($consulta);

    if($resultado->num_rows > 0 ){ 
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("Fernanda Garcia") // Nombre del autor
                    ->setLastModifiedBy("Fernanda Garcia") //Ultimo usuario que lo modificó
                    ->setTitle("Reporte Excel") // Titulo
                    //->setSubject("Reporte Excel con PHP y MySQL") //Asunto
                    ->setDescription("Listado de marcas") //Descripción
                    ->setKeywords("listado marcas") //Etiquetas
                    ->setCategory("Reporte excel"); //Categorias
        $titulosColumnas = array('NO','CLAVE','PROVEEDOR');
        $letrasColumnas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

        // Se agregan los titulos del reporte
        for($k=0;$k<=2;$k++){
             $objPHPExcel->setActiveSheetIndex(0) 
             ->setCellValue($letrasColumnas[$k].'1',  $titulosColumnas[$k]);
        } 

      
        $i = 2; //Numero de fila donde se va a comenzar a rellenar
        $contador = 1;
        //Relleno de la tabla
         while ($fila = $resultado->fetch_array()) {
            $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, (string)$contador)
            ->setCellValue('B'.$i, (string)$fila['idProveedor'])
            ->setCellValue('C'.$i, $fila['nombreProveedor']);
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

        $objPHPExcel->getActiveSheet()->getStyle('A1:C1')->applyFromArray($estiloTituloColumnas);
        $objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A2:C".($i-1));
        
        for($i = 'C'; $i <= 'D'; $i++){
            $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension($i)->setAutoSize(TRUE);
        }
        
      

        // Se asigna el nombre a la hoja
        $objPHPExcel->getActiveSheet()->setTitle('Marcas');
        
        // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
        $objPHPExcel->setActiveSheetIndex(0);
        
        $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0,2);

        date_default_timezone_set('America/Mexico_City');
        $fecha=date('_d-m-y_H-i-s-a');

        header("Content-Type: application/xlsx");
        header("Content-Disposition: attachment; filename=CatalogoZapatos$fecha.xlsx");
        
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save('php://output');
        exit;

     }else{
        print_r('No hay resultados para mostrar');
    }
?>