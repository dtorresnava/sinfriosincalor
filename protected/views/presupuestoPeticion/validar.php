<?php 
$presupuesto=new PresupuestoPeticion();
if(isset($_GET['presupuesto_id'])){
	$id=$_GET['presupuesto_id'];
	$presupuesto=PresupuestoPeticion::model()->findByPk($id);
}
?>


<h1 class="centerviewStyle"><?=$smg ?> nº: <?=$presupuesto->id?> con fecha: <?=$presupuesto->fecha_presupuesto?></h1>

