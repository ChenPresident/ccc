<?php
            $m3u8 = $_GET["m3u8"];
            $array=explode('/', $m3u8);
            $uniName = $array[4];
            $key = str_ireplace(".m3u8","",$uniName);
            $url = "http://chenpresident.github.io/ccc/".$key; //修改播放地址域名
			echo json_encode(['code'=>0,'url'=>$url,'m3u8'=>$m3u8]);
?>
