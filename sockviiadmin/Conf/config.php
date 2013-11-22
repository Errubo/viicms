<?php
      $commond_config=require './config.inc.php';
      $admin_config=array(
        //‘settingname’ => 'settingvalue'
        'URL_MODEL'=>'0',
      );
      return  array_merge($commond_config,$admin_config);
?>