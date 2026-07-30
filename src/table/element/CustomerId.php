<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class CustomerId extends ListItem
{
	protected $name = 'customer_id';
	protected $text = '客户';
	protected $attrs = [
		'style'=>'min-width:120px;',
	];
	public function format($value)
	{
		if(!empty($value))
		{
			$customer=\xqkeji\mvc\builder\Model::getModel('customer');
			$type=$customer->find($value);
			if($type)
			{
				$name=$type->getAttr('name');
				return $name;
			}
		}
		return '';
	}
}
