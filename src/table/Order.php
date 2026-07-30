<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class Order extends Table
{
	protected $name = 'order';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		'~CustomerId',
		[
			'@Name',
			'name'=>'name',
			'text'=>'产品名称',
			'attr_style'=>'min-width:150px;',
		],
		[
			'@Price',
			'text'=>'订单总价',
		],
		'~OrderStatus',
		[
			'@Desc',
			'name'=>'address',
			'text'=>'送货地址',
		],
		'@SwitchCheck',
		'@CreateTime',
		'@EditDelete',
	];
}


