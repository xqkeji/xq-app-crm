<?php
namespace xqkeji\app\crm\form\element;
use xqkeji\form\element\Select;
class CreditId extends Select
{

	protected $name='credit_id';
	protected $text='信用';
	protected $attrs=[
		'class'=>'form-select',
	];	
    protected $template='@row';
	public static function beforeRender()
	{
		$model=\xqkeji\mvc\builder\Model::getModel('credit_level');
		$credit_level=$model->where('status',1)->order('ordernum')->select();
		$items=$credit_level->all();
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

