<?php
/**
* 调用快递100接口并展示
*/
class Invoking_100 extends CI_Controller
{
    public function __construc(){
        parent::__construct();
    }

    public function index(){
            $this->load->view('look_kd');
    }

    public function invok_100(){
        //$this->load->model("invoking_model");
        /*$data = $this->invoking_model->get_datas_kd100();*/
        $data['com'] = $this->input->post('com');//快递公司
        $data['numb'] = $this->input->post('number');//订单号
        //$data['ip'] = getenv('REMOTE_ADDR');
        $data['ip'] = $this->input->ip_address();
        if(empty($data)){
            show_404();
        }else{
            $this->load->view('kd_success',$data);
        }
    }
}
