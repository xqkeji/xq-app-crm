<?php
namespace xqkeji\app\crm\composer;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Command;
use MongoDB\Driver\BulkWrite;
use MongoDB\BSON\ObjectId;
class Install
{
    public static function getRootPath():string
    {
        return dirname(__DIR__,5);
    }
    public static function getRootConfigPath():string
    {
        return dirname(__DIR__,5).DIRECTORY_SEPARATOR.'config';
    }
    public static function postInstall() : void
    {
        $configPath=self::getRootConfigPath();
        $containerFile=$configPath.DIRECTORY_SEPARATOR.'container.php';

        if(is_file($containerFile))
        {
            $config=include($containerFile);
            if(isset($config['db']))
            {
                $db=$config['db'];
                $hostname=$db['hostname'] ?? '';
                $hostport=$db['hostport'] ?? '';
                $database=$db['database'] ?? '';
                $username=$db['username'] ?? '';
                $password=$db['password'] ?? '';
                if(!empty($username))
                {
                    $uri='mongodb://'.$username.':'.$password.'@'.$hostname.':'.$hostport;
                }
                else
                {
                    $uri='mongodb://'.$hostname.':'.$hostport;
                }
                $mustInsert=true;
                $manager = new Manager($uri,['serverSelectionTryOnce'=>false,'serverSelectionTimeoutMS'=>500,'connectTimeoutMS'=>500]);
                $cmd = new Command([
                    'count' => 'crm_customer_type', 
                    'query' => [] 
                ]);
                $result=$manager->executeCommand($database, $cmd)->toArray();
                if (!empty($result)) {
                    $count = intval($result[0]->n);
                    if($count>0)
                    {
                        $mustInsert=false;
                    }
                }
                if($mustInsert)
                {
                    $bulk = new BulkWrite();
                    $type=[
                        'name'=>'普通客户',
                        'desc'=>'普通客户',
                        'status'=>1,
                        'ordernum'=>1,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $type=[
                        'name'=>'银牌客户',
                        'desc'=>'银牌客户',
                        'status'=>1,
                        'ordernum'=>2,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $type=[
                        'name'=>'金牌客户',
                        'desc'=>'金牌客户',
                        'status'=>1,
                        'ordernum'=>3,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $manager->executeBulkWrite($database.'.crm_customer_type', $bulk); 
                    echo "初始化客户类型成功！\r\n";
                }
                $cmd = new Command([
                    'count' => 'crm_credit_level', 
                    'query' => [] 
                ]);
                $result=$manager->executeCommand($database, $cmd)->toArray();
                if (!empty($result)) {
                    $count = intval($result[0]->n);
                    if($count>0)
                    {
                        $mustInsert=false;
                    }
                }
                if($mustInsert)
                {
                    $bulk = new BulkWrite();
                    $type=[
                        'name'=>'一般',
                        'desc'=>'一般',
                        'status'=>1,
                        'ordernum'=>1,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $type=[
                        'name'=>'良好',
                        'desc'=>'良好',
                        'status'=>1,
                        'ordernum'=>2,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $type=[
                        'name'=>'优秀',
                        'desc'=>'优秀',
                        'status'=>1,
                        'ordernum'=>3,
                        'create_time'=>time(),
                        'update_time'=>time(),
                    ];
                    $bulk->insert($type);
                    $manager->executeBulkWrite($database.'.crm_credit_level', $bulk); 
                    echo "初始化信用等级类型成功！\r\n";
                }

            }
            else
            {
                throw new \Exception("the config file:\"$containerFile\" can not found 'db' config!" , 404);
            }
        }
        else
        {
            throw new \Exception("the config file:\"$containerFile\" not exists!" , 404);
        }
    }
    
}