
<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('LETTER');
$pdf->selectFont('fonts/Courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

require_once('../conexion.php');
$sql =  $sql="SELECT extencionAnterior, extencionNueva, usuario, telefonoDirecto From directoriotelefonico order by extencionNueva asc";
$result = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
$ixx = 0;
while($datatmp = mysqli_fetch_assoc($result)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('fila'=>$ixx));
}
$titles = array(
				'extencionAnterior'=>utf8_decode('<b>Extención anterior</b>'),
				'extencionNueva'=>utf8_decode('<b>Extención nueva</b>'),
				'usuario'=>utf8_decode('<b>Usuario</b>'),
				'telefonoDirecto'=>utf8_decode('<b>Teléfono directo</b>')
			);
$options = array(
				'shadeCol'=>array(0,255,255),
				'xOrientation'=>'center',
				'width'=>500
			);
$pdf->ezImage('img/logo_verd.jpg', 7, 500, 'none', 'left');
$pdf->ezText('',20);
$pdf->ezTable($data, $titles, 'Directorio General', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezsetYcm(2);
$pdf->ezText("Comision Federal de Electricidad", 10);
$pdf->ezStream();
?>