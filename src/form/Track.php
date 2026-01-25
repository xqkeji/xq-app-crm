<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class Track extends Form
{
	protected $name='track';
	protected $el=[
		'~CustomerId',
		[
			'@Date',
			'name'=>'date',
			'text'=>'交流日期',
		],
		[
			'@Desc',
			'name'=>'content',
			'text'=>'交流内容',
		],
		[
			'@Desc',
			'name'=>'result',
			'text'=>'成效',
		],
		'@Csrf',
		'@SubmitReset',
	];
}

