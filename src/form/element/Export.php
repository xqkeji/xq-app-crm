<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Button;
class Export extends Button
{

	protected $name='export';
	protected $text='导出';
	protected $attrs=[
		'class'=>'btn btn-success me-1 xq-export',
		'value'=>'导出',
	];
}
