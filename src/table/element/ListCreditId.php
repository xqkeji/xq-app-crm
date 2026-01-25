<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListCreditId extends ListItem
{
	protected $name = 'credit_id';
	protected $text = '信用';
	protected $attrs = [
		'style'=>'min-width:100px;',
	];
	public function format($value)
	{
		if(!empty($value))
		{
			$credit_level=\xqkeji\mvc\builder\Model::getModel('credit_level');
			$type=$credit_level->find($value);
			if($type)
			{
				$name=$type->getAttr('name');
				return $name;
			}		
		}
		return '';
	}
}

