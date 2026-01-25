<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Text;
class Phone extends Text
{

	protected $name='phone';
	protected $text='联系号码';
	protected $attrs=[
		'class'=>'form-control',
	];
    protected $template='@row';
}