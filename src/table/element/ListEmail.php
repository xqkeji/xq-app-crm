<?php

namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListEmail extends ListItem
{
	protected $name = 'email';
	protected $text = '邮箱';
	protected $attrs = [
		'style'=>'min-width:150px;',
	];
	
}
