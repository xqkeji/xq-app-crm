<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class SearchOrder extends Form
{
	protected $name='search_order';
	protected $attrs=[
		'class'=>'d-flex flex-wrap justify-content-end gap-2',
		'method'=>'get',
	];
	protected $el=[
		'~SearchCustomer',
		'@SearchSubmit'
	];
}


