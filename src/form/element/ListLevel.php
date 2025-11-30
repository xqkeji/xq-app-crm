<?php
return [
	'ListItem',
	'name'=>'level',
	'text'=>'级别',
	'attr_style'=>'min-width:60px;',
	'event'=>[
		'format'=>function($element,$value){
			$items=[
				1=>'一级','二级','三级','四级','五级','六级','七级','八级','九级',
			];
			if(isset($items[$value]))
			{
				return $items[$value];
			}
			else
			{
				return '';
			}
		},
	],	
];