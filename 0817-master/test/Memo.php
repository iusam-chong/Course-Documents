<?php
    // require("testDefine.php"); //抓不到檔案或失敗 直接結束程式
    // require_once("testDefine.php");

    $userName = "Sam" ;

    echo $userName." | "."$userName"." | ".'$userName'."<br>";

    $x = 12 ;
    $y = '12' ;
    $z = "String" ;

    $result = $x + $y ;
    $result2 = $x . $z ;
    $result3 = $y . $z ;
    
    echo $result ."<br>" ;
    echo $result2 ."<br>" ;
    echo $result3 ."<br>" ;

    // $s = <<<script
    // <script>
    // test() ;
    // function test(){
    //     alert("OK");
    //     setTimeout(test,2000) ; 
    // }</script>
    // script;

    // echo $s ;

    $a = 0x10;
    $b = '0x10';

    $result = $a + $b ;

    echo $result."<br>" ;

    // a && b 前者TRUE才執行後者
    // a & b 前者不管TRUE FALSE都執行後者

    // $x = 3;
    // if ($x >= 10 && foo()) //前面判斷TRUE才會做後面，應用密碼檢查，假設密碼不是空就執行密碼檢查
    //   echo "yes";
    // else
    //   echo "no";

    //@require("testDefine.php"); // @ ，關閉該行錯誤訊息
      
    $xx = 100 ;
    $yy = &$xx ;

    $yy = 300 ;
    echo $yy ;

    echo "<hr>" ;

    unset($xx);
    $xx = 111;
    echo $yy ;

    // function test($i) {
    //     return $i + 1;
    // }
    
    // // $x = 1;
    // // echo test($x);
    
    // $x = 2;
    // $p = "test";
    // echo $p($x);
    

?>