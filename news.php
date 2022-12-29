<?php
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //인증서 검사 안함
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //return(결과)값 받음
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL, "https://www.chosun.com/arc/outboundfeeds/rss/category/sports/?outputType=xml");
    $url_source=curl_exec($ch);
    curl_close($ch);

    echo $url_source;
?>