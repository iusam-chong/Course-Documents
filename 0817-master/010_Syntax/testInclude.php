<?php
  include("testDefine.php"); // 抓不到檔案無所謂
  require("testDefine.php"); //抓不到檔案或失敗 直接結束程式
  // require_once("testDefine.php");
  echo test;

  include_once("testDefine.php");
  
  echo test;

?>