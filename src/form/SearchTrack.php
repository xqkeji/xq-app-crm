<?php
namespace xqkeji\app\crm\form;
use xqkeji\form\Form;
class SearchTrack extends Form
{
	protected $name='search_track';
	protected $attrs=[
		'class'=>'d-flex flex-wrap justify-content-end gap-2',
		'method'=>'get',
	];
	protected $el=[
		'~SearchCustomer',
		'@SearchSubmit'
	];
}


