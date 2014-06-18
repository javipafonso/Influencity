
<?php
/* @var $this InfluencersController */
/* @var $model Influencers */


$this->breadcrumbs=array(
	'Influencers'=>array('index'),
	$model->idi,
);

$this->menu=array(
	array('label'=>'List Influencers', 'url'=>array('index')),
	array('label'=>'Create Influencers', 'url'=>array('create')),
	array('label'=>'Update Influencers', 'url'=>array('update', 'id'=>$model->idi)),
	array('label'=>'Delete Influencers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Influencers', 'url'=>array('admin')),
);
?>

<h1>View Influencers #<?php echo $model->firstname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'email',
		'firstname',
		'phone',
		'photoprofile',
		'gender',
		'birthday',
		'birthmonth',
		'birthyear',
		'location',
		'website',
		'biodescription',
		'influencerskills',
		'audiencyskills',
		'brands',
		
	),
)); 

 
?>
