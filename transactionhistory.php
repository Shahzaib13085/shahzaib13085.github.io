<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<style type="text/css">
	 
	 footer {
 position: relative;
	bottom: 0;
	height: 10%;
	opacity: 100%;
}
.footer_distributed {
	background-color:black;
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
	color: white;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}
.footer_distributed .footer_center {
	width: 30%;
	text-align: left;

}
.footer_distributed .footer_center i {
	background-color:black;
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
	color: white;
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
	background-color:black;
	border-radius: 2px;
	font-size: 20px;
	color: white;
	text-align: center;
	line-height: 35px;
	margin-right: 3px;
	margin-bottom: 5px;
}
      
		.navbar{
        
         padding-top: 10px;
         padding-bottom: 10px;
         text-align: center;
         box-shadow: 10px 10px 10px rgb(255, 255, 255);
        }

        nav .navbar-nav .active a{
            
        }

        nav .navbar-nav .active{
            
        }
        nav .navbar-brand{
            font-size: 35px;
            font-weight: 900;
            letter-spacing: 5px;
            margin-right: 80px;
            text-shadow: 3px 3px black;
            padding: 0 0rem 0 1rem;
            color: rgb(43, 139, 118);
         
        }

        nav .parent-link{
            font-size: 20px;
            position: relative;
            font-weight: 900;
            color:white;
            letter-spacing: 4px;
            font: normal 500;
            font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif' cursive;
            text-transform: uppercase;
            margin-left: 35px;
            margin-right: 35px;
            text-align: center;
        }

        nav .parent-link:hover{
            font-size: 20px;
            font-weight: 700;
            
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
            background-color:black;
        }

        #home h1{
            font-size: 50px;
            font-weight: 900;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 10px;
         
        }

        #home p{
            color: rgb(29, 187, 235);
            text-align: center;
            font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif' cursive;
            padding-top: 30px;
            font-size: 25px;
        }
        #home .col-xl-6 img{
            height: 50%;
        }
        #home{
            height: 50%;
        }
        
	 </style>
 </head>

 <body style="background-color : rgb(234, 243,250 );">

 <nav class="navbar navbar-expand-lg" style="background-color: black">
        <a class="navbar-brand" href="#"><img class="logo" ></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: black;"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
				
                  <a class="nav-link parent-link" href="http://localhost/mywebsite/index.html">Home</a>
              </li>
              <li class="nav-item">
				  <a class="nav-link parent-link" href="http://localhost/mywebsite/index.php">Customers</a>
                 
              </li>
              <li class="nav-item">
				  <a class="nav-link parent-link" href="http://localhost/mywebsite/transfermoney.php">Transfer Money</a>
                
              </li>
              <li class="nav-item">
				  <a class="nav-link parent-link" href="http://localhost/mywebsite/transactionhistory.php">Transaction History</a> 
                 
              </li>
            </ul>

        </div>
    </nav>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif' cursive;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm" style="background-color: #E0E0E0">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'data.php';
           
            
            $sql ="select * from transfers ";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query)){
            
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
           
                
        <?php
          } 
        

        ?>
        </tbody>
    </table>

    </div>
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 <footer class="footer_distributed">
        <div class="footer_left">
            
            <p class="footer_company_name">Maverick Banking System &copy;Copyright July 2021 </p>
            <p class="footer_company_name">
            Developed & Designed By: Shahzaib Ahmed</p>
            <p class="footer_company_name">
             #GRIPJULY2021 TASK #1</p>
        </div>
        <div class="footer_center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Karachi,Pakistan</span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p><span>+123456789-10</span> </p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">contact@maverickbankingsystem.com</a></p>
            </div>
            </div>
            <div class="footer_right">
                <p class="footer_company_about">
                 <span>About Us</span>
                 Transfer With The Quality And Quantity.
    
                </p>
                <div class="footer_icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
    
                </div>
            </div>
    
        
    
    </footer>
    </body>
</html>