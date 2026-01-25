<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListCustomerSource extends Table
{
	protected $name = 'customer_source';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		[
			'@ListName',
			'text'=>'来源名称',
			'attr_style'=>'min-width:150px;',
		],
		'@ListDesc',
		'@ListOrdernum',
		'@ListSwitch',
		'@ListCreateTime',
		'@ListEditDelete',
	];
}

