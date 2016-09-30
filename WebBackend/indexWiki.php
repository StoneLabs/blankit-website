<?php
#exec("echo 'request:".$_POST['text']." FQ: ".utf8_encode($_POST['fq'])."' >> ./log",$ou,$re);
#echo utf8_encode("echo \"".$_POST['text']."\" | /srv/http/WordCount | java -jar FindBlank.jar ".$_POST['fq']);
exec("java -jar ParseWiki.jar ". utf8_encode($_POST['text'])." | /srv/http/WordCount | java -jar /srv/http/FindBlank.jar ".utf8_encode($_POST['fq'])
,$output,$return);
foreach($output as $s){
	echo utf8_decode($s." ");
}
echo ("[@24]");
?>
