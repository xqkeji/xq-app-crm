<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class CustomerType extends ListItem
{
	protected $name = 'type_id';
	protected $text = '类别';
	protected $attrs = [
		'style'=>'min-width:100px;',
	];
	public function format($value)
	{
		if(!empty($value))
		{
			$model=\xqkeji\mvc\builder\Model::getModel('customer_type');
			$type=$model->find($value);
			if($type)
			{
				$name=$type->getAttr('name');
				return $name;
			}
		}
		return '';
	}
}
