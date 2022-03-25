<?php 

class portofolio extends Controller{
    public function index(){
        $this->view('portofolio/index');
    }
       $data ['profile'] = $this->model('portofolioModel');

       $this->('portofolio/index',$data);
}