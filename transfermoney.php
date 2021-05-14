<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">


    <style type="text/css">

        }
        .btn:hover{
            background-color:#2aa389;
            color: white;
        }
        h2{
            text-transform:uppercase;
            margin-top:12rem;
            letter-spacing:1px;
            font-size: 3rem;
            color: #333;
        }
        .transact{
            text-align:center;
        }
        tr:nth-child(odd){
            background-color:gray;
        }
        tr:nth-child(even){
            background-color:#2aa389;
        }
        .text{
            position: absolute;
            left:50%;
            transform:translateX(-50%);
            bottom:zero;
        }

    
    </style>
</head>

<body style="background-color : #fff;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php 
    include 'navbar.php'
?>


<div class="container">
        <h2>Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border:1px solid #333; font-size: 1.6rem;">
                
                            <tr style="background-color: #333; color: #fff;">
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black; font-size: 1.5rem; ">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="transact"><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="font-size: 1.5rem; border: 1px solid #2aa389;">Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>

    <footer id="footer">
        <div class="footer-content">

            <p>Main Branch Address : Krishna Complex, Shop No.99,45,678.  Gandhi Nagar,  Maharashtra. <br><br> &#169 Copyright 2021 @THE SPARKS FOUNDATION BANK.</p>
            
        </div>
    </footer>
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>