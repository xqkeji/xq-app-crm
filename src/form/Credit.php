<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\form;
class Credit extends Form
{
	protected $name='credit';
	protected $el=[
		'~CustomerId',
		'~CreditId',
		[
			'@Education',
			'name'=>'level',
			'text'=>'级别',
			'items'=>[
				1=>'一级','二级','三级','四级','五级','六级','七级','八级','九级',
			],
		],
		[
			'@Desc',
			'text'=>'备注',
		],
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset'
	];
}
