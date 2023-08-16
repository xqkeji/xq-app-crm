<?php
return [
	'form',
	'attr_class'=>'form-inline d-flex justify-content-end',
	[
		[
			'text',
			'template'=>'search',
			'text'=>'关键字：',
			'name'=>'name|phone#like',
			'attr_class'=>'form-control me-2',
			'attr_placeholder'=>'请输入姓名或联系号码',
		],
		'csrf',
		'list_search'
	],
	'foot'=>'',
];
