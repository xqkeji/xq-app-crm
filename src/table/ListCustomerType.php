<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListCustomerType extends Table
{
	protected $name = 'customer_type';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		[
			'@Name',
			'text'=>'类别名称',
			'attr_style'=>'min-width:120px;',
		],
		'@ListDesc',
		'@ListOrdernum',
		'@ListSwitch',
		'@ListCreateTime',
		'@ListEditDelete',
	];
}


