<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\SelectPicker;
class SearchCustomer extends SelectPicker
{
	protected $name='xq-s-customer_id,eq';
	protected $text='搜索客户：';
	protected $attrs=[
		'class'=>'form-control me-2',
		'title'=>'请选择一个客户',
		'data-live-search'=>'true',
		'data-width'=>'100%;',
	];
    protected $template='@search';
	public function beforeRender()
	{
		$model=\xqkeji\mvc\builder\Model::getModel('customer');
		$customer=$model->where('status',1)->order('ordernum')->select();
		$items=$customer->all();
		$rows=[];
		if(!empty($items))
		{
			foreach($items as $item)
			{
				$key=(string)$item->getKey();
				$val=$item->getAttr('name');
				$rows[$key]=$val;
			}
		}
		$this->setItems($rows);
	}
					
}