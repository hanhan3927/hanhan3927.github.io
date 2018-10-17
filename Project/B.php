<!DOCTYPE html>
<html>
<body>
<meta http-equiv="Pragma" content="no-cache"> 
<?php
$video_name= ["各位評審.mp4","大家好.mp4","很高興認識你.mp4","我是手語翻譯.mp4","我得名字.mp4","有什麼能幫助你嗎.mp4","謝承敏.mp4","謝謝各位的聆聽.mp4"];
if(strpos($txt,"各位評審")!==false){$age[strpos($txt,"各位評審")]=$video_name[0];}
if(strpos($txt,"大家好")!==false){$age[strpos($txt,"大家好")]=$video_name[1];}
if(strpos($txt,"很高興認識你")!==false){$age[strpos($txt,"很高興認識你")]=$video_name[2];}	if(strpos($txt,"我是手語翻譯")!==false){$age[strpos($txt,"我是手語翻譯")]=$video_name[3];}
if(strpos($txt,"我的名字")!==false){$age[strpos($txt,"我的名字")]=$video_name[4];}
if(strpos($txt,"有什麼能幫助你嗎")!==false){$age[strpos($txt,"有什麼能幫助你嗎")]=$video_name[5];}
if(strpos($txt,"謝承敏")!==false){$age[strpos($txt,"謝承敏")]=$video_name[6];}
if(strpos($txt,"謝謝各位的聆聽")!==false){$age[strpos($txt,"謝謝各位的聆聽")]=$video_name[7];}
ksort($age);
//$age = array("35"=>$video_name[1], "100"=>$video_name[2], "12"=>$video_name[0]);
//array("12"=>$video_name[0], "35"=>$video_name[1], "100"=>$video_name[2]);

?>
<video id="vedio1" width="320" height="240" controls autoplay="ture"><source id = "source" src=" " video/mp4"></video>


<script>
  
  var vedio = document.getElementById("vedio1");
  var source = document.getElementById("source");
  var arr = <?php echo json_encode($age) ?>; 
  var array = []
  for (var a in arr){
  	array.push(a)
  }
  var count =0 ;
  var len = array.length;

  function play_next(){
  	if(count==len){
  		vedio.removeEventListener('ended',function(){play_next(now);},true);
  	}
  	console.log(array[count],arr[array[count]]);
  	source.src = arr[array[count]];
  	vedio1.load();
  	console.log("asdsajkdjaslk",source.src);
  	count++;
  }

  play_next();

  vedio.addEventListener('ended', function(){play_next();}, true);
  
</script>

</body>
</html>