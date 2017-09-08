<?php
/**
* 调用快递100模型
*/
class Invoking_model extends CI_Model
{
    public function get_datas_kd100(){
        //post方式接收传递过来的数据
        $com = $this->input->post('com');//快递公司
        $numb = $this->input->post('number');//订单号

        $key = 321313213;//快递100接口key值
        $url = "http://api.kuaidi100.com/api?id=".$key."&com=".$com."&nu=".$numb."&show=0&muti=0&order=desc";//接口地址

            $kd = curl_init();//请求初始化
            curl_setopt($kd,CURLOPT_URL,$url);
            curl_setopt($kd,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($kd,CURLOPT_HEADER,0);
            curl_setopt($kd,CURLOPT_TIMEOUT,5);
            $output=curl_exec($kd);

            curl_close($kd);//关闭请求
            return $output;
    }

    public function save_ip($data_ip) {

        $data = array(
            'ip' => $data_ip['ip'],
            'time'=>$data_ip['ip_time'],
        );
        $bool = $this->db->insert('user_info',$data);

        return $bool;
    }

    public function select_ip() {
        //$shows = $this->db->query('SELECT ip,COUNT(*) time FROM user_info GROUP BY ip');//查询构造函数
        $this->db->select('ip, COUNT(*) time');
        $this->db->from('user_info');
        $this->db->group_by('ip');

        $query = $this->db->get();
        $shows = $query->result();
        return $shows;
    }
}