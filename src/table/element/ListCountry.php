<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListCountry extends ListItem
{
	protected $name = 'country';
	protected $text = '国家';
	protected $attrs = [
		'style'=>'min-width:60px;',
		'class'=>'xq-order',
	];
	
}
