<?php
return [
	'list_form',
	'row'=>[
		'class'=>'text-center',
	],
	[
		'ListId',
		[
			'import'=>'ListName',
			'text'=>'姓名',
			'attr_style'=>'width:120px;',
		],
		'ListCustomerType',
		'ListPhone',
		'ListEmail',
		'ListCompanyName',
		'ListCustomerSource',
		'ListCountry',
		'ListSwitch',
		'ListCreateDate',
		'ListEditDelete',
	],
	'foot'=>'ListCustomerFoot',
];
