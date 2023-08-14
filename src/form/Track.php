<?php

return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		'CustomerId',
		[
			'date',
			'name'=>'date',
			'text'=>'交流日期',
		],
		[
			'import'=>'Desc',
			'name'=>'content',
			'text'=>'交流内容',
		],
		[
			'import'=>'Desc',
			'name'=>'result',
			'text'=>'成效',
		],
		'Csrf',
	],
		
];

