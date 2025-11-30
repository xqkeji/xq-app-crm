<?php
return [
	'ListItem',
	'name'=>'order_status',
	'text'=>'订单状态',
	'attr_style'=>'min-width:120px;',
	'event'=>[
		'format'=>function($element,$value){
			$items=[
				1=>'已出','未出'
			];
			return $items[$value];
		},
	],	
];