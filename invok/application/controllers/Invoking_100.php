<?php
/**
* 调用快递100接口并展示
* $data_ip  ip ip的地址 和 ip_time 当前时间
*/
class Invoking_100 extends CI_Controller
{
    public function __construc(){
        parent::__construct();
    }

    public function index(){
            $this->load->view('look_kd');//加载查询视图
    }

    public function invok_100(){
        $this->load->model("invoking_model");//加载模型
        $data['invok_100'] = $this->invoking_model->get_datas_kd100();//调用接口获取数据
        /*调用成功时记录ip和时间*/
        if (empty($data)) {
            /*$data_ip[] = '';
            $data_ip['ip'] = $this->input->ip_address();//获取ip
            $data_ip['ip_time'] = time();
            $this->invoking_model->save_ip($data_ip);*/
            /*加载成功视图*/
            $this->load->view('kd_success',$data);
        }else{
            //show_404();
            $data_ip[] = '';
            $data_ip['ip'] = $this->input->ip_address();//获取ip
            $data_ip['ip_time'] = date('Y-m-d h:i:s',time());
            $this->invoking_model->save_ip($data_ip);
            var_dump($data_ip);
        }
    }
}
