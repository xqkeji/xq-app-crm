<?php
return [
	'ListItem',
	'name'=>'level',
	'text'=>'级别',
	'attr_style'=>'width:80px;',
	'event'=>[
		'format'=>function($element,$value){
			$items=[
				1=>'一级','二级','三级','四级','五级','六级','七级','八级','九级',
			];
			return $items[$value];
		},
	],	
];