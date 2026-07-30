<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class CustomerType extends Table
{
	protected $name = 'customer_type';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		[
			'@Name',
			'text'=>'类别名称',
			'attr_style'=>'min-width:120px;',
		],
		'@Desc',
		'@Ordernum',
		'@SwitchCheck',
		'@CreateTime',
		'@EditDelete',
	];
}


