<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class CustomerSource extends Table
{
	protected $name = 'customer_source';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		[
			'@Name',
			'text'=>'来源名称',
			'attr_style'=>'min-width:150px;',
		],
		'@Desc',
		'@Ordernum',
		'@SwitchCheck',
		'@CreateTime',
		'@EditDelete',
	];
}

