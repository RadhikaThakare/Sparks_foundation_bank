<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <style type="text/css">
        body{
            background-image:url('./trans.jpg');
            background-size:cover;
            /* opacity: 0.9; */
        }
        
        button:nth-child(even){
            background-color: yellow;
            transition: 1.5s;
            color: white;
        }
        .btn:hover{
            background-color:black;
            color: white;
        }
        h2{
            text-transform:uppercase;
            margin-top:2rem;
            letter-spacing:1px;
            color: white;

        }
        h2:hover{
           cursor: pointer;

        }
        .transact{
            text-align:center;
        }
        tr:nth-child(odd){
            background-color:#b3ccff;
        }
        tr:nth-child(even){
            background-color:#80aaff;
        }
        .text{
            position: absolute;
            left:50%;
            color: black;
            transform:translateX(-50%);
            bottom:zero;
        }
    </style>
</head>

<body style="background-color : #f2e6ff;">
<?php
    include 'config.php';
    $sql = "SELECT * FROM `users`    ";
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
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border:1px solid black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="transact"><a href="selectuserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">PayTo</button></a></td> 
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
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>