<?php
namespace app\index\controller;

class Index extends Common
{
    public function index()
    {
        $data = [
            'code'  =>  500,
            'msg'   =>  '服务器异常',
            'data'  =>  []
        ];
        return json()->data($data);
    }
}