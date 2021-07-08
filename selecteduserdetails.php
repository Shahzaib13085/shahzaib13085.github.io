<?php
include 'data.php';

if (isset($_POST['submit'])) {
    $form = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $selectQueryFrom = "SELECT * from customers where id=$form";
    $query = mysqli_query($conn, $selectQueryFrom);
    $result1 = mysqli_fetch_array($query);

    $selectQueryTo = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn, $selectQueryTo);
    $result2 = mysqli_fetch_array($query);

    // Checking if the amount is negative
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check insufficient balance.
    else if ($amount > $result1['curr_balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $newbalance = $result1['curr_balance'] - $amount;
        $updateSenderQuery = "UPDATE customers set curr_balance=$newbalance where id=$form";
        mysqli_query($conn, $updateSenderQuery);

        $newbalance = $result2['curr_balance'] + $amount; 
        $updateReceiverQuery = "UPDATE customers set curr_balance=$newbalance where id=$to";
        mysqli_query($conn, $updateReceiverQuery);

        // Insert in transaction history table
        $sender = $result1['name'];
        $receiver = $result2['name'];
        $insertQuery = "INSERT INTO `transfers`(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $insertQuery);

        if ($query) {

            echo '<script>';
            echo 'alert("Payment successfull");window.location="transactionhistory.php";';

            echo '</script>';
        } else {

            echo '<script>';
            echo 'alert("Something went wrong")';
            echo '</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="info.css">
    <!-- Sweet alert -->
	<style type="text/css">
    .navbar{
        
         padding-top: 10px;
         padding-bottom: 10px;
         text-align: center;
         box-shadow: 10px 10px 10px rgb(169, 179, 241);
        }

        nav .navbar-nav .active a{
            color: rgb(52, 27, 196);
        }

        nav .navbar-nav .active{
            color: rgb(52, 27, 196);
        }
        nav .navbar-brand{
            font-size: 35px;
            font-weight: 900;
            letter-spacing: 5px;
            margin-right: 80px;
            text-shadow: 3px 3px lightgreen;
            padding: 0 0rem 0 1rem;
            color: rgb(43, 139, 118);
            text-shadow: 2px 2px rgb(43, 70, 139);
        }

        nav .parent-link{
            font-size: 20px;
            position: relative;
            font-weight: 900;
            color: rgb(54, 101, 211);
            letter-spacing: 4px;
            font: normal 500;
            font-family: 'Amatic SC',cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
        }

        nav .parent-link:hover{
            font-size: 20px;
            font-weight: 700;
            color: rgb(153, 44, 216);
            letter-spacing: 4px;
            font: normal 500;
            text-transform: uppercase;
            padding-left: 1.7rem;
            padding-right: 1.7rem;
        }

        nav .navbar-toggler i{
            color: black;
        }

        nav .navbar-brand img{
          height: 40%;
          width: 50%;
          text-align: left;
          border-radius: 50%;
          background: radial-gradient(transparent 20%, rgb(234, 243,250) 70%);
        }

        body{
            background-color: rgb(234, 243,250 );
        }

        #home h1{
            font-size: 50px;
            font-weight: 900;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 10px;
            color: rgb(37, 37, 214);
        }

        #home p{
            color: rgb(29, 187, 235);
            text-align: center;
            font-family: 'Amatic SC',cursive;
            padding-top: 30px;
            font-size: 25px;
        }
        #home .col-xl-6 img{
            height: 50%;
        }
        #home{
            height: 50%;
        }
        
      

      
footer {
 position: relative;
	bottom: 0;
	height: 10%;
	opacity: 70%;
}
.footer_distributed {
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0,0,0,0.5);
	box-sizing: border-box;
	width: 100%;
	text-align: center;
	padding: 55px 50px;
	margin-top: 200px;
}
.footer_distributed .footer_left,.footer_center,.footer_right {
	display: inline-block;
	vertical-align: top;

}
.footer_distributed .footer_left {
	width: 40%;
    text-align: left;
    top: -20%;

}
.footer_distributed h3 {
	color: #ffffff;
	font: normal 36px 'Cookie', cursive;
    margin: 0;


}
.footer_distributed h3 ,span {
 color: #5383d3;


}
.footer_distributed .footer_links {
	color: white;
	margin: 0px 0 5px;
	padding: 0;
}
.footer_distributed .footer_links a {
	display: inline-block;
	line-height: 1.8;
	text-decoration: none;
	color: inherit;
}
.footer_distributed .footer_company_name {
	color: #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}
.footer_distributed .footer_center {
	width: 30%;
	text-align: left;

}
.footer_distributed .footer_center i {
	background-color: #33383b;
	color: white;
	font-size: 35px;
	width: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	vertical-align: middle;
	height: 38px;
	margin: 10px 15px;

}
.footer_distributed .footer_center i .fa-envelope {
 font-size: 9px;
 line-height: 38px;	
}
.footer_distributed .footer_center p {
	display: inline-block;
	color: white;
	vertical-align: middle;
	margin: 0;

}
.footer_distributed .footer_center p span {
	display: block;
	font-weight: normal;
	font-size: 14px;
	line-height: 2px;
}
.footer_distributed .footer_center p a {
 color: #5383d3;
 text-decoration: none;
}
.footer_distributed .footer_right {
	width: 20%;
	float: right;
}
.footer_distributed .footer_company_about {
	line-height: 20px;
	color: #92999f;
	font-size: 13px;
	text-align: left;
	font-weight: normal;
	margin: 0;
}
.footer_distributed .footer_company_about span {
	color: white;
	display: block;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}
.footer_distributed .footer_icons {
	margin-top: 25px;

}
.footer_distributed .footer_icons a {
	display: inline-block;
	width: 30px;
	height: 30px;
	cursor: pointer;
	background-color: #33383b;
	border-radius: 2px;
	font-size: 20px;
	color: white;
	text-align: center;
	line-height: 35px;
	margin-right: 3px;
	margin-bottom: 5px;
}
</style>
</head>

<body style="background-color: rgb(234, 243,250 );">
    
    <form action="" method="post">

        <div class="sender-info">
            <?php
            include 'data.php';
            $senderId = $_GET['id'];
            $selectSenderQuery = "SELECT * FROM  customers where id=$senderId";
            $result = mysqli_query($conn, $selectSenderQuery);
            $rows = mysqli_fetch_assoc($result);

            ?>
            <div class="user-info">
                <h1 class="heading-user" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif' cursive;">Sender Information</h1>
                
                <div class="info">
                    <div>
                        <p>Name</p>
                    </div>
                    <div>
                        <p><?php echo $rows['name'] ?></p>
                    </div>
                </div>
                <div class="info">
                    <div>
                        <p>Email</p>
                    </div>
                    <div>
                        <p><?php echo $rows['email'] ?></p>
                    </div>
                </div>
                <div class="info">
                    <div>
                        <p>Amount</p>
                    </div>
                    <div>
                        <p><?php echo $rows['curr_balance'] ?></p>
                    </div>
                </div>


            </div>
        </div>
        <div class="receiver-info">
            <?php
            $selectRemainingUser = "SELECT * FROM customers where id!=$senderId";
            $result = mysqli_query($conn, $selectRemainingUser);
            ?>
            <div class="receiver">

                <h1 class="trans-heading" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'cursive;">Transfer To</h1>
                <div class="selectInput-section">
                    <select name="to" class="select-sender" required>
                        <option value="" disabled selected>---     Choose    ---</option>
                        <?php
                        while ($rows = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $rows['id'] ?>">
                                <?php echo $rows['name']; ?> (Balance:
                                <?php echo $rows['curr_balance']; ?> )
                            </option>
                        <?php
                        }

                        ?>
                    </select>

                </div>

            </div>
            <div class="amount">
                <h1 class="trans-heading" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'cursive;">Amount</h1>
                <div class="amountInput-section">
                    <input type="number" name="amount" id="" required>
                </div>
            </div>
            <div class="submit">
                <input class="submit-btn" type="submit" value="Transfer" name="submit" style="font-family: 'Amatic SC',cursive;">
            </div>
        </div>
    </form>





</body>

</html>