<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Radio;
class Sex extends Radio
{

	protected $name='sex';
	protected $template='@check';
	protected $text='性别';
	protected $items=[
		1=>'男','女'
	];
	protected $defaultValue=1;
}