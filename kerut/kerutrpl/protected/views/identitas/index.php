<?php
/* @var $this SiteController */

$this->pageTitle='list2 identitas~';
?>

<?php
/* @var $this IdentitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Database',
);

$this->menu=array(
	array('label'=>'Bikin baru', 'url'=>array('create')),
	array('label'=>'Manage identitas', 'url'=>array('admin')),
);
?>

<h1>Entry list identitas yang sudah ada</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
