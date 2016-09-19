<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Блог- Регистрация</title>
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
				<li><a href="authoriz.php">Авторизация</a></li>	
				<li class="active"><a href="registrat.php">Регистрация</a></li>
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
			<h2>Регистрация</h2>
		</div>
		<div class="contact-details">
		<?php
			if(isset($_POST["login"])){ $login = $_POST["login"]; }
			if(isset($_POST["password"])){ $password = md5($_POST["password"]); }
			if(isset($_POST["fio"])){ $fio = $_POST["fio"]; }
			if(isset($_POST["email"])){ $email = $_POST["email"]; }
			if(isset($_POST["phone"])){ $phone = $_POST["phone"]; }
			if(isset($_POST["country"])){ $country = $_POST["country"]; }

			if(isset($_POST['login']) && isset($_POST['password'])){

    		$text_sql="SELECT count(*) FROM `user` WHERE `login` = '".$login."' AND `password` = '".$password."';";
   			$sql = mysql_query($text_sql) or die(mysql_error());
   			$row = mysql_fetch_assoc($sql);

    		if($row['count(*)']>0){
        		echo '<div style="color:blue;font-weight:bold;">Вы уже зарегистрированы. Пройдите авторизацию</div>';
    		}
    		else
    		{
        		$in_bd="INSERT INTO `user`(`fio`, `login`, `password`, `email`, `phone`, `country`) VALUES ('".$fio."','".$login."','".$password."','".$email."','".$phone."','".$country."')";
        		$sql = mysql_query($in_bd) or die(mysql_error());
        		echo '<div style="color:blue;font-weight:bold;">Регистрация прошла успешно! Пройдите авторизацию</div>';
    		}
		}
		?>
    		<form id="f_reg" method="POST">
    			<input type="text" placeholder="ФИО" name="fio" required/>
        		<input type="text" placeholder="Логин" name="login" required/>
        		<input type="text" placeholder="Пароль" name="password" required/>
        		<input type="text" placeholder="Email" name="email" required/>
	        	<input type="text" placeholder="Телефон" name="phone" />

				<div class="ui-widget">
  					<!--<label for="country">Страна: </label>-->
  					<input id="country" type="text" placeholder="Страна" name="country" />
				</div>
 
 	       		<input type="submit" value="РЕГИСТРАЦИЯ" id="btnr"/>
    		</form>
			<div class="response" id="result_form"></div>
		</div>
	</div>
</div>

<?php 
	require_once('footer.php');
?>
