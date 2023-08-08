<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>

<!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script> -->
	<!-- <script src="js/script.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>

    
</head>
<style>
.login-container{
   
    width: 20%;
    margin-inline: auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding:50px;
    margin-top:100px;
    background:#bbb;
border-radius:8px;
}
input{
    padding:12px;
    border-radius:8px;
    border:1px solid #bbb;
    font-size:20px;
}
#login{
    background:#007ec9;
    padding: 15px;
    display: flex;
    justify-content: c;
    text-align: center;
    align-items: center;
    justify-content: center;
    border-radius:8px;
    color: white;
    font-size: 20px;
}
</style>



<body>
   
    <div id="form" class="login-container">       
    <input type="number" id="username" placeholder="user Id">
    <input type="password" id="password" placeholder="password">
    <div id="login" >Login </div>
    </div>
</body>
<script>
    $(document).ready(function() {
       

        $('body').on('click','#login', function(e){
            var userName = $("#username").val();
        var password = $("#password").val();

         
            $.ajax({
						type: "POST",
						url: "login.php",
						data: {
							username:userName,
							password:password
						},
						success: function(html) { 
							
                            document.getElementById("username").value = '';
                            document.getElementById("password").value = '';
							if(html == "success"){
								window.location.replace("dashboard.php");
                               
							}else{
                                Swal.fire('Invalid username or password combination',);
                              
							}
							
						}
						});

        })

    })


</script>
</html>

