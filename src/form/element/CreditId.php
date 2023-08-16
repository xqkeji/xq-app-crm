<?php
return [
    'select',
    'name'=>'credit_id',
    'text'=>'信用',
    'attr_class'=>'form-select',
	'event'=>[
		'beforeRender'=>function($element){
			$model=\xqkeji\mvc\builder\Model::getModel('credit_level');
			$credit_level=$model->where('status',1)->order('ordernum')->select();
			$items=$credit_level->all();
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
