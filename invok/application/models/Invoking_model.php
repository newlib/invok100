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

        $key = 321313213;
        $url = "http://api.kuaidi100.com/api?id=".$key."&com=".$com."&nu=".$numb."&show=0&muti=0&order=desc";

            $kd = curl_init();
            curl_setopt($kd,CURLOPT_URL,$url);
            curl_setopt($kd,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($kd,CURLOPT_HEADER,0);
            curl_setopt($kd,CURLOPT_TIMEOUT,5);
            $output=curl_exec($kd);

            curl_close($kd);//关闭请求
            return $output;
    }
}