<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Блог- Авторизация</title>
<?php 
	require_once('header.php');
	include('bd.php');
?>
<div class="header">  
	<div class="container">
	<!---start-top-nav---->
		<div class="top-menu">
			<span class="menu"> </span> 
			<ul>
				<li><a href="index.php">ГЛАВНАЯ</a></li>
				<li class="active"><a href="authoriz.php">Авторизация</a></li>	
				<li><a href="registrat.php">Регистрация</a></li>
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
<div class="contact-content">
	<div class="container">
   		<div class="contact-info">
			<h2>Авторизация</h2>
		</div>
		<div class="contact-details">
		<?php
			if(isset($_POST["login"])){ $login = $_POST["login"]; }
			if(isset($_POST["password"])){ $password = md5($_POST["password"]); }

			if(isset($_POST['login']) && isset($_POST['password'])){

				$text_sql="SELECT count(*) FROM `user` WHERE `login` = '".$login."' AND `password` = '".$password."';";
    			$sql = mysql_query($text_sql) or die(mysql_error());
    			$row = mysql_fetch_assoc($sql);

			    if($row['count(*)']>0){
        			$text_sql="SELECT * FROM `user` WHERE `login` = '".$login."';";
        			$sql = mysql_query($text_sql) or die(mysql_error());
        			$row = mysql_fetch_assoc($sql);
        			if ($row){
        	       		$fio=$row['fio'];
                    	$user_id = $row['user_id'];
                    	session_start();
						$_SESSION['user_id'] = $user_id;
        				$_SESSION['fio'] = $fio;
        				echo 'Поздравляем, '.$_SESSION['fio'].', Вы авторизованы';
    					header('Location: http://'.$_SERVER['HTTP_HOST'].'/my_bootstrap/index_auth.php');
    					exit;
    				exit;
        			}
        			else
        			{
        				echo '<div style="color:red;font-weight:bold;">Ошибка авторизации!</div>';
        			}
		    }
    		else
    		{
        		echo '<div style="color:red;font-weight:bold;">Вход в систему с указанными данными невозможен!</div>';
    		}
		}
			if (!isset($_SESSION['user_id'])) {
			?>
    			<form id="f_auth" method="POST">
        			<input type="text" placeholder="Логин" name="login" required/>
        			<input type="text" placeholder="Пароль" name="password" required/>
        			<input type="submit" value="АВТОРИЗАЦИЯ" id="btna"/>
    			</form>
			<? 
			//exit;
			}
			?>
			<div class="response" id="auth_form"></div>
		</div>
	</div>
</div>
<?php 
	require_once('footer.php');
?>