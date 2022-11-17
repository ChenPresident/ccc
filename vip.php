<?php
$arr = array('sbm' => 'xxxxxxxxxxx', 'time' => '2030-01-01 00:00:00', 'name' => '陈校长'); //修改sbm后面的xxxxxxxxxxx为自己的设备码
if($arr['sbm']==$_GET['sbm']){
    exit(json_encode(['code'=>0,'sbm'=>$arr['sbm'],'time'=>$arr['time'],'name'=>$arr['name'],'msg'=>'本工具仅限学习交流使用，禁止违法违规用途##视频无法播放：历史记录点更新直连地址然后双击复制#上传遇卡住不动，建议用剪映专业版把视频压缩小一点#或者开启修复模式重新上传，修复模式切片稍微慢一点'])); //这是公告，#符号为换行
}
exit(json_encode(['code'=>-1,'sbm'=>$_GET["sbm"],'time'=>'1970-01-01 00:00:00','msg'=>'赞助开发者。激活设备...']));
?>