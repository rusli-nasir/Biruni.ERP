<?php
$this->breadcrumbs=array(
	'Order Categories',
);

$this->menu=array(
	array('label'=>'Create Order Category', 'url'=>array('create')),
	array('label'=>'Manage Order Category', 'url'=>array('admin')),
);
?>

<h1>Order Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
