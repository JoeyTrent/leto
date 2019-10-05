<?php 
  $connection=mysqli_connect('127.0.0.1','root','123456','demo1');
  if(!$connection){
  	exit('连接失败');
  }
  mysqli_set_charset($connection,'utf8');
  // phpinfo();
  $query=mysqli_query($connection,'select*from user2;');
 // $query=false;
  //var_dump($query);
  // if(!$query){
  // 	exit('查询失败');
  // }
  while($row=mysqli_fetch_assoc($query)){
  	var_dump($row);
  }
 // mysqli_free_result($query);
 // mysqli_close($connection);
 ?>