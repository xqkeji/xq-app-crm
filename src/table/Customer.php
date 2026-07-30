<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class Customer extends Table
{
	protected $name = 'customer';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@FootExport';
	protected $el=[
		'@Id',
		[
			'@Name',
			'text'=>'姓名',
			'attr_style'=>'min-width:120px;',
		],
		'~CustomerType',
		'~Phone',
		'~Email',
		'~CompanyName',
		'~CustomerSource',
		'~Country',
		'@SwitchCheck',
		'@CreateDate',
		'@EditDelete',
	];
}


