<?php
return [
	'form',
	'attr_method'=>'get',
	'attr_class'=>'d-flex flex-wrap justify-content-end gap-2',
	[
		[
			'text',
			'template'=>'search',
			'text'=>'关键字：',
			'name'=>'xq-s-name|phone,like',
			'attr_class'=>'form-control me-2',
			'attr_placeholder'=>'请输入姓名或联系号码',
		],
		'csrf',
		'list_search'
	],
	'foot'=>'',
];
