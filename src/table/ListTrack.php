<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListTrack extends Table
{
	protected $name = 'track';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		'~ListCustomerId',
		 [
			'~ListPhone',
			'name'=>'date',
			'text'=>'日期'
		 ],
		 [
			'@ListDesc',
			'name'=>'content',
			'text'=>'交流内容',
		 ],
		 [
			'@ListDesc',
			'name'=>'result',
			'text'=>'成效',
		 ],
		'@ListCreateTime',
		'@ListEditDelete',
	];
}


