<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Customer.css">
    <script src="index.js"></script>
    <title>Bank|TSF</title>
    
</head>

<body>
<nav class="navbar">
        <a href="index.html" class="logo" id="logoid">Bank Of TSF</a>
        <div class="navbaritems" id="navbaritemsid">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Customers.php">Customers</a></li>
                <li><a href="Transaction.php">Transaction</a></li>
                <li><a href="TranHistory.php">Transaction History</a></li>
                <button class="navbarbtn">Contact us</button>
            </ul>
            <button class="dropDown" id="dropDownB" onclick="openDrop()">
                <i class="gg-menu"></i>
            </button>
        </div>
    </nav>

    <!-- <div class="bodyimage">
    </div> -->

    <div class="table">
    <table>
    <tr>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Balance</th>
    </tr>

    <?php
    $con = mysqli_connect("localhost:3307","kaizayen","123","wiz");
    if($con->connect_error){
      die("connection failed:".$con->connect_error);
    }
    $sql = "select name,contact,email,balance from Allcustomer";
    $result = $con->query($sql);
    if($result-> num_rows>0){
	    while($row= $result->fetch_assoc()){
	    echo "<tr><td>".$row["name"]."</td><td>".$row["contact"]."</td><td>".$row["email"]."</td><td>".$row["balance"]."</td></tr>";
        }
        // echo "</table>";
    }
    else{
        echo "0";
    }

    $con-> close();
    
    ?>
    </table>
    </div>


    <footer>
        
    </footer>
</body>

</html>