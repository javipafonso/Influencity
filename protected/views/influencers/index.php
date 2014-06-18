<?php
/* @var $this InfluencersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Influencers',
);

$this->menu=array(
	array('label'=>'Create Influencers', 'url'=>array('create')),
	array('label'=>'Manage Influencers', 'url'=>array('admin')),
);
?>

<h1>Influencers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
