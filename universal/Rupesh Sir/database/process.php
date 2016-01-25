<?php

function insert_student($r,$n,$p,$c,$m)
{
    include("conn.php");
    $q="insert into student(rno,name,phy,che,maths) values($r,'$n',$p,$c,$m)";
mysqli_query($con, $q);
$n=mysqli_affected_rows($con);
if($n>0)
{
return true;
}else
{
    return FALSE;
}
}

function update_student($r,$n,$p,$c,$m)
{
    include("conn.php");
    $q="update  student set name='$n',phy=$p,che=$c,maths=$m where rno=$r";
mysqli_query($con, $q);
$n=mysqli_affected_rows($con);
if($n>0)
{
return true;
}else
{
    return FALSE;
}
}
function delete_student($r)
{
    include("conn.php");
    $q="delete from  student where rno=$r";
mysqli_query($con, $q);
$n=mysqli_affected_rows($con);
if($n>0)
{
return true;
}else
{
    return FALSE;
}
}

function search_student($r)
{
    include("conn.php");
    $q="select * from  student where rno=$r";
$result=mysqli_query($con, $q);
$n=  mysqli_num_rows($result);
if($n>0)
{
$row=  mysqli_fetch_array($result);
return $row;
}else
{
    return FALSE;
}
}

function all_student()
{
    include("conn.php");
    $q="select * from  student";
$result=mysqli_query($con, $q);
$n=  mysqli_num_rows($result);
if($n>0)
{
while($row=  mysqli_fetch_array($result))
{
    $data[]=$row;
}
return $data;
}else
{
    return FALSE;
}
}