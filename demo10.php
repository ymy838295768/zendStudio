<?php 
//与正则表达式配合使用的函数
    //preg_match():只匹配0次或者1次
            /*$a = '/t(.*?)xt/';
            $str = '   text   txdffst  tjgfkst    tdkkdkst';
            var_dump(preg_match($a,$str,$arr));
            var_dump($arr);*/
    //preg_replace():
        /*第一个参数：正则表达式
         *第二个参数：要替换成的字符串
         *第三个参数：目标字符串
         *第四个参数（可选）：默认是-1，就是替换所有符合特征部分的
         *第五个参数（可选）：可以放一个变量
         */
        
            $a = '/<div(.*?)>(.*?)<\/div>/';
            $arr1 = '<a$1 href="http://www.baidu.com">$2</a>';
            $str = 'dshahf<div "style=color:red;fond-size:25px;">广阔的公司开放式开发商来看</div>kshsfkhdgks';
            if (preg_match($a, $str,$arr)){
                echo preg_replace($a, $arr1, $str);
            }else {
                echo '没有找到';
            }
            echo '<br/><br/><br/><br/>';
            echo $str;




















?>
