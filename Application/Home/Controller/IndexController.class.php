<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$article=D('article');
    	$mainres=$article->field('id,title,pic,rizu')->where("cateid=70")->order('id desc')->limit('3')->select();
    	$carres=$article->field('id,title,pic,rizu')->where("cateid=68")->order('id desc')->select();
    	$arres=$article->field('id,title,time')->where("cateid=69")->order('id desc')->limit('3')->select();
    	$this->assign('mainres',$mainres);
    	$this->assign('carres',$carres);
    	$this->assign('arres',$arres);
        $this->display();
    }

    public function index_lst()
    {
        $this->display();
    } 

    public function about()
    {
        $this->display();
    }

    public function index_one()
    {
        $data = M("article")->order("id desc")->limit(6)->select();
         $this->assign('data',$data);
         $data1 = M("article")->order("id desc")->limit(3)->select();
         $this->assign('data1',$data1);
         $data2 = M("article")->where("rem=1")->order("id desc")->limit(8)->select();
        
         $this->assign('data2',$data2);
        $this->display();
    }

    public function index4()
    {
       
       $data = M("article")->order("id desc")->limit(2)->select();
        $this->assign('data',$data);
        $this->display();
    }

    public function index5()
    {
         $cateid = I("cateid");
         $keywords = I("keywords");

         if(!empty($keywords))
         {
            $where['title']=array('like',$keywords);
            $data = M("article")->where($where)->order("id desc")->limit(2)->select();
         }else{
             $where['cateid']=$cateid;
             $data = M("article")->where($where)->order("id desc")->limit(2)->select();
         }
        
         $this->assign('data',$data);
         $where['id']=$cateid;
         $cate = M("cate")->where($where)->find();
         $this->assign('cate',$cate);
         $this->display();
    }


    public function detail()
    {
        $id = I('id');
        $where['id']=$id;
        $data = M("article")->where($where)->find();
        $this->assign('data',$data);
        $this->display();
    }

    public function pinglun()
    {
        $this->display();
    }
}