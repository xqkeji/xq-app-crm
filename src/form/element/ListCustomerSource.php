<?php
return [
	'ListItem',
	'attr_class'=>'xq-order',
	'name'=>'source_id',
	'text'=>'客户来源',
	'attr_style'=>'width:100px;',
	'event'=>[
		'format'=>function($element,$value){
			if(!empty($value))
			{
				$model=\xqkeji\mvc\builder\Model::getModel('customer_source');
				$type=$model->find($value);
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