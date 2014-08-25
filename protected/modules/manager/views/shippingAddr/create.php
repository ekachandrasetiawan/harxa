<?php
$this->breadcrumbs=array(
	'Shipping Addrs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List ShippingAddr','url'=>array('index')),
array('label'=>'Manage ShippingAddr','url'=>array('admin')),
);
?>

<h1>Create ShippingAddr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>