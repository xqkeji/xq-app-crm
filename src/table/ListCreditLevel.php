<?php
namespace xqkeji\app\crm\table;
use xqkeji\form\Table;
class ListCreditLevel extends Table
{
	protected $name = 'credit_level';
	protected $row = [
		'class'=>'text-center',
	];
	protected $foot = '@ListFoot';
	protected $el = [
		'@ListId',
		'@ListName',
		'@ListDesc',
		'@ListOrdernum',
		'@ListSwitch',
		'@ListCreateTime',
		'@ListEditDelete',
	];
}



