<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class Credit extends Table
{
	protected $name = 'credit';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		'~CustomerId',
		'~CreditId',
		'~Level',
		[
			'@Desc',
			'text'=>'备注',
		],
		'@SwitchCheck',
		'@CreateTime',
		'@EditDelete',
	];
}


