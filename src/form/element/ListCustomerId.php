<?php
return [
	'ListItem',
	'name'=>'customer_id',
	'text'=>'客户',
	'attr_style'=>'width:120px;',
	'event'=>[
		'format'=>function($element,$value){
			$customer=\xqkeji\mvc\builder\Model::getModel('customer');
			$type=$customer->find($value);
			if($type)
			{
				$name=$type->getAttr('name');
				return $name;
			}
			else
			{
				return '';
			}
			
		},
	],	
];