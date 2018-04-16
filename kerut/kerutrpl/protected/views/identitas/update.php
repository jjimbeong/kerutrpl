<?php
/* @var $this SiteController */

$this->pageTitle='update~';
?>

<?php
/* @var $this IdentitasController */
/* @var $model Identitas */

$this->breadcrumbs=array(
	'Database'=>array('index'),
	$model->id_identitas=>array('view','id'=>$model->id_identitas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Identitas', 'url'=>array('index')),
	array('label'=>'Create Identitas', 'url'=>array('create')),
	array('label'=>'View Identitas', 'url'=>array('view', 'id'=>$model->id_identitas)),
	array('label'=>'Manage Identitas', 'url'=>array('admin')),
);
?>

<h1>Update entri identitas dengan Id #<?php echo $model->id_identitas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>