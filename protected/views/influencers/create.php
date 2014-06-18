<?php
/* @var $this InfluencersController */
/* @var $model Influencers */

$this->breadcrumbs=array(
	'Influencers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Influencers', 'url'=>array('index')),
	array('label'=>'Manage Influencers', 'url'=>array('admin')),
);
?>

<h1>Create Influencers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>