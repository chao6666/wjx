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
            'Cookie: browserid=4f898255-bd12-4c36-bc0f-c85960ea153a; acw_tc=2f624a6916787636676093117e5feeb81714a26d66a24649594562254a49fc; .ASPXANONYMOUS=UPSk7LSM2QEkAAAAYjg2ZTkzNjktYjkwMy00MWJlLWIwMzYtMzkzMmFjYWM0ZWRjJpdU9Lhtgy2vATHSNVCyCfajNQs1; Hm_lvt_21be24c80829bd7a683b2c536fcf520b=1678763709; Hm_lpvt_21be24c80829bd7a683b2c536fcf520b=1678763751; LastActivityJoin=199036718,116887825971; join_199036718=1; lastshowway=10|2023-03-14 11:29; jac199036718=26825288; SERVERID=ec48383874998d7d7994224bf7acd1b0|1678764663|1678763667; ssxmod_itna=QqAxB7G=eWT4RiDzrD2YLo0=KZ3xEZ0Yg7Gx0HPoGzDAxn40iDtoxsDDwnT/7z5WQR=DqwxoiEGD3=DRoHu5NiP1yqoDU4i8DCkD9QbDee=D5xGoDPxDeDAQKiTDY4DdjpNv=DEDeKDRDAQDzLdyDGfBDYP9QqDgSqDBCOdDKqGg7kU6CQ03xGUxIL+37qDMUeGX7YcC7dbaO=vMITWbaePuKCiDtqD94m=DbfL3x0pyRTrz734oUSeKWOG3Q0o4Y8xoKDQKC8GCYiqbfBxqz0oKzYh33S+1z5DAfYvdtE4xD===; ssxmod_itna2=QqAxB7G=eWT4RiDzrD2YLo0=KZ3xEZ0Yg7Dn9Opx2qDsoD07Dj4T51mKTpdidazmwKhscYilHpxeT4jR0+NE2W8PAY6Kwf=p4Pt0YHEDROjR64pfoSN9fPqyH4871szz1vY6MwrMl9b3hel5m3n5IiWrvefN4143epQb8InRSzxYQ64uQW4TqD1utXerYd=E6Gbq=ChRLzaNrEjYAjM9mfa94up9h/PfGaaNkd9paE4gwh4UCOiFhe=Ow6dgGFF7O21FzEgy4TTHtyzCUqV7fdX8ua/gjo/l2rHz4Yq/HAe82=zLEOICMb1ok7VLO2DzKCzW2aodQoMxZGbYDz8BeD7j5QG7ewMah6iKSiG70e=RrN4pibebIwxB2aPq9BRbfxozL7bPR0eRBfNFvP7wQ7qqD6LlTm0qSjwHoY4ive7DIjmKl3jBW8DaInxDjKDedK4D',
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
