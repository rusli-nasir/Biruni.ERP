<?php
$this->breadcrumbs=array(
	'Master'=>array('/master'),
	'Branches',
);

$this->menu=array(
	array('label'=>'Manage Branches', 'url'=>array('/master/branch')),
	array('label'=>'Manage Departments', 'url'=>array('/master/department')),
	array('label'=>'Manage Projects', 'url'=>array('/master/project')),
	array('label'=>'Manage Customers', 'url'=>array('/master/company/customer')),
	array('label'=>'Manage Suppliers', 'url'=>array('/master/company/supplier')),
	array('label'=>'Manage Accounts', 'url'=>array('/master/account')),
);
?>

<h1>Branches</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>