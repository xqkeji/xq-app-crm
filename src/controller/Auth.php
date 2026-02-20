<?php
namespace xqkeji\app\crm\controller;
use xqkeji\mvc\Controller;

class Auth extends Controller
{
    public function token()
    {
        $token = $this->security->getToken();
        echo $token;
    }
}
