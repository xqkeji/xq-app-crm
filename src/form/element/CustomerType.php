<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Select;
class CustomerType extends Select
{

	protected $name='type_id';
	protected $text='类别';
	protected $attrs=[
		'class'=>'form-select',
	];
    protected $template='@row';
	public function beforeRender()
	{
		$model=\xqkeji\mvc\builder\Model::getModel('customer_type');
		$type=$model->where('status',1)->order('ordernum')->select();
		$items=$type->all();
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
