<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class CreditLevel extends Form
{
	protected $name='credit_level';
	protected $el=[
		[
			'@Name',
			'text'=>'等级名称',
		],
		'@Desc',
		'@Ordernum',
		'@SwitchCheck',
		'@Csrf',
		'@SubmitReset',
	];
}

