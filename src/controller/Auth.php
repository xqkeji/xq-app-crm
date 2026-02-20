<?php
namespace xqkeji\app\crm\controller;
use xqkeji\mvc\Controller;

class Auth extends Controller
{
    public function getToken()
    {
        $token = $this->security->getToken();
        return $token;
    }
}
