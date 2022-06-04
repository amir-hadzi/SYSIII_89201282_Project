<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Račun</title>
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
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table {
  table-layout: fixed ;
  text-align: center;
  width: 100% ;
  padding: 10px ;
}
 td {
  width: 50% ;
  border: 1px black solid ;
  padding: 10px ;
}

</style>

</head>
<body>
<ul>
  <li><a href="./indexS">Začetna stran</a></li>
   <li><a href="./rez">English/Angleščina</a></li>
</ul>
<br>
<div class="pt-5">
<h1 class="text-center">Uspešno ste rezervirali</h1>
<div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                           <table class="form-group required" style="color:white; background-color:#333; width:100% border: 1px solid;">
        <?php //to extract the fav from the database and appear them in the table
            $db = mysqli_connect('', 'codeigniter', 'codeigniter2019', '89201282');
			session_start();
                    echo "
                    <tr>
						<td>Bus ID</td>
                        <td>".$_SESSION['vid']." </td> 
                    </tr>
					<tr>
						<td>Route ID</td>
                        <td>".$_SESSION['rid']." </td> 
                    </tr>
					<tr>
						<td>Ime in Primek</td>
                        <td>".$_SESSION['ime']." </td> 
                    </tr>
					<tr>
						<td>Vstopna postaja</td>
                        <td>".$_SESSION['source']." </td> 
                    </tr>
					<tr>
						<td>Izstopna postaja</td>
                        <td>".$_SESSION['dest']." </td> 
                    </tr>
					<tr>
						<td>Datum</td>
                        <td>".$_SESSION['date']." </td> 
                    </tr>
					<tr>
						<td>Čas odhoda</td>
                        <td>".$_SESSION['dpt']." </td> 
                    </tr>
					<tr>
						<td>Čas prihoda</td>
                        <td>".$_SESSION['art']." </td> 
                    </tr>
					<tr>
						<td>Cena</td>
                        <td>".$_SESSION['cst']." </td> 
                    </tr>
                    ";
			$db->close();
	
        ?>
                         </table>
                    
					<button class='btn btn-primary btn-block' type='submit' value='Back' onclick="window.location.href = './indexS';">Začetna stran</button>
					<br>
					
                        </div>
                    </div>
                </div>
            </div>
</div>
<footer>
	<p class = "foot">kontakt: E-pošta: xxxx@gmail.com; Številka: xxxxxxxxxx</p>
	</footer>
</body>
</html>
