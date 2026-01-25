<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListCompanyName extends ListItem
{
	protected $name = 'company_name';
	protected $text = '公司';
	protected $attrs = [
		'style'=>'min-width:120px;',
		'class'=>'xq-order',
	];
	
}
