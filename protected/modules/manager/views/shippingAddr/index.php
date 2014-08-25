<?php
$this->breadcrumbs=array(
	'Shipping Addrs',
);

$this->menu=array(
array('label'=>'Create ShippingAddr','url'=>array('create')),
array('label'=>'Manage ShippingAddr','url'=>array('admin')),
);
?>

<h1>Shipping Addrs</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
