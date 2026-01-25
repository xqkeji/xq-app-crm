<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class SearchCustomer extends Form
{
	protected $name='search_customer';
	protected $attrs=[
		'class'=>'d-flex flex-wrap justify-content-end gap-2',
		'method'=>'get',
	];
	protected $el=[
		[
			'@SearchKey',
			'name'=>'xq-s-name|phone,like',
			'attrs'=>[
				'class'=>'form-control me-2',
				'placeholder'=>'请输入姓名或联系号码',
			],
		],
		'@Csrf',
		'@SearchSubmit'
	];
}

