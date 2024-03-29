<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Brands', 'url'=>array('index')),
	array('label'=>'Create Brands', 'url'=>array('create')),
	array('label'=>'Update Brands', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Brands', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brands', 'url'=>array('admin')),
);
?>

<h1>View Brands #<?php echo $model->companyname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'phone',
		'photo',
		'companyname',
		'typecompany',
		'website',
		'location',
		'description',
		'industry',
	),
)); ?>
