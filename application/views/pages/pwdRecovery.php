<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Password recovery</title>
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
  <li><a href="./pwdRecoveryS">Slovene/Slovenščina</a></li>


</ul>
<div class="pt-5">
<br><br>
<h1 class="text-center">If you entered correct email, we have sent you recovery key</h1>
 <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                                                    
                          
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit" onclick="window.location.href = './index';">Home</button>
								</div>
                </div>
            </div>
</div>
<footer>
	<p class = "foot">Contact: Email: xxxx@gmail.com; Phone: xxxxxxxxxx</p>
	</footer>
  
</body>
</html>
