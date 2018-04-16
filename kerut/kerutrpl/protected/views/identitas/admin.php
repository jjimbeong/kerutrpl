<?php
/* @var $this SiteController */

$this->pageTitle='manage entri~';
?>

<?php
/* @var $this IdentitasController */
/* @var $model Identitas */

$this->breadcrumbs=array(
	'Database'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Identitas', 'url'=>array('index')),
	array('label'=>'Create Identitas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#identitas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Identitas</h1>

<p>
Yak silahkan memanage entri entri yang sudah ada jika ada ._.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'identitas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_identitas',
		'nama',
		'jenis_kelamin',
		'no_telp',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
