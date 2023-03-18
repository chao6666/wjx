<?php



// echo getMillisecond();

//http://118.195.177.234/cs/wjx.php?url=&sj=

//这个链接必须是安卓页面抓包的链接
 $str=$_GET['url'];
 
//  $ContentLength=$_GET['L'];//请求头中的Content-Length的值
//  $cd=(int)$ContentLength;
 $shuju=$_GET['sj'];//数据


// $l="0000000000000000000000000000000";

// echo strlen($l);

$parts = explode('&t=', $str);

$part = strstr($parts[1], '&jqnonce=');


$url1=$parts[0]."&t=".getMillisecond()."&jqnonce=".substr($part, 9);

//  echo $str;
//  $url1="https://www.wjx.cn/joinnew/processjq.ashx?shortid=run69Uz&starttime=2023%2F3%2F18%2022%3A32%3A07&source=directphone&submittype=1&ktimes=4&hlv=1&rn=457163019.27383172&jqpram=vdSH0TpfS&nw=1&jwt=16&jpm=27&nip=1&t=".getMillisecond()."&jqnonce=dfb65b66-bb73-4c93-a57a-a00c10b80af1&jqsign=%60bf21f22)ff37)0g%3D7)e13e)e44g54f%3C4eb5";
 
 
//  $url1="https://www.wjx.cn/joinnew/processjq.ashx?shortid=run69Uz&starttime=2023%2F3%2F18%2021%3A41%3A01&submittype=1&ktimes=108&hlv=1&rn=457163019.70371883&jqpram=Y7aJEzDh&nw=1&jwt=16&jpm=27&nip=1&t=".getMillisecond()."&jqnonce=45693aef-e491-4d5c-b6b7-8e7dda79c821&jqsign=%3C%3D%3E1%3Bimn%25m%3C19%25%3Cl%3Dk%25j%3Ej%3F%250m%3Flli%3F1k0%3A9";
 

// $url1='https://www.wjx.cn/joinnew/processjq.ashx?shortid=exqHmGI&starttime=2022%2F12%2F3%2022%3A36%3A25&nc_csessionid=013Ql56SOw9BYwytDa9zkTC1y3yM5ZL7HAU96AgE1axH8bjLTYlpofH2uuE4R_kMUo_XEI5yswDZ3O4DO3tl0mahzdKrZpuu-k5NtKF8LCtVhCRJ5iRIfSTgCb4k_J3y0nfreVBFiUMyGjrbPO7PLSgw&nc_sig=05a1C7nT4bR5hcbZlAujcdyZROV0N4ZI-J4WtGbLzwDr-0gL-6Q2NpFjORAZrEHVh3ncOGUiYuvZEYR8rXDPeuXa9B9fnoTjlZ8clIbEx0Eny-izPnipaRqNjlX04kWa85Z2HMzJM70IjlYOaI8AGSvfzdgJZJLLcAaYbpLCpLl9ox-eOAJikB4rIoeS1K_k1Sq0enjayYOUSBWN5zZYZ7yw_XDBrHvIaxjYVQxuj3cXisAAQyXotUtemBKwGzrRTIFE169mBBIlBhyFcFPcbZYW1B5OsMn_TAcq5vBnWLumW1nSsxs7vXzDZJggehbr8hI4yryucQCmxl_bqQs8eOrQvBt7N7O0a18xMRCqLaKo-ocISBOgCoVoolldwrNqK3&nc_token=1670078184342%3A0.6347461486605894&nc_scene=ic_activity_h5&source=directphone&submittype=1&ktimes=3&hlv=1&rn=457163975.00061321&jqpram=EGeuMJn9t&nw=1&jwt=16&jpm=27&nip=1&t='.getMillisecond().'&jqnonce=0bbcf111-65f6-4309-a062-0a837d4e2f42&jqsign=3aa%60e222.56e5.703%3A.b351.3b%3B04g7f1e71';


// $queryString = http_build_query($data);

$cs=curlPost($url1,array('submitdata' => $shuju));// 意为第一题选项选第四个，第二题选第二个  1$2}2$2}3$1}
if($cs!="22")
{
    echo("成功成功成功成功".$cs);
}
else {
    echo("失败失败失败失败");
}

// echo strlen($queryString);
// echo(curlPost("http://39.99.45.54/%E9%97%AE%E5%8D%B7%E6%98%9F/IP.php",array('h' => '666')));



 function curlPost($url,$post_data = array()){
     
     
     
     $ip_long = array(
        array('607649792', '608174079'), //36.56.0.0-36.63.255.255
        array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
        array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
        array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
        array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
        array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
        array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
        array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
        array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
        array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
    );
    $rand_key = mt_rand(0, 9);
    $ip= long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
 
        if (is_array($post_data))
        {
            $post_data = http_build_query($post_data, null, '&');
            //echo( $post_data);
            echo strlen($post_data);
        }
        
        $header  = array(
            'Cookie: browserid=0abf6065-44b8-41a9-b1aa-c39ad2b117b9; .ASPXANONYMOUS=Lrw6bISO2QEkAAAANGYwYjJlZDgtNTNlZS00OTM1LWJiMGUtNDNlZWE3N2ZkYWEzfKxkQ4Xh4-Y4Cia4xaLobAE7MeQ1; Hm_lvt_21be24c80829bd7a683b2c536fcf520b=1678962739,1679026175,1679137451; acw_tc=707c9fd716791459863504743e021beb5cec4ec6fbf575a6b5159c86781d74; jac199036718=25923514; jac212824294=70371883; SERVERID=a3c22b3ae01a340de51e583138c7fc4c|1679146972|1679145986; baidutgkey=%u586B%u5199%u9875%u9762%7C0%7Cwjx; Hm_lpvt_21be24c80829bd7a683b2c536fcf520b=1679146973; ssxmod_itna=GuGQ0KDIqUx+oxl4iwdS8GCCuuBBQmDWuar+pqDstpDSxGKidDqxBWmlm7nO27+xQWxe0QHKalGfNT7pCow4PWpA8XYDU4i8DCL7hd5+DYYkDt4DTD34DYDihQGIDieDF8NvzkDbxYQDYqGRDB6UzqDfmqGW8MQDmuNDGqI6D7QDIL=S9Srx6eDS3+t5CA=DjqTD/8eaTA=oH6ce0wUrd1ratwi4xBQD7T09DYEUjeDHGTXPM2E4IY4o37GYKhp+4owobioAaShQ/DQAh7SqIDh5UY4KFNxDG4+WbrD=; ssxmod_itna2=GuGQ0KDIqUx+oxl4iwdS8GCCuuBBQmDWuar+qikEPDumD0HM2x03QoPcT66QQTmaTHd7SnPjc014r9mEb5QpIGorLcfKWfnGSS4wdufGPX=MWnxovU8K7jdb61SRcjLM67gyLNzgOG29kj=DCZgixhcyOaOYkLc5hZ20hbZYp5Sem0DiduPgIQSEOF/57s4AEr+fWtpfFzznsXfmbxp8LM0WUltkmybffE3fUSKlG4wlA0FTrP8SmH3lnj1+0aZlAoyj94+7p2P=cl3KIaL3khX=MsdpnyQzaey++uwzf8vSm1fwh1sAW=hWDG2GiKIi5Q+W70QfrKbGF3ipz2130YtbPKRxG74pxHU7Kpbq4T9C0YKRYSbxiAzmbdtO3p+3dO3u0tKDqf2YKhCCcYUgeRg=Kr=12=ZGFRG+CGL8xbP2tNi=krWPx3kSYtirkfuj3ofxYD08DijeYD==',
            'X-Requested-With: XMLHttpRequest',
            'User-Agent: Mozilla/5.0 (Linux; Android 8.0.0; SM-G955U Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Mobile Safari/537.36',
            'Sec-Fetch-Site: same-origin',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Dest: empty',
            'sec-ch-ua-platform: "Android"',
            'sec-ch-ua-mobile: ?1',
            'sec-ch-ua: "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
            'Referer: https://www.wjx.cn/vm/exqHmGI.aspx',
            'Origin: https://www.wjx.cn',
            'Host: www.wjx.cn',
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'Content-Length:'.strlen($post_data) ,
            'Connection: keep-alive',
            'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8',
            'Accept-Encoding: gzip, deflate, br',
            'Accept: text/plain, */*; q=0.01',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch , CURLOPT_URL , $url);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch , CURLOPT_POST, 1);
        curl_setopt($ch , CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
        // curl_setopt($ch, CURLOPT_HEADER, 1);
        
        // curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
        // curl_setopt($ch, CURLOPT_PROXY, "39.175.90.51"); //代理服务器地址
        // curl_setopt($ch, CURLOPT_PROXYPORT, "30001"); //代理服务器端口
        // curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); //使用http代理模式

        
        
        $output = curl_exec($ch);
        // echo curl_error($ch);
        return $output;
        // print_r(curl_getinfo($ch));
        curl_close($ch);
    }



function getMillisecond() {

list($t1, $t2) = explode(' ', microtime());

return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);

}


//      https://www.wjx.cn/vm/exqHmGI.aspx
//      https://www.wjx.cn/vm/run69Uz.aspx
//      https://www.wjx.cn/vm/Yi3lvVe.aspx

?>