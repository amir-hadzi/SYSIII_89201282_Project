<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Rezultati pretrage</title>
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
<br><br><br><br>
<h1 class="text-center">Rezultati </h1>
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                           <table class="form-group required" style="color:white; background-color:#333; width:100% border: 1px solid;">
            <tr>
                 <td>Vstopna postaja</td><td>Izstopna postaja</td><td>Čas odhoda</td><td>Čas prihoda</td><td>Cena</td><td>Rezerviraj</td>
            </tr>
        <?php //to extract the fav from the database and appear them in the table
            $db = mysqli_connect('', 'codeigniter', 'codeigniter2019', '89201282');
			session_start();
            $sql = "SELECT * FROM Route WHERE Source = '" .$_SESSION['source']. "' AND Dest ='" .$_SESSION['dest']. "' AND Date = '" .$_SESSION['date']. "'";
            $result = $db->query($sql);
            //check if there are data in the database
            $i=1;
            if($num = mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tr>
                        <td>".$row['Source']." </td> <td> ".$row['Dest']."</td><td> ".$row['Cost']."</td><td> ".$row['DepTime']."</td><td> ".$row['ArrTime']."</td><td><form method='post'> <button class='btn btn-primary btn-block' type='submit' name='button1' value='".$row['RouteID']."'>Rezerviraj</button></form></td> 
                        
                    </tr>
                    ";
                } 
            }else{
                echo "
                    <tr>
                        <td colspan = '4'>Ni poti za dane parametre</td>
                    </tr>
                ";
            }            
            if (isset($_POST['button1'])) 
	{
	session_start();
	$sql = "SELECT * FROM Route WHERE RouteID = '".$_POST["button1"]."'";
            $result = $db->query($sql);
            //check if there are data in the database
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['rid'] = $row['RouteID'];
					$_SESSION['vid'] = $row['VehicleID'];
                    $_SESSION['art'] = $row['ArrTime'];
					$_SESSION['dpt'] = $row['DepTime'];
					$_SESSION['cst'] = $row['Cost'];
					header('location: LoginS');
                } 
			
			$db->close();
	}
        ?>
                         </table>
                    
					<button class='btn btn-primary btn-block' type='submit' value='Back' onclick="window.location.href = './indexS';">Potraga</button>
                        </div>
                    </div>
                </div>

<footer>
	<p class = "foot">kontakt: E-pošta: xxxx@gmail.com; Številka: xxxxxxxxxx</p>
	</footer>
   
</body>
</html>
