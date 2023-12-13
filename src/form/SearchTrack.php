<?php
return [
	'form',
	'attr_class'=>'form-inline d-flex justify-content-end',
	[
		[
			'select_picker',
			'template'=>'search',
			'text'=>'搜索客户：',
			'name'=>'xq-s-customer_id,eq',
			'attr_class'=>'form-control me-2',
			'attr_title'=>'请选择一个客户',
			'attr_data-live-search'=>'true',
			'attr_data-width'=>'150px',
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
		],
		'list_search'
	],
	'foot'=>'',
];
