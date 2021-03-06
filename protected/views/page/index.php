<?php
/* @var $this PageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pages',
);

$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Страницы</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'sorterHeader' => 'Cортировать по: ',//название для сортировки
    'summaryText' => '{start} - {end} из {count}',
    'emptyText' => 'Запись не найдена',
    'sortableAttributes' => array('title', 'id', 'text'),//добавляет вверху сортировку по заголовку
));

?>
