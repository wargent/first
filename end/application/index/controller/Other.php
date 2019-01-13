<?php
namespace app\index\controller;
use think\Db;

class Other extends Common
{
    public function index()
    {
        // 全部帖子(和分类)
        
        Db::name('question');
        $all = Db::name('question')->select();
        return json()->data($all);
    }
}
