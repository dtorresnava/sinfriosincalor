
<div class="mostrarCliente">
	<div class="infoProducto">
		<?php if(Yii::app()->user->name == "admin"){?>
			<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id));?>
		<br />
		<?php }?>
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
		<?php echo CHtml::encode($data->modelo); ?>
		<br />
	
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('fabricante_id')); ?>:</b>
		<?php 
		$fabricante = Fabricante::model()->findByPk($data->fabricante_id);
		echo CHtml::encode($fabricante->nombre); 
		?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
		<?php echo CHtml::encode($data->codigo); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
		<?php echo CHtml::encode($data->tipo); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
		<?php echo CHtml::encode($data->precio."€"); ?>
		<br />
		<div class="imagenProducto">
			<img id="estiloimagen" src="<?php echo Yii:: app() ->baseUrl.'/images/'.$data->modelo.'.jpg' ?>">
		</div>
	</div>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alta_especificaciones')); ?>:</b>
	<?php echo CHtml::encode($data->alta_especificaciones); ?>
	<br />

	*/ ?>	
	<?php 
	if($data->alta_especificaciones==0 && Yii::app()->user->name == "admin"){ ?>	
	<h5 class="enlaceEspe">
	<?php
		echo CHtml::link('Añadir especificaciones',array('especificaciones/create&idp='.$data->id.'&modelop='.$data->modelo));?>	
	</h5>
	<?php
	}else if ($data->alta_especificaciones==1){?>
		
		
		<h5 class="enlaceEspe"><?php echo CHtml::link('Ver especificaciones',array('especificaciones/view&id='.$data->id));?></h5>

		<?php
// 		$desplegar="desplegar";
// 		$desplegar.=$data->id;
		
// 		$info="infoEspecificaciones";
// 		$info.=$data->id;
	
		
// 	    Yii::app ()->getClientScript ()->registerScript ( 'alerta', 
// 	        'jQuery(document).ready(function(){
// 				$(".'.$info.'").hide();
// 	    		$(".'.$info.'").css({"cursor":"pointer", "width":"300px"});
// 	    		$(".'.$desplegar.'").css({"cursor":"pointer"});
// 			 });
// 	    	 jQuery(document).on("click",".'.$desplegar.'",function() {
// 	            $(".'.$info.'").animate({height: "toggle"});
// 	        });',
//         CClientScript::POS_END 
// 	    );
	 ?>
	
	<!--  <p class= id="enlaceespe" >Mostrar especificaciones</p> -->
	<!--  <div class=> -->
		<?php
// 			$especificaciones=Especificaciones::model()->findByAttributes(array(
// 						'producto_id' => $data->id
// 				));
// 			if(isset($especificaciones)){
// 				$this->widget ( 'booster.widgets.TbDetailView', array (
// 						'data' => $especificaciones,
// 						'attributes' => array (
// 								'potencia_frio',
// 								'potencia_calor',
// 								'eficiencia_frio',
// 								'eficiencia_calor',
// 								'consumo_frio',
// 								'consumo_calor',
// 								'dimencion_alto_ue',
// 								'dimencion_ancho_ue',
// 								'dimencion_largo_ue',
// 								'peso_ue',
// 								'conexion_pequenya',
// 								'conexion_grande',
// 								'tipo_caudal',
// 								'posicion_tubos_conextion',
// 								'peso_ui',
// 								'dimencion_alto_ui',
// 								'dimencion_ancho_ui',
// 								'dimencion_largo_ui',
// 								'cantidad_unidades',
// 						) 
// 				) );
// 			}
		?>
	<!-- </div> -->
		
		
		
	<?php	
	}else{
		echo "<h5 class='enlaceEspe'>sin especificaciones</h5>";
	}//echo CHtml::link(utf8_encode('Ver especificaciones'),array('especificaciones/view&id='.$data->id));
	?>
	
	
</div>
<br>