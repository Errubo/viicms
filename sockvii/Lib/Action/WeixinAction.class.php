<?php
   require ('BaseAction.class.php');
   class  WeixinAction extends BaseAction{
   //this is the your number from the weixinsource
    const token = 'yourtoken';   
    function _initialize(){
        parent::_initialize();
    }
    public function valid(){
        $echoStr = $this->_get('echostr');
        if($this->checkSignature()){
            echo $echoStr;
            exit;
        }
    }     
    private function checkSignature(){
        $signature = $this->_get('signature');
        $timestamp = $this->_get('timestamp');
        $nonce = $this->_get('nonce');
        $tmpArr = array(self::token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            return true;
        }else{
            return false;
        }
    } 
   }   
?>
