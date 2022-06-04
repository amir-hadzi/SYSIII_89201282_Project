<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'>
<style>
body{
  background: #307B75 ;
  font-family: 'Muli', sans-serif;
  
}
h1{
  color: #fff;
  padding-bottom: 2rem;
  font-weight: bold;
}
a{
  color: #333;
}
a:hover{
  color: #E8D426;
  text-decoration: none;
}
.form-control:focus {

    color: #000;
    background-color: #fff;
    border:2px solid #E8D426;
    outline: 0;
    box-shadow: none;

}

.btn{
  background: #E8D426;
  border: #E8D426;
}
.btn:hover {
  background: #E8D426;
  border: #E8D426;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #04AA6D;
}
li {
  border-right: 1px solid #bbb;
}

li:last-child {
  border-right: none;
}
ul {
  position: fixed;
  top: 0;
  width: 100%;
}
footer {
  text-align: center;
  padding: 3px;
  background-color: #333;
  position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
}
.foot{
	color: white;
}
</style>

</head>
<body>
<ul>
  <li><a href="./index">Home</a></li>
  <li><a href="./SignUpES">Slovene/Slovenščina</a></li>
 
</ul>
<div class="pt-5">
<h1 class="text-center">Email you provided is already registered</h1>
<div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                                                    
                            <form id="submitForm"  method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
								<div class="form-group required">
                                    <lSabel for="username">Name and Lastname</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required name="ip" value="">                              
							  <div class="form-group required">
                                    <lSabel for="username">Email</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required name="ep" value="">
                                </div>                    
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password </label>
                                    <input type="password" class="form-control" required id="password" name="pwd" value="">
                                </div>
                               
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit" name="button1">Sign Up</button>
                                </div>
								
                            </form>

                        </div>
                    </div>
                </div>
            </div>
</div>
<?php
	if (isset($_POST['button1'])) {
	$db = mysqli_connect('', 'codeigniter', 'codeigniter2019', '89201282');
	session_start();
	$_SESSION['ime'] = $_POST['ip'];
	$_SESSION['ep'] = $_POST['ep'];
	$_SESSION['pwd'] = $_POST['pwd'];
	  
	  $sql = "SELECT * FROM User WHERE Email ='" .$_SESSION['ep']. "'";
            $result = $db->query($sql);
            if($num = mysqli_num_rows($result)>0){
				header('location: SignUpE');
			}
			else
			{
				$stmt = $db->prepare("INSERT INTO User (Email, Pwd, name) VALUES (?, ?, ?)");
				$stmt->bind_param("sss", $_SESSION['ep'], $_SESSION['pwd'], $_SESSION['ime']);
				$stmt->execute();
				$stmt->close();
				$db->close();
				header('location: reg');
			}
	}
	?>
<footer>
	<p class = "foot">Contact: Email: xxxx@gmail.com; Phone: xxxxxxxxxx</p>
	</footer>
  
</body>
</html>
