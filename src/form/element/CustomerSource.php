<?php
return [
    'select',
    'name'=>'source_id',
    'text'=>'客户来源',
    'attr_class'=>'form-select',
	'event'=>[
		'beforeRender'=>function($element){
			$model=\xqkeji\mvc\builder\Model::getModel('customer_source');
			$type=$model->where('status',1)->order('ordernum')->select();
			$items=$type->all();
			$rows=[];
			if(!empty($items))
			{
				foreach($items as $item)
				{
					$key=(string)$item->getKey();
					$val=$item->getAttr('name');
					$rows[$key]=$val;
				}
			}
			$element->setItems($rows);

			
		},
	],	
];
