<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListSex extends ListItem
{
	protected $name = 'sex';
	protected $text = '性别';
	protected $attrs = [
		'style'=>'min-width:60px;',
	];
	public function format($value)
	{
		if($value==1)
		{
			return '男';
		}
		else
		{
			return '女';
		}
	}
}
