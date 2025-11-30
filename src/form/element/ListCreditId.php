<?php
return [
	'ListItem',
	'name'=>'credit_id',
	'text'=>'信用',
	'attr_style'=>'min-width:100px;',
	'event'=>[
		'format'=>function($element,$value){
			if(!empty($value))
			{
				$credit_level=\xqkeji\mvc\builder\Model::getModel('credit_level');
				$type=$credit_level->find($value);
				if($type)
				{
					$name=$type->getAttr('name');
					return $name;
				}		
			}
			return '';
		},
	],	
];