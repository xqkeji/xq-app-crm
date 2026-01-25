<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class Order extends Form
{
	protected $name='order';
	protected $el=[
		'~CustomerId',
		[
			'@Name',
			'text'=>'产品名称',
		],
		[
			'@Price',
			'text'=>'订单总价',
		],
		[
			'@Sex',
			'name'=>'order_status',
			'text'=>'状态',
			'items'=>[
				1=>'已出','未出'
			],
			'defaultValue'=>2
		],
		[
			'@Address',
			'text'=>'送货地址',
		],
		'~Phone',
		'~Paytype',
		[
			'@Desc',
			'text'=>'订单备注',
		],
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset'
	];
}



