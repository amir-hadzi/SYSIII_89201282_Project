<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Credit Card Checkout</title>
<style>
body {
  background: #307B75;
}

h1 {
  color: #fff;
  text-align: center;
}

form {
  width: 350px;
  margin: 0 auto;
}
form .half input {
  width: 165px;
  float: left;
}
form .half input:first-child {
  margin-right: 20px;
}
form input, form button {
  box-sizing: border-box;
  display: block;
  float: left;
  width: 100%;
  padding: 20px;
  font-size: 1.3em;
  margin-bottom: 20px;
  outline: none;
  border: none;
}
form input {
  color: #1C1D21;
}
form button {
  color: #1C1D21;
  background: #EEEFF7;
  font-weight: bold;
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
  <li><a href="./paymentS">Slovene/Slovenščina</a></li>

</ul>
<br><br>
<div class="checkout">
  <h1>
    Checkout
  </h1>
  <form method="post">
    <input placeholder="Card number" type="text" required /><input placeholder="Name on card" type="text" required />
    <div class="half">
      <input placeholder="MM/YY" type="text" required /><input placeholder="CVC" type="text" required />
    </div>
    <button type="submit" name="button1">Pay Now</button>
  </form>
</div>
  <footer>
	<p class = "foot">Contact: Email: xxxx@gmail.com; Phone: xxxxxxxxxx</p>
	</footer>
<?php
if (isset($_POST['button1'])) {
	$db = mysqli_connect('', 'codeigniter', 'codeigniter2019', '89201282');
	session_start();
	$stmt = $db->prepare("INSERT INTO Ticket (BusID, RouteID, Name, Source, Dest, Date, DepTime, ArrTime, Cost) VALUES (?, ?, ?,?,?,?,?,?,?)");
				$stmt->bind_param("sssssssss", $_SESSION['vid'], $_SESSION['rid'], $_SESSION['ime'], $_SESSION['source'], $_SESSION['dest'], $_SESSION['date'],  $_SESSION['dpt'], $_SESSION['art'], $_SESSION['cst']);
				$stmt->execute();
				$stmt->close();
				
				
				$sql = "SELECT TicketID FROM Ticket WHERE BusID ='" .$_SESSION['vid']. "' AND RouteID = '" .$_SESSION['rid']. "' AND Name = '" .$_SESSION['ime']. "' ";
				$result = $db->query($sql);
           
				$smp = $db->prepare("INSERT INTO Payment (UserID, TicketID) VALUES (?, ?)");
				$smp->bind_param("ss", $_SESSION['uid'], $row['TicketID']);
				$smp->execute();
				$smp->close();
			
					header('location: invoiceS');
}
?>
</body>
</html>
