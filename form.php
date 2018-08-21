<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form.php</title>
</head>
<body>
	<h1>POST 방식 폼 전송</h1>
	<h2>보안이 이루어진 통신(노출되지 않음)</h2>
	<form action="form.php" method="post" name="post"> 
		<label for="myid">ID</label>
		<input type="text" id="myid" name="myid" placeholder="아이디">
		<br>
		<label for="pwd">PASSWORD</label>
		<input type="password" id="pwd" name="pwd" placeholder="비밀번호"><br>
		
		<!-- 전송 -->
		<input type="submit">
	</form>
		
	<?php

		$myid = $_POST['myid'];
		echo $myid;

		$pwd = $_POST['pwd'];
		echo $pwd;

		// 결과 메시지 "당신의 아이디는 **이고 비밀번호는 **입니다"

	?>	
	
</body>
</html>