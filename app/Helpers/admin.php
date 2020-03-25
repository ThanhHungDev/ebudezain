<?php 
function limitText($content = false, $limit = false, $ellipsis = '...') {
    if(mb_strlen($content,'UTF-8') > $limit){
        $content= str_replace('\n', '', mb_substr(strip_tags($content), 0, $limit,'UTF-8')) . $ellipsis;
    }else{
        $content = str_replace('\n', '', strip_tags($content));
    }
    return $content;
}