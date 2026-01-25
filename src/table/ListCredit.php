<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListCredit extends Table
{
	protected $name = 'credit';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		'~ListCustomerId',
		'~ListCreditId',
		'~ListLevel',
		[
			'@ListDesc',
			'text'=>'备注',
		],
		'@ListSwitch',
		'@ListCreateTime',
		'@ListEditDelete',
	];
}


