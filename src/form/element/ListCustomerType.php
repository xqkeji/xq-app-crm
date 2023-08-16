<?php
return [
	'ListItem',
	'name'=>'type_id',
	'text'=>'类别',
	'attr_style'=>'width:100px;',
	'event'=>[
		'format'=>function($element,$value){
			$model=\xqkeji\mvc\builder\Model::getModel('customer_type');
			$type=$model->find($value);
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