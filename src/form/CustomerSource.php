<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class CustomerSource extends Form
{
	protected $name='customer_source';
	protected $el=[
		[
			'@Name',
			'text'=>'来源名称',
		],
		'@Desc',
		'@Ordernum',
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];
}


