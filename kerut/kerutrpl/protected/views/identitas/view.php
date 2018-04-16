<?php
/* @var $this SiteController */

$this->pageTitle='detail~';
?>

<?php
/* @var $this IdentitasController */
/* @var $model Identitas */

$this->breadcrumbs=array(
	'Database'=>array('index'),
	$model->id_identitas,
);

$this->menu=array(
	array('label'=>'List Identitas', 'url'=>array('index')),
	array('label'=>'Create Identitas', 'url'=>array('create')),
	array('label'=>'Update Identitas', 'url'=>array('update', 'id'=>$model->id_identitas)),
	array('label'=>'Delete Identitas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_identitas),'confirm'=>'serius nih mo dihapus? ._.')),
	array('label'=>'Manage Identitas', 'url'=>array('admin')),
);
?>

<h1>Detail entri dengan Id #<?php echo $model->id_identitas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_identitas',
		'nama',
		'jenis_kelamin',
		'no_telp',
	),
)); ?>
