<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListLevel extends ListItem
{
	protected $name = 'level';
	protected $text = '级别';
	protected $attrs = [
		'style'=>'min-width:60px;',
	];
	public function format($value)
	{
		$items=[
			1=>'一级','二级','三级','四级','五级','六级','七级','八级','九级',
		];
		if(isset($items[$value]))
		{
			return $items[$value];
		}
		else
		{
			return '';
		}
	}
}

