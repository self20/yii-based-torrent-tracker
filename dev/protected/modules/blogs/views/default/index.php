<?php
/* @var $this DefaultController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php $this->widget('bootstrap.widgets.TbListView',
	array(
	     'id'                 => 'blogsListView',
	     'dataProvider'       => $dataProvider,
	     'itemView'           => '_view',
	     'template'           => "{sorter}\n{items} {pager}",
	     'enableHistory'      => true,
	     'sortableAttributes' => array(
		     'ctime',
		     'rating',
	     ),
	));
?>
