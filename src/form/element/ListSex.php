<?php
return [
	'ListItem',
	'name'=>'sex',
	'text'=>'性别',
	'attr_style'=>'width:60px;',
	'event'=>[
		'format'=>function($element,$value){
			if($value==1)
			{
				return '男';
			}
			else
			{
				return '女';
			}
		},
	],	
];