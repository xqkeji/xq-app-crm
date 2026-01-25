<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Radio;
class Paytype extends Radio
{

	protected $name='paytype';
	protected $text='支付方式';
	protected $items=[
		1=>'现金支付','银行转账','微信支付','支付宝支付'
	];
	protected $defaultValue=1;
	protected $template='@check';
}