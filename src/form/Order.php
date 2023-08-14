<?php

return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		'CustomerId',
		[
			'import'=>'Name',
			'text'=>'产品名称',
		],
		[
			'number',
			'name'=>'price',
			'text'=>'订单总价',
			'attr_step'=>'0.01',
			'defaultValue'=>'0.00',
		],
		[
			'radio',
			'name'=>'order_status',
			'text'=>'状态',
			'template'=>'check',
			'items'=>[
				1=>'已出','未出'
			],
			'defaultValue'=>2
		],
		[
			'import'=>'Name',
			'name'=>'address',
			'text'=>'送货地址',
		],
		'Phone',
		'Paytype',
		[
			'import'=>'Desc',
			'text'=>'订单备注',
		],
		'Switch',
		'Csrf',
	],
		
];

