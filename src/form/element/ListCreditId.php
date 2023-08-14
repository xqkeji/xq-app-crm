<?php
return [
	'ListItem',
	'name'=>'credit_id',
	'text'=>'信用',
	'attr_style'=>'width:100px;',
	'event'=>[
		'format'=>function($element,$value){
			$credit_level=\xqkeji\mvc\builder\Model::getModel('credit_level');
			$type=$credit_level->find($value);
			$name=$type->getAttr('name');
			return $name;
		},
	],	
];