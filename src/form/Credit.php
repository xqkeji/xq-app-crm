<?php

return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		'CustomerId',
		'CreditId',
		[
			'select',
			'name'=>'level',
			'text'=>'级别',
			'attr_class'=>'form-select',
			'items'=>[
				1=>'一级','二级','三级','四级','五级','六级','七级','八级','九级',
			],
		],
		[
			'import'=>'Desc',
			'text'=>'备注',
		],
		'Switch',
		'Csrf',
	],
		
];

