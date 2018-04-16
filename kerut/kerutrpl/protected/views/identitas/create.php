<?php
/* @var $this SiteController */

$this->pageTitle='bikin baru~';
?>

<?php
/* @var $this IdentitasController */
/* @var $model Identitas */

$this->breadcrumbs=array(
	'Database'=>array('index'),
	'Bikin baru',
);

$this->menu=array(
	array('label'=>'List Identitas', 'url'=>array('index')),
	array('label'=>'Manage Identitas', 'url'=>array('admin')),
);
?>

<h1>Bikin entri identitas baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>