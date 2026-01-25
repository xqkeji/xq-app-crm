<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListCustomer extends Table
{
	protected $name = 'customer';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFootExport';
	protected $el=[
		'@ListId',
		[
			'@ListName',
			'text'=>'姓名',
			'attr_style'=>'min-width:120px;',
		],
		'~ListCustomerType',
		'~ListPhone',
		'~ListEmail',
		'~ListCompanyName',
		'~ListCustomerSource',
		'~ListCountry',
		'@ListSwitch',
		'@ListCreateDate',
		'@ListEditDelete',
	];
}




return [
	'list_form',
	'row'=>[
		'class'=>'text-center',
	],
	[
		'ListId',
		[
			'name'=>'name',
			'text'=>'姓名',
			'attr_style'=>'min-width:120px;',
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
