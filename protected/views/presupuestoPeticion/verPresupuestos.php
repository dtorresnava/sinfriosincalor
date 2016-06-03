
<?php

$usermodel = Usuarios::model ()->findByAttributes ( array (
		'usuario' => $name 
) );

$userPeticiones = PeticionCliente::model ()->findAllByAttributes ( array (
		'cliente_id' => $usermodel->id 
) );

foreach ( $userPeticiones as $userPetcion ) {
	
	$userPresupuestos = PresupuestoPeticion::model ()->findAllByAttributes ( array (
			'peticion_cliente_id' => $userPetcion->id 
	) );
	if ($userPresupuestos){
		echo "<h4><b>Presupuestos para la petición nº: " . $userPetcion->id . "</b></h4>";
		foreach ( $userPresupuestos as $userPresupuesto ) {
			echo "<h5><b>Presupuesto nº: ".$userPresupuesto->id." generado en la fecha: ".$userPresupuesto->fecha_presupuesto."</b></h5>";
			$producto=Productos::model()->findByPk($userPresupuesto->producto_id);
			$servicio=Servicios::model()->findByPk($userPresupuesto->servicio_id);
			$fabricante=Fabricante::model()->findByPk($producto->fabricante_id);
			$descuento = Ofertas::model()->findByPk($userPresupuesto->oferta);
			echo "<h6>Modelo máquina aire acondicionado: ".$producto->modelo."</h6>";
			echo "<h6>Fabricado por: ".$fabricante->nombre."</h6>";
			echo "<h6>Precio: ".$producto->precio."</h6>";
			echo "<h6>Servicio contratado: ".$servicio->nombre."</h6>";
			echo "<h6>Descripcion servicio: ".$servicio->descripcion."</h6>";
			echo "<h6>Precio: ".$servicio->precio_hora."</h6>";
			if(isset($descuento)){
				echo "<h6>Descuento aplicado: ".$descuento->nombre."</h6>";
				echo "<h6>Se aplica un descuento de un ".$descuento->descuento_producto."% a los productos y un ".$descuento->descuento_producto."% a los servicios </h6>";
			}
			echo "<h5>Total precio pedido: ".$userPresupuesto->total."€</h5>";
			if($userPresupuesto->validar==1){
				echo "<h2 class='red'>VAIDADO</h2>";
			}else{?>
				<h3><?php echo CHtml::link(utf8_encode('Validar presupuesto'),array('presupuestoPeticion/validar&presupuesto_id='.$userPresupuesto->id.'&name='.$name)); ?></h3>
			<?php }
			echo CHtml::link(utf8_encode('Eliminar presupuesto'),array('presupuestoPeticion/delete&id='.$userPresupuesto->id));
			echo "<br>";
		}
	}
	echo '<hr>';
}