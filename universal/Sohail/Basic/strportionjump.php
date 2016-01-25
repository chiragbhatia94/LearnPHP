<pre>
<?php
$str='The quick brown fox jumps over the lazy dog';
$arr=explode(" ",$str);
$chk=0;
//print_r($arr);
for($i=0;$i<count($arr);$i++)
{
if($arr[$i]=='fdjhghdk')
{
$chk=1;
}
}
if($chk==1)
{
echo"Yeah!!! SubString Present:)";
}
else
{
echo"Nopes!!! It's Not Present:(";
}




?>
