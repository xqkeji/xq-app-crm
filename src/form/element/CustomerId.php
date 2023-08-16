<?php
return [
    'select',
    'name'=>'customer_id',
    'text'=>'客户',
    'attr_class'=>'form-select',
	'event'=>[
		'beforeRender'=>function($element){
			$model=\xqkeji\mvc\builder\Model::getModel('customer');
			$customer=$model->where('status',1)->order('ordernum')->select();
			$items=$customer->all();
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
