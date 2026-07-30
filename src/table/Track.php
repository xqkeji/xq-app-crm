<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class Track extends Table
{
	protected $name = 'track';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@Foot';
	protected $el = [
		'@Id',
		'~CustomerId',
		 [
			'~Phone',
			'name'=>'date',
			'text'=>'日期'
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
		'@CreateTime',
		'@EditDelete',
	];
}


