<?php
namespace xqkeji\app\crm\table\element;
use xqkeji\form\element\ListItem;
class ListOrderStatus extends ListItem
{
	protected $name = 'order_status';
	protected $text = '订单状态';
	protected $attrs = [
		'style'=>'min-width:120px;',
	];
	public function format($value)
	{
		$items=[
			1=>'已出','未出'
		];
		return $items[$value];
	}
}
