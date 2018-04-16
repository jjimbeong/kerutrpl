<?php
/* @var $this IdentitasController */
/* @var $data Identitas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_identitas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_identitas), array('view', 'id'=>$data->id_identitas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />


</div>