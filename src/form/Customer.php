<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class Customer extends Form
{
	protected $name='customer';
	protected $el=[
		[
			'@Name',
			'text'=>'姓名',
		],
		'~Sex',
		'~CustomerSource',
		'~CustomerType',
		'~Phone',
		[
			'@Email',
			'name'=>'email',
			'text'=>'邮箱',
		],
		[
			'@Name',
			'name'=>'position',
			'text'=>'职位',
		],
		[
			'@Name',
			'name'=>'company_name',
			'text'=>'公司名称',
		],
		[
			'@Name',
			'name'=>'company_address',
			'text'=>'公司地址',
		],
		[
			'@Name',
			'name'=>'country',
			'text'=>'国家',
		],
		[
			'@Desc',
			'text'=>'备注',
		],
		'@Ordernum',
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];
}



return [
	'form',
	[
		'template'=>'row',
		'attr_class'=>'form-control',
		[
			'import'=>'Name',
			'text'=>'姓名',
		],
		'Sex',
		'CustomerSource',
		'CustomerType',
		[
			'text',
			'name'=>'phone',
			'text'=>'联系号码',
		],
		[
			'email',
			'name'=>'email',
			'text'=>'邮箱',
		],
		[
			'text',
			'name'=>'position',
			'text'=>'职位',
		],
		[
			'text',
			'name'=>'company_name',
			'text'=>'公司名称',
		],
		[
			'text',
			'name'=>'company_address',
			'text'=>'公司地址',
		],
		[
			'text',
			'name'=>'country',
			'text'=>'国家',
		],
		[
			'import'=>'Desc',
			'text'=>'备注',
		],
		'Ordernum',
		'Switch',
		'Csrf',
	],
		
];

