<?php
    $fileInfo = $_FILES['upfile'];  //接收上传文件
    /** 检测文件上传是否成功 **/
    if(!is_null($fileInfo)){
            /** 检测文件长度 **/
            if($fileInfo['size'] > 2000000){
                echo '上传文件大于1M';
                exit;
            }
            /** 保存m3u8 **/
            $uploadPath  = 'SMR_video';    //保存m3u8路径
            if (!file_exists($uploadPath)) {
                $result = mkdir($uploadPath);
            }
            $uniName     = $fileInfo['name'];   //名字需要唯一
            $destination = $uploadPath.'/'.$uniName;
            if(@move_uploaded_file($fileInfo['tmp_name'], $destination)){
                $m3u8 = 'http://tohome.vip/'.$destination; //这里修改m3u8域名
                $key = str_ireplace(".m3u8","",$uniName);
                $url = "http://cxz.github.io/".$key; //这里修改播放地址域名
                echo json_encode(['code'=>0,'url'=>$url,'m3u8'=>$m3u8]);
            }else{
                echo '文件移动失败';
                exit;
            }
    }else{
        echo '文件上传出错';
        exit;
    }
?>