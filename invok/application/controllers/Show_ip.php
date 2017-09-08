<?php
/**
* 后台展示ip访问调用kd100记录
*/
class Show_ip extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function shows()
    {
        /*读取数据*/
        $this->load->model('Invoking_model');//加载模型
        $data['show'] = $this->Invoking_model->select_ip();
        /*加载视图*/
        $this->load->view('show_ip',$data);
        // var_dump($data['show']);
    }
}