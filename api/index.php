<?php



// echo getMillisecond();




 $url1="https://www.wjx.cn/joinnew/processjq.ashx?shortid=exqHmGI&starttime=2022%2F12%2F3%2020%3A03%3A47&source=directphone&submittype=1&ktimes=4&hlv=1&rn=457163975.19600571&jqpram=9SYWTTikV&nw=1&jwt=16&jpm=27&nip=1&t=".getMillisecond()."&jqnonce=95366513-661f-4224-8f1a-35a68e8f82ee&jqsign=%3D1722157)225b)0660)%3Cb5e)71e2%3Ca%3Cb%3C6aa";

// $url1='https://www.wjx.cn/joinnew/processjq.ashx?shortid=exqHmGI&starttime=2022%2F12%2F3%2022%3A36%3A25&nc_csessionid=013Ql56SOw9BYwytDa9zkTC1y3yM5ZL7HAU96AgE1axH8bjLTYlpofH2uuE4R_kMUo_XEI5yswDZ3O4DO3tl0mahzdKrZpuu-k5NtKF8LCtVhCRJ5iRIfSTgCb4k_J3y0nfreVBFiUMyGjrbPO7PLSgw&nc_sig=05a1C7nT4bR5hcbZlAujcdyZROV0N4ZI-J4WtGbLzwDr-0gL-6Q2NpFjORAZrEHVh3ncOGUiYuvZEYR8rXDPeuXa9B9fnoTjlZ8clIbEx0Eny-izPnipaRqNjlX04kWa85Z2HMzJM70IjlYOaI8AGSvfzdgJZJLLcAaYbpLCpLl9ox-eOAJikB4rIoeS1K_k1Sq0enjayYOUSBWN5zZYZ7yw_XDBrHvIaxjYVQxuj3cXisAAQyXotUtemBKwGzrRTIFE169mBBIlBhyFcFPcbZYW1B5OsMn_TAcq5vBnWLumW1nSsxs7vXzDZJggehbr8hI4yryucQCmxl_bqQs8eOrQvBt7N7O0a18xMRCqLaKo-ocISBOgCoVoolldwrNqK3&nc_token=1670078184342%3A0.6347461486605894&nc_scene=ic_activity_h5&source=directphone&submittype=1&ktimes=3&hlv=1&rn=457163975.00061321&jqpram=EGeuMJn9t&nw=1&jwt=16&jpm=27&nip=1&t='.getMillisecond().'&jqnonce=0bbcf111-65f6-4309-a062-0a837d4e2f42&jqsign=3aa%60e222.56e5.703%3A.b351.3b%3B04g7f1e71';

$cs=curlPost($url1,array('submitdata' => '1$4}2$2'));
if($cs!="22")
{
    echo("成功成功成功成功");
}
else {
    echo("失败失败失败失败");
}


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
    
    
        $header  = array(
            'Cookie: .ASPXANONYMOUS=JKMBYAw92QEkAAAANWIwNGNlMzQtZGY0YS00ZmEyLWIzOGEtZGMxMmVjOTIyYTRi0P9FRaIg4YZiJmZK400HJXI3II81; browserid=4f898255-bd12-4c36-bc0f-c85960ea153a; awardshowway10=1; Hm_lvt_21be24c80829bd7a683b2c536fcf520b=1670005134,1670056510; awardshowway11=1; lastshowway=11|2022-12-03 19:49; wjxawardload=11727%7C199036718; acw_tc=2f624a7416700713337436710e60d41a595e4c84f8abc61f5c4deb2c11628e; LastActivityJoin=199036718,116003558388; join_199036718=1; jac199036718=04904560; SERVERID=797658896bbfe7476f5f4103a02a2b4f|1670072369|1670071333; Hm_lpvt_21be24c80829bd7a683b2c536fcf520b=1670072369; ssxmod_itna=eqUxu7q7qDqWwwxl4iuiUYQKxYwrxD5qKPo4QD/KCmDnqD=GFDK40ooOf0EtIUYhYm3+xoG7m+DpmYaRQaRoWmDB3DEx0=q1074ii9DCeDIDWeDiDGRHD=xGYDjG9ZknDm4i7DYqiODzddcDGf9DYPneqDgRqDBGg3DKqGgiM6LWjXYxGtqzkGxiqDMIeGXCAWKiLrTrphgzuTi=QP2/MNDtqD9Sq=Db3LYx0pcfuioSG+WbF+z4EgAt+d5DY5bAGGFbDY3i0x4z/42kU6oQODxD; ssxmod_itna2=eqUxu7q7qDqWwwxl4iuiUYQKxYwrxD5qKPo4DSD8wxGNWG2WWDRhtjpx7pxfZt4qn=uKthZ/PWH+tgB=GIt3h+SuBufWcrGITbhKSYS5qeAnbBy0r1nx08DewhD=',
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
            'Content-Length: 24',
            'Connection: keep-alive',
            'Accept-Language: zh-CN,zh;q=0.9,en;q=0.8',
            'Accept-Encoding: gzip, deflate, br',
            'Accept: text/plain, */*; q=0.01',
        );
 
        if (is_array($post_data))
        {
            $post_data = http_build_query($post_data, null, '&');
            //echo( $post_data);
        }
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
?>