<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListOrder extends Table
{
	protected $name = 'order';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		'~ListCustomerId',
		[
			'@ListName',
			'name'=>'name',
			'text'=>'产品名称',
			'attr_style'=>'min-width:150px;',
		],
		[
			'@ListPrice',
			'text'=>'订单总价',
		],
		'~ListOrderStatus',
		[
			'@ListDesc',
			'name'=>'address',
			'text'=>'送货地址',
		],
		'@ListCreateTime',
		'@ListEditDelete',
	];
}


