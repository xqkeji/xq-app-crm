<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListCustomerSource extends ListItem
{
	protected $name = 'source_id';
	protected $text = '客户来源';
	protected $attrs = [
		'style'=>'min-width:100px;',
		'class'=>'xq-order',
	];
	public function format($value)
	{
		if(!empty($value))
		{
			$model=\xqkeji\mvc\builder\Model::getModel('customer_source');
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


