<?php
/* @var $this InfluencersController */
/* @var $model Influencers */

$this->breadcrumbs=array(
	'Influencers'=>array('index'),
	$model->idi=>array('view','id'=>$model->idi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Influencers', 'url'=>array('index')),
	array('label'=>'Create Influencers', 'url'=>array('create')),
	array('label'=>'View Influencers', 'url'=>array('view', 'id'=>$model->idi)),
	array('label'=>'Manage Influencers', 'url'=>array('admin')),
);
?>

<h1>Update Influencers <?php echo $model->email; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>