<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class CustomerType extends Form
{
	protected $name='customer_type';
	protected $el=[
		[
			'@Name',
			'text'=>'类别名称',
		],
		'@Desc',
		'@Ordernum',
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];
}



