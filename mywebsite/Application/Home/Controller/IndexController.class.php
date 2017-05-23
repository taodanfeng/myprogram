<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $data=M('ProductSale')->select();
        var_dump($data);
    }
}