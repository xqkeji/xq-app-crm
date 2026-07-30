<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class CreditLevel extends Table
{
	protected $name = 'credit_level';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		'@Name',
		'@Desc',
		'@Ordernum',
		'@Switch',
		'@CreateTime',
		'@EditDelete',
	];
}



