<?php
	header("Content-type:text/html; charset=utf-8");
	include "./inc/db_info.php";
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
	<style>
		*{   margin:0;   padding:0; }   li{  list-style-type:none; }     img{  border:0 none; }
		
		body{    font-size:100%;   color:#333;   line-height:23px;   font-family:"Malgun Gothic", sans-serif;   }
		a:link   , a:visited {   color:#333;    text-decoration:none;   }
		a:hover, a:focus   {   color:red;      text-decoration:underline;   }

		.basic{     width:70%; margin:100px auto;   padding:5%;     }
		form{  width:80%; margin:0 auto;   font-size:100%;  }
		fieldset{  border:0 none;  }
		legend{  font-size:0; line-height:0;  width:1px;   height:1px;   overflow:hidden;      position:absolute; left:-9999%; }
		h3{  margin:10px  0;  }
		form p{   margin-bottom:2%; }
		label{   width:20%;   display:inline-block;    color:#333;   font-size:90%;     }
		input{  border:1px solid #ccc;    width:38%;  padding:2px;   font-size:70%; }
		label , input{  vertical-align:middle; }
		input#wphone, input#wphone2 , input#wphone3 , #post1 , #post2{      width: 20%;  }
		.label_strong { display:block;   color:#333;   font-size:90%;    font-weight:normal; }
		strong{  color:crimson; margin:0 2px;   }
		p span{  display:block; width:100%; }
		input[type="button"] , input[type="reset"] , input[type="submit"] 
		{  width:20%;   margin:0 6px;     border:1px solid crimson;   color:crimson;  background-color:white;  }

		input[type="submit"] {  color:white;  background-color:crimson; }

		input[type="button"]:hover, 		input[type="button"]:focus,
		input[type="reset"]:hover, 		    input[type="reset"]:focus{   color:white;  background-color:crimson;  }
		input[type="submit"]:hover, 		input[type="submit"]:focus  {  color:crimson;  background-color:white; }
		.center{  text-align:center; }
		#address  ,  #address2{      width: 35%; }

		/*  board.php */
		.basic.board  h3{   border-left:10px solid crimson; text-indent:1em; }
		.basic.board  table{   width:80%; margin:50px auto;    border-collapse:collapse;    }
		/*  border-collapse: 셀테두리를 하나로 표현할지 분리할지     border-collapse:collapse => 테두리를 하나로 합치게 지정, border-spacing 사용못함.
		    border-spacing : 인접한 셀테두리 사이간격지정 ,border-collapse 가 separate일때 사용가능 */
		.basic.board  table  caption{    position:absolute; left:-9999px;  width:1px; height:1px; overflow:hidden; font-size:0;   line-height:0; }
		.basic.board  table  td  , 		.basic.board  table  th{  border-bottom:1px solid #ccc;    padding:10px;  text-align:center;  }
		.basic.board  table  th{   border-top:5px solid #ddd; background-color:#efefef; color:crimson; }
		.basic.board  .menubtn td{  text-align:right; }
		.basic.board  .menubtn a:link ,  		.basic.board  .menubtn a:visited{   border:1px solid crimson;   padding:3px; color:crimson; background-color:white;  }
		.basic.board  .menubtn a:hover ,  		.basic.board  .menubtn a:focus{color:white; background-color:crimson;}
	</style>
 </head>
 <body>
	<?php include "./inc/header.php"; ?>
	<div  class="basic  board">
		<h3> PHP MYSQL 멀티게시판제작</h3>
		<table>
			<caption>mutiboard</caption>
			<colgroup>
				<col  style="width:15%"/><col  style="width:35%"/><col  style="width:15%"/><col  style="width:25%"/><col  style="width:20%"/>
			</colgroup>
			<thead>
				<tr><th scope="col">번호</th>  <th scope="col">제목</th> <th scope="col">글쓴이</th> <th scope="col">작성일</th> <th scope="col">조회</th>  </tr>
			</thead>
			<tfoot> <tr  class="menubtn"> <td colspan="5"><a href="./bwrite.php">글쓰기</a></td></tr>  </tfoot>
			<tbody>
			<?php   
					 $result = mysql_query("SELECT * FROM  multiboard  ORDER BY  bno  DESC")    or  die(mysql_error());  //전체결과가져오기
					 # 전체 갯수구하기 : int mysql_affected_rows ([ resource $link_identifier ] )    3-0=3 / 3-1=2 / 3-2=1
					 $total = mysql_affected_rows(  $conn   );   
					 $cnt = 0; 
					 while(	   $row = mysql_fetch_array($result )     )   # mysql_fetch_array데이터 / false
					  {   
			?>
						<!--  반복되는 줄 : START -->
						<tr><td><?=$total-$cnt?></td> 
						<td><a href="./bdetail.php?bno=<?=$row['bno']?>"><?=$row['btitle']?></a></td>
						<td><?=$row['bname']?></td>
						<td><?=$row['bdate']?></td>
						<td><?=$row['bview']?></td></tr>
						<!--  반복되는 줄 : END -->
			<?php   $cnt++;      }  ?>
			</tbody>
		</table>
	</div>
 </body>
</html>
<?php  mysql_close( $conn );  ?>