<?php
	include('views/fpdf/fpdf.php');
    date_default_timezone_set('America/Bogota');
	
    $vehiculo = new VehiculoControlador();
    $infveh = $vehiculo->tablaVehiculosControlador(); 

	class PDF extends FPDF
	{


		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','B', 10);
			
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}

		function tabla($header,$data)
		{
		    $this->SetFillColor(51,178,255);
		    $this->SetTextColor(255); 
		    $this->SetDrawColor(128,0,0); 
		    $this->SetLineWidth(.3);
		   	$this->SetFont('Arial','B', 8);
		   	$w=array(20,30,70,70);
		    for($i=0;$i<count($header);$i++)
		        $this->Cell($w[$i],7,$header[$i],1,0,'C',1); 
			    $this->Ln();
			    $this->SetFillColor(224,235,255);
			    $this->SetTextColor(0);
			    $this->SetFont('');
			    $fill=false;
		    foreach($data as $row){
		  		$columna = explode(";",$row); 
		        $this->Cell($w[0],6,$columna[0],'LR',0,'L',$fill); 
		        $this->Cell($w[1],6,$columna[1],'LR',0,'L',$fill);
		        $this->Cell($w[2],6,$columna[2],'LR',0,'C',$fill);
		        $this->Cell($w[3],6,$columna[3],'LR',0,'C',$fill);
		       
		        $this->Ln();
		        $fill=!$fill;
		    }
		    $this->Cell(array_sum($w),0,'','T');
		}
	}



$pdf = new PDF();
$pdf->AliasNbPages(); 

$head = array("Placa","Marca","Conductor","Propietario"); 

foreach($infveh as $fila){
 	$dat[$i]=$fila[1].";".$fila[2].";".$fila[3].";".$fila[4]; 
	$i++;
}

$pdf->AddPage(); 
$pdf->SetFont('Arial','',18);
$pdf->Cell(190,30,"Informe de Vehiculos",0,0,'C');
$pdf->Ln(35);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,1,"Fecha Generacion Reporte: ".date("j-m-yy"),0,0,'L');
$pdf->Ln(7);
$pdf->tabla($head,$dat);
$pdf->Output(); 
?>
