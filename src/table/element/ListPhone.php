<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListPhone extends ListItem
{
	protected $name = 'phone';
	protected $text = '联系号码';
	protected $attrs = [
		'style'=>'min-width:120px;',
	];
}
