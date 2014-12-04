<?php

	function _getUrlContent($url){
		$handle=fopen($url,"r");
		if($handle){
			$content=stream_get_contents($handle);
			return $content;
		}
		else
			return false;
	}

	function _filterUrl($web_content){
		$reg_tag_a='/<[a|A].*?href=[\'\"]{0,1}([^>\'\"\ ]*).*?>/';
		$result=preg_match_all($reg_tag_a, $web_content, $match_result);
		if($result)
			return $match_result[1];
	}

	$index=$_GET["index"];
	if($index==1)
		echo _getUrlContent('http://baidu.com');
	elseif ($index==2){
		$content=_getUrlContent('http://baijia.baidu.com/');
		$url_list=_filterUrl($content);
		if(is_array($url_list)){
			foreach ($url_list as $url_item) {
				if(preg_match('/^http/',$url_item))
					$result[]=$url_item;
				else{
					$real_url='http://' . $url_item;
					$result[]=$real_url;
				}
			}
			foreach($result as $item)
				echo $item . "\r\n";
		}
	}
	else
		echo _getUrlContent('http://tool.oschina.net/apidocs');





?>