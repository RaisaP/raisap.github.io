<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Блог</title>
<?php 
	require_once('header.php');
	include('bd.php');
?>
<!---header---->			
<div class="header">
	<div class="container">
	<!---start-top-nav---->
		<div class="top-menu">
			<span class="menu"> </span> 
			<ul>
				<li class="active"><a href="index_auth.php">ГЛАВНАЯ</a></li>
				<div class="clearfix"> </div>
			</ul>
		</div>
		<div class="clearfix"></div>
		<script>
			$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
			});
		</script>
		<!---//End-top-nav---->					
	</div>
</div>
<!--/header-->
<div class="content">
	<div class="container">
		<div class="content-grids">
 			<div class="col-md-8 single-main">
	 			<div class="content-grid">
<?php 
            $sql = mysql_query("select user.fio,blog.datab,blog.message from blog left join user on blog.user_id=user.user_id order by blog.blog_id DESC;") or die(mysql_error());
            while ($row = mysql_fetch_assoc($sql)) {
            		$fio=$row['fio'];
            		$datab=$row['datab'];
            		$message=$row['message'];
?>
					<div class="content-grid-info">
						<div class="post-info">
							<h4><a href=""><? echo $fio;?></a>  <? echo $datab;?></h4>
					 		<p><?echo $message;?></p>
						</div>
					</div>
<?php 
};
?>
				</div>
		  	</div>
		  	<div class="col-md-4 side-content">
				<div class="recent">
					<h4>Написать сообщение</h4>
<?php
			if(isset($_POST["message"])){ $messagem = $_POST["message"]; }
			
			if(strlen($messagem)>0){

				$user_id=$_SESSION['user_id'];
				$datab=date("Y-m-d H:i:s");
			
				$in_bd="INSERT INTO `blog`(`user_id`, `datab`, `message`) VALUES ('".$user_id."','".$datab."','".$messagem."')";
        		$sql = mysql_query($in_bd) or die(mysql_error());

//echo $messagem;
        		echo '<div style="color:blue;font-weight:bold;">Сообщение доставлено!</div>';
				$messagem='';
				header('Location: http://'.$_SERVER['HTTP_HOST'].'/my_bootstrap/index_auth.php');
			}
    		//			exit;
  ?>
					<form id="f_mess" method="POST">
        				<textarea name="message" placeholder="Сообщение" name="message"></textarea>
        				<input type="submit" value="Отправить" id="btns"/>
    				</form>
    				<div class="response" id="mess_form"></div>
				</div>
				<div class="recent">
					<h3><div style="color:blue;font-weight: bold;">
					<?php echo $_SESSION['fio'];?></div></h3>
					<ul>
						<li><a href="out.php" id="bntv">Выход</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
	  	</div>
  	</div>
</div>
