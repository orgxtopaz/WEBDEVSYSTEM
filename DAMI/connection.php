

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
</head>
<body>
    
</body>
</html>

<?php


session_start();

$servername = "remotemysql.com";//server name
$username = "zlTTPwailO";//default username
$password = "BUkhRiFNyW";//deafult password
$dbname = "zlTTPwailO";//database name

$conn = new mysqli($servername, $username, $password, $dbname);

//SIGN IN USER

if (isset($_POST['signup'])) {
    
    // get variables from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashed_password = sha1($password);
 


    $select = mysqli_query($conn,  "SELECT * FROM users WHERE username= '$username' || email ='$email'")or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
        
            $Emailexist ="
            <!DOCTYPE html>
            <html lang='en'>
            <head>
            <title>Bootstrap Example</title>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
            </head>
            <body>
            <div class='container'>



            <!-- Modal -->
            <div class='modal fade' id='WrongemailModal' role='dialog'>
            <div class='modal-dialog modal-sm'>
            <div class='modal-content'>
            <div class='modal-header'>
            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title'>Username or Email Already in used! </h4>
            </div>
            <div class='modal-body'>
            <p>Try another email or username!</p>
            </div>
            <div class='modal-footer'>
            <form action ='index.php'>
            <button type='submit' class='btn btn-default wrong'>Close</button>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>

            </body>
            </html>

            <script>
            $('#WrongemailModal').modal('show');

            // $('.wrong').on('click',function()({
            //     alert('rwrw');
            // })

            </script>




            ";
            echo $Emailexist;

             
        }   
    else{

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
         
            
            // $result= "  <script>   
         
      
         
           echo"    <!DOCTYPE html>
           <html lang='en'>
           <head>
           <title>Bootstrap Example</title>
           <meta charset='utf-8'>
           <meta name='viewport' content='width=device-width, initial-scale=1'>
           <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
           <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
           <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
           </head>
           <body>

           <div class='container'>
       
           

           <!-- Modal -->
           <div class='modal fade' id='WrongemailModal' role='dialog'>
               <div class='modal-dialog modal-sm'>
               <div class='modal-content'>
                   <div class='modal-header'>
                
                   <h4 class='modal-title'>Email is Invalid </h4>
                   </div>
                   <div class='modal-body'>
                   <p>Try this format ex.zigm@gmail.com</p>
                   </div>
                   <div class='modal-footer'>
                   <form action ='index.php'>
                   <button type='submit' class='btn btn-default wrong'>Try Again</button>
                   </form>
                   </div>
               </div>
               </div>
           </div>
           </div>

           </body>
           </html>

           <script>
           $('#WrongemailModal').modal('show');
           
           // $('.wrong').on('click',function()({
           //     alert('rwrw');
           // })

           </script> ";


           
           
    
    
  
          
   
       }
        //CHECKING FOR THE EMAIL VALIDATON..
        else{

            $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hashed_password ')";

        // execute the query

        $result = $conn->query($sql);


        if ($result == TRUE) {
        header('Location: userpage.php');





        }else{
        echo "Error:'. $sql . '<br>". $conn->error;
        }

        $conn->close();
            
        }



    }    


   
  

}



// LOG IN 

if (isset($_POST['login'])) {
    
    $loginusername=$_POST['loginusername'];
    $loginpassword=$_POST['loginpassword'];
    $loginhashed_password =sha1($loginpassword);
    echo $loginhashed_password;

    $query = "SELECT * FROM users WHERE username= '$loginusername' && password ='$loginhashed_password' ";
    $data =  mysqli_query($conn, $query);
    $total =  mysqli_num_rows($data);
    
 
    $row=mysqli_fetch_array($data);
    $_SESSION['username']=$row['username']; 


   if($total == 1){
           
       header('Location: userpage.php');
       $_SESSION['username'] = $loginusername;
      

    //   }
          
   }
   else{
       
    header("location:index.php");
   
    
    //    echo "<script type>document.getElementById('wrong').modal('show');</script>";

   }

   if(isset($_SESSION['username'])){
    
    header("location:userpage.php");
    
}else{
header("location:index.php");
}

}



/// END LOG IN
   






// ADD USER

if (isset($_POST['adduser'])) {
    
    // get variables from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $hashed_password = sha1($password);
 


    $select = mysqli_query($conn, "SELECT `email` FROM `users` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
    if(mysqli_num_rows($select)) {
        
           
       

            echo "<script> alert('Email Already Exist!'); setTimeout(
                function(){
                    window.location = 'adminpage.php' 
                },
            100);</script>";
   

             
        }   
    else{

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            
            echo "<script> alert('Input Valid Email!'); setTimeout(
                function(){
                    window.location = 'adminpage.php' 
                },
            100);</script>";
                        
    
    
  
          
   
       }
        //CHECKING FOR THE EMAIL VALIDATON..
        else{

            $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hashed_password ')";

        // execute the query

        $result = $conn->query($sql);


        if ($result == TRUE) {
        header('Location: seeusers.php');


        }else{
        echo "Error:'. $sql . '<br>". $conn->error;
        }

        $conn->close();
            
        }




    }    


   
  

}


// END ADD USER





// ADD PRODUCT



if (isset($_POST['addproduct'])) {
    
    // get variables from the form
   
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];
   

            $sql = "INSERT INTO `products`(`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `stocks`) VALUES ('$photo ','$name ','$brand ','$description ','$price','$stocks')";

        // execute the query

        $result = $conn->query($sql);


        if ($result == TRUE) {
        header('Location: products.php');


        }else{
        echo "Error:'. $sql . '<br>". $conn->error;
        }

        $conn->close();
            
       

    }    

// END ADD PRODUCT






// UPDATE PRODUCT


if (isset($_GET['editproduct'])){
    $productId = $_GET['editproduct'];
  
   
    $result = $conn->query("SELECT * FROM products WHERE productId=$productId")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();
        $photo = $row['productPhoto'];
        $name = $row['productName'];
        $brand = $row['productBrand'];
        $description = $row['productDescription'];
        $price = $row['productPrice'];
        $stocks = $row['stocks'];
        $productId= $row['productId'];



        echo "
        
        
        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <title>Bootstrap Example</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
        </head>
        <body>
        <div class='container-fluid'>


        <br><br>
        <div class='modal fade' id='updateproduct' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Update Product</h5>
                       
                    </div>
                    <div class='modal-body'>
                        <form action='connection.php' method='POST'>

                        <div class='mb-3'>
                                    <label for='inputName ' class='form-label'>productPhoto</label>
                                    <input type='text'  placeholder='Photo'name='photo' required class='form-control' id='inputName' value='$photo'>
                                    <input type='hidden'  placeholder='Photo'name='productId' required class='form-control' id='inputName' value='$productId'>
                         

                            <div class='mb-3'>
                                <label for='InputPhoto' class='form-label'>productName</label>
                                <input type='text' name='name' class='form-control' required id='inputPhoto' placeholder='Name' value='$name'>
                               </div>

                              

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productBrand</label>
                                    <input type='text' placeholder='Brand' name='brand'  class='form-control' id='inputType' value='$brand' required>
                                </div>

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productDescription</label>
                                    <input type='text' placeholder='Description' name='description'  class='form-control' id='inputType' value='$description' required>
                                </div>

                                
                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productPrice</label>
                                    <input type='text' placeholder='Price' name='price'  class='form-control' id='inputType' value='$price' required>
                                </div>

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>stocks</label>
                                    <input type='text' placeholder='Stocks' name='stocks'  class='form-control' id='inputType' value='$stocks' required>
                                </div>


                                <button type='submit' name='updateproduct' class='btn btn-primary'>Submit</button>
                            </div>
                          
                        </form>
                    </div>
                    <div class='modal-footer'>
                       

                        <a href='products.php'  class='btn btn-info'>close</a>
                      
                       
                      
                    </div>
                </div>
            </div>
    

                </div>


        </body>
        </html>

        <script>
        $('#updateproduct').modal('show');

        // $('.wrong').on('click',function()({
        //     alert('rwrw');
        // })

        </script>




        ";
       
    }

        

}

//HERE IS THE QUERY TO UPDATE 
   

if(isset($_POST['updateproduct'])){
    $productId = $_POST['productId'];
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];
    $sql = " UPDATE products SET productPhoto = '$photo', productName= '$name', productBrand= '$brand', productDescription= '$description', productPrice= '$price', stocks= '$stocks'  WHERE productId = '$productId'";

    // execute the query

    $result = $conn->query($sql);


    if ($result == TRUE) {
    header('Location: products.php');


    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }

    $conn->close();


}


// UPDATE PRODUCT END





// REQUEST EDIT PRODUCT


if (isset($_GET['requestedit'])){
    $productId = $_GET['requestedit'];
  
   
    $result = $conn->query("SELECT * FROM products WHERE productId=$productId")or die ($conn->error);
    if (count([$result]) == 1){
        $row = $result->fetch_array();
        $photo = $row['productPhoto'];
        $name = $row['productName'];
        $brand = $row['productBrand'];
        $description = $row['productDescription'];
        $price = $row['productPrice'];
        $stocks = $row['stocks'];
        $productId= $row['productId'];
        $username= $_SESSION['username'];



        echo "
        
        
        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <title>Bootstrap Example</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
        </head>
        <body>
        <div class='container-fluid'>


        <br><br>
        <div class='modal fade' id='updateproduct' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Request Edit</h5>
                       
                    </div>
                    <div class='modal-body'>
                        <form action='connection.php' method='POST'>

                        <div class='mb-3'>
                                    <label for='inputName ' class='form-label'>productPhoto</label>
                                    <input type='text'  placeholder='Photo'name='photo' required class='form-control' id='inputName' value='$photo'>
                                    <input type='hidden'  placeholder='Photo'name='productId' required class='form-control' id='inputName' value='$productId'>
                                    <input type='hidden'  placeholder='Photo'name='username' required class='form-control' id='inputName' value='$username'>


                            <div class='mb-3'>
                                <label for='InputPhoto' class='form-label'>productName</label>
                                <input type='text' name='name' class='form-control' required id='inputPhoto' placeholder='Name' value='$name'>
                               </div>

                              

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productBrand</label>
                                    <input type='text' placeholder='Brand' name='brand'  class='form-control' id='inputType' value='$brand' required>
                                </div>

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productDescription</label>
                                    <input type='text' placeholder='Description' name='description'  class='form-control' id='inputType' value='$description' required>
                                </div>

                                
                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>productPrice</label>
                                    <input type='text' placeholder='Price' name='price'  class='form-control' id='inputType' value='$price' required>
                                </div>

                                <div class='mb-3'>
                                    <label for='inputType' class='form-label'>stocks</label>
                                    <input type='text' placeholder='Stocks' name='stocks'  class='form-control' id='inputType' value='$stocks' required>
                                </div>

                                <div class='mb-3'>
                                <label for='inputType' class='form-label'>Comments</label>
                                <input type='text' placeholder='Comments' name='comments'  class='form-control' id='inputType'  required>
                            </div>


                                <button type='submit' name='requestedit' class='btn btn-primary request'>Submit</button>
                            </div>
                          
                        </form>
                    </div>
                    <div class='modal-footer'>
                       

                        <a href='userpage.php'  class='btn btn-info'>close</a>
                      
                       
                      
                    </div>
                </div>
            </div>
    

                </div>


        </body>
        </html>

        <script>
        $('#updateproduct').modal('show');

     

        </script>




        ";
       
    }

        

}

//HERE IS THE QUERY TO REQUEST EDIT
   

if(isset($_POST['requestedit'])){
    $productId = $_POST['productId'];
    $photo = $_POST['photo'];
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];
    $comments = $_POST['comments'];
    $username = $_POST['username'];
    $sql = "INSERT INTO `request`(`username`,`productId`, `productPhoto`, `productName`, `productBrand` , `productdescription`, `productPrice`, `stocks`, `comments`) VALUES ('$username','$productId','$photo','$name','$brand','$description','$price','$stocks','$comments')";
    
    // execute the query

    $result = $conn->query($sql);


    if ($result == TRUE) {


        echo " <!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Bootstrap Simple Success Confirmation Popup</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round' rel='stylesheet'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <style>
            body {
                font-family: 'Varela Round', sans-serif;
            }
            .modal-confirm {		
                color: #636363;
                width: 325px;
                margin: 30px auto;
            }
            .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }
            .modal-confirm .modal-header {
                border-bottom: none;   
                position: relative;
            }
            .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }
            .modal-confirm .form-control, .modal-confirm .btn {
                min-height: 40px;
                border-radius: 3px; 
            }
            .modal-confirm .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }	
            .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
            }	
            .modal-confirm .icon-box {
                color: #fff;		
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #82ce34;
                padding: 15px;
                text-align: center;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-confirm .icon-box i {
                font-size: 58px;
                position: relative;
                top: 3px;
            }
            .modal-confirm.modal-dialog {
                margin-top: 80px;
            }
            .modal-confirm .btn {
                color: #fff;
                border-radius: 4px;
                background: #82ce34;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }
            .modal-confirm .btn:hover, .modal-confirm .btn:focus {
                background: #6fb32b;
                outline: none;
            }
            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }
        </style>
        </head>
        <body>
       
        
        <!-- Modal HTML -->
        <div id='requestconfirm' class='modal fade'>
            <div class='modal-dialog modal-confirm'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <div class='icon-box'>
                            <i class='material-icons'>&#xE876;</i>
                        </div>				
                        <h4 class='modal-title'>Awesome!</h4>	
                    </div>
                    <div class='modal-body'>
                        <p class='text-center'>Your request is now on process. Check your request dashboard for the updates.</p>
                    </div>
                    <div class='modal-footer'>

                         <a href='userrequestpage.php'class='btn btn-success btn-block'>OK</a>
                  
                    </div>
                </div>
            </div>
        </div>  
        
        
        </body>
        </html> 

        <script>
        $('#requestconfirm').modal('show');

     

        </script>
        
        ";

    


    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }

    $conn->close();


}


// REQUEST EDIT END








//APPROVED REQUEST ADMIN SIDE

if (isset($_GET['approvedrequest'])){
    

$approvedRequest=$_GET['approvedrequest'];
$approvedPhoto=$_GET['approvedphoto'];
$approvedName=$_GET['approvedname'];
$approvedBrand=$_GET['approvedbrand'];
$approvedDescription=$_GET['approvedDescription'];
$approvedPrice=$_GET['approvedPrice'];
$approvedstocks=$_GET['approvedstocks'];
$username=$_GET['username'];


$sql = " UPDATE products SET username = '$username', productPhoto = '$approvedPhoto', productName= '$approvedName', productBrand= '$approvedBrand', productDescription= '$approvedDescription', productPrice= '$approvedPrice', stocks= '$approvedstocks'  WHERE productId = '$approvedRequest'";
$sqldelete = " DELETE FROM request WHERE productId='$approvedRequest'";

// execute the query
$delete = $conn->query($sqldelete);
$result = $conn->query($sql);



if ($result & $delete== TRUE) {
header('Location: products.php');


}else{
echo "Error:'. $sql . '<br>". $conn->error;
}

$conn->close();




}


// END REQUEST APPROVED


// ARCHIVED PRODUCT

if (isset($_GET['archivedproduct'])){

    $archivedProduct=$_GET['archivedproduct'];
    $archivedPhoto=$_GET['archivedphoto'];
    $archivedName=$_GET['archivedname'];
    $archivedBrand=$_GET['archivedbrand'];
    $archivedDescription=$_GET['archivedDescription'];
    $archivedPrice=$_GET['archivedPrice'];
    $archivedstocks=$_GET['archivedstocks'];
    
    $sql = "INSERT INTO `archivedproducts`(`productId`,`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `stocks`) VALUES ('$archivedProduct','$archivedPhoto ',' $archivedName','$archivedBrand ','    $archivedDescription ',' $archivedPrice','$archivedstocks')";
    $sqldelete = " DELETE FROM products WHERE productId='$archivedProduct'";
    
    // execute the query
    $delete = $conn->query($sqldelete);
    $result = $conn->query($sql);
    
    
    
    if ($result & $delete== TRUE) {
    header('Location: seeproductarchived.php');
    
    
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    
    
    }






// END ARCHIVED PRODUCT



// UNARCHIVED PRODUCT

if (isset($_GET['unarchivedproduct'])){

    $unarchivedProduct=$_GET['unarchivedproduct'];
    $unarchivedPhoto=$_GET['unarchivedphoto'];
    $unarchivedName=$_GET['unarchivedname'];
    $unarchivedBrand=$_GET['unarchivedbrand'];
    $unarchivedDescription=$_GET['unarchivedDescription'];
    $unarchivedPrice=$_GET['unarchivedPrice'];
    $unarchivedstocks=$_GET['unarchivedstocks'];
    
    $sql = "INSERT INTO `products`(`productId`,`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `stocks`) VALUES ('$unarchivedProduct','$unarchivedPhoto ',' $unarchivedName','$unarchivedBrand ','    $unarchivedDescription ',' $unarchivedPrice','$unarchivedstocks')";
    $sqldelete = " DELETE FROM archivedproducts WHERE productId='$unarchivedProduct'";
    
    // execute the query
    $delete = $conn->query($sqldelete);
    $result = $conn->query($sql);
    
        
    if ($result & $delete== TRUE) {
    header('Location: products.php');
    
    
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    
    
    }

// END UNARCHIVED PRODUCT





//ORDER


if (isset($_GET['orderproduct'])){

$orderProduct=$_GET['orderproduct'];
$orderPhoto=$_GET['orderphoto'];
$orderName=$_GET['ordername'];
$orderBrand=$_GET['orderbrand'];
$orderDescription=$_GET['orderDescription'];
$orderPrice=$_GET['orderPrice'];
$orderStocks=$_GET['orderstocks'];
$username=$_SESSION['username'];
        
    echo "
        
        
    <!DOCTYPE html>
    <html lang='en'>
    <head>
    <title>Bootstrap Example</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
    </head>
    <body>
    <div class='container-fluid'>


    <br><br>
    <div class='modal fade' id='updateproduct' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Address Details</h5>
                   
                </div>
                <div class='modal-body'>
                    <form action='connection.php' method='POST'>

                    <input type='hidden'  placeholder='Address'name='orderstocks' required class='form-control' id='inputName' value='$orderStocks' >
                    <input type='hidden'  placeholder='Address'name='orderproduct' required class='form-control' id='inputName' value='$orderProduct' >
                    <input type='hidden'  placeholder='Address'name='orderphoto' required class='form-control' id='inputName'value='$orderPhoto' >
                    <input type='hidden'  placeholder='Address'name='ordername' required class='form-control' id='inputName'value='$orderName' >
                    <input type='hidden'  placeholder='Address'name='orderbrand' required class='form-control' id='inputName' value='$orderBrand'>
                    <input type='hidden'  placeholder='Address'name='orderDescription' required class='form-control' id='inputName'value='$orderDescription' >
                    <input type='hidden'  placeholder='Address'name='orderPrice' required class='form-control' id='inputName'value='$orderPrice' >
                    <input type='hidden'  placeholder='Address'name='username' required class='form-control' id='inputName'value='$username' >


                    <div class='mb-3'>
                                <label for='inputName ' class='form-label'>Full Name</label>
                                <input type='text'  placeholder='Full Name'name='fullname' required class='form-control' id='inputName' >
                   


                                <div class='mb-3'>
                                <label for='InputPhoto' class='form-label'>Product Quantity</label>
                                <input type='text' name='quantity' class='form-control' required id='inputPhoto' placeholder='Product Quantity'>
                               </div>

                                <div class='mb-3'>
                                <label for='InputPhoto' class='form-label'>Address</label>
                                <input type='text' name='address' class='form-control' required id='inputPhoto' placeholder='Address'>
                               </div>

                        <div class='mb-3'>
                            <label for='InputPhoto' class='form-label'>Contact Email</label>
                            <input type='email' name='contactemail' class='form-control' required id='inputPhoto' placeholder='Contact Email'>
                           </div>

                          

                            <div class='mb-3'>
                                <label for='inputType' class='form-label'>Payment Method</label>
                                <input type='text' placeholder='COD' name='paymentmethod'  class='form-control' id='inputType' required>
                            </div>

                          


                            <button type='submit' name='ordernow' class='btn btn-primary request'>Submit</button>
                        </div>
                      
                    </form>
                </div>
                <div class='modal-footer'>
                   

                    <a href='userpage.php'  class='btn btn-info'>close</a>
                  
                   
                  
                </div>
            </div>
        </div>


            </div>


    </body>
    </html>

    <script>
    $('#updateproduct').modal('show');

 

    </script>




    ";

    
}







// HERE IS THE QUERY  OF ORDER PRODUCT 

if(isset($_POST['ordernow'])){



    $orderProduct=$_POST['orderproduct'];
    $orderPhoto=$_POST['orderphoto'];
    $orderName=$_POST['ordername'];
    $orderBrand=$_POST['orderbrand'];
    $orderDescription=$_POST['orderDescription'];
    $orderPrice=$_POST['orderPrice'];
    $orderFullName=$_POST['fullname'];
    $orderAddress=$_POST['address'];
    $orderContactEmail=$_POST['contactemail'];
    $orderPaymentMethod=$_POST['paymentmethod'];
    $orderquantity=$_POST['quantity'];
    $username=$_POST['username'];

  


$sql = "INSERT INTO `order`(`username`,`productId`,`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `quantity`, `fullName`, `address`,`contactEmail`,`paymentMethod`) VALUES ('$username','$orderProduct','$orderPhoto ',' $orderName','$orderBrand ',' $orderDescription ',' $orderPrice','$orderquantity',   '$orderFullName','$orderAddress','$orderContactEmail','$orderPaymentMethod')";


// execute the query

$result = $conn->query($sql);

    
if ($result == TRUE) {
header('Location: order.php');


}else{
echo "Error:'. $sql . '<br>". $conn->error;
}

$conn->close();


}

// END OF THE ORDER PRODUCT





//APPROVED PRODUCT ORDER


if (isset($_GET['approved'])){


    $approvedProduct=$_GET['approved']; 
    $productPhoto=$_GET['productPhoto'];
    $productName=$_GET['productName'];
    $productBrand=$_GET['productBrand'];
    $productDescription=$_GET['productDescription'];
    $productPrice=$_GET['productPrice'];
    $quantity=$_GET['quantity'];
    $fullName=$_GET['fullName'];
    $address=$_GET['address'];
    $contactEmail=$_GET['contactEmail'];
    $paymentMethod=$_GET['paymentMethod'];
    $username=$_GET['username'];
    $result= "approved";
    // $status=$_GET['status'];

    $status='https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Approve_icon.svg/1200px-Approve_icon.svg.png';
   
    echo $approvedProduct;


 

    //INSERT THE PRODUCT ON PRODUCT HISTORY

    $sql = "INSERT INTO orderhistory(`username`,`productId`,`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `quantity`,`status`,`fullName`,`address`,`contactEmail`,`paymentMethod`,`result`) VALUES ('$username','$approvedProduct','$productPhoto ','$productName','$productBrand','$productDescription','$productPrice','$quantity','$status','$fullName','$address','$contactEmail','$paymentMethod','$result')";
    
    //UPDATE THE STOCKS IN THE PRODUCT
    $sqlupdate = "UPDATE products SET stocks =(stocks -'".$quantity."') WHERE productId = '$approvedProduct'";

    
     // DELETE THE PRODUCT ON THE ORDER LIST . IT IS ALREADY APPROVED
     $sqldelete = "DELETE FROM `order` WHERE productId = $approvedProduct";

    $update = $conn->query($sqlupdate);
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $update  & $sqldelete == TRUE) {
    header('Location: seeorderhistory.php');
    
    
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    

    
    }




// END APPROVED PRODUCT ORDER




//CANCEL PRODUCT ORDER



if (isset($_GET['cancel'])){


    $approvedProduct=$_GET['cancel']; 
    $productPhoto=$_GET['productPhoto'];
    $productName=$_GET['productName'];
    $productBrand=$_GET['productBrand'];
    $productDescription=$_GET['productDescription'];
    $productPrice=$_GET['productPrice'];
    $quantity=$_GET['quantity'];
    $fullName=$_GET['fullName'];
    $address=$_GET['address'];
    $contactEmail=$_GET['contactEmail'];
    $paymentMethod=$_GET['paymentMethod'];
    $username=$_GET['username'];
    $result= "cancel";
    // $status=$_GET['status'];

    $status='https://icon-library.com/images/cancelled-icon/cancelled-icon-1.jpg';
   
    echo $approvedProduct;


 

    //INSERT THE PRODUCT ON PRODUCT HISTORY

    $sql = "INSERT INTO orderhistory(`username`,`productId`,`productPhoto`, `productName`, `productBrand`, `productDescription`, `productPrice`, `quantity`,`status`,`fullName`,`address`,`contactEmail`,`paymentMethod`,`result`) VALUES ('$username','$approvedProduct','$productPhoto ','$productName','$productBrand','$productDescription','$productPrice','$quantity','$status','$fullName','$address','$contactEmail','$paymentMethod','$result')";
    
   
    
     // DELETE THE PRODUCT ON THE ORDER LIST . IT IS ALREADY APPROVED
     $sqldelete = "DELETE FROM `order` WHERE productId = $approvedProduct";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: seeorderhistory.php');
    
    
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    

    
    }

// END CANCEL PRODUCT ORDER


//DISABLE ADMIN



if (isset($_GET['disableadmin'])){

    $ID=$_GET['disableadmin']; 
    $username=$_GET['username'];
    $password=$_GET['password'];
   
    // $status=$_GET['status'];



    //INSERT THE ADMIN  ON DISABLED ADMINS AREA.

    $sql = "INSERT INTO disableadmin(`adminId`,`username`,`password`) VALUES ('$ID','$username','$password ')";
    
   
    
     // DELETE THE ADMIN ON THE ADMIN SIDE . IT IS ALREADY DISABLED
     $sqldelete = "DELETE FROM `admin` WHERE ID = $ID";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: disableadmin.php');
        
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    

    
    }


// END DISABLE ADMIN





//UNDISABLE ADMIN



if (isset($_GET['enableadmin'])){
    $ID=$_GET['enableadmin']; 
    $username=$_GET['username'];
    $password=$_GET['password'];
  

    //INSERT THE ADMIN  ON DISABLED ADMINS AREA.

    $sql = "INSERT INTO admin(`username`,`password`) VALUES ('$username','$password')";
    
   
    
     // DELETE THE ADMIN ON THE ADMIN SIDE . IT IS ALREADY DISABLED
     $sqldelete = "DELETE FROM `disableadmin` WHERE adminId = $ID";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: seeadmin.php');
        
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    

    
    }


// END UNDISABLE ADMIN







//DISABLE USER



if (isset($_GET['disableuser'])){

    $ID=$_GET['disableuser']; 
    $username=$_GET['username'];
    $password=$_GET['password'];
    $email=$_GET['email'];
   
    // $status=$_GET['status'];



    //INSERT THE USER  ON DISABLED USERS AREA.

    $sql = "INSERT INTO disableuser(`ID`,`username`,`password`,`email`) VALUES ('$ID','$username','$password','$email')";
    
   
    
     // DELETE THE USER ON THE USER SIDE . IT IS ALREADY DISABLED
     $sqldelete = "DELETE FROM `users` WHERE ID = $ID";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: disableuser.php');
        
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    }


// END DISABLE USER




//ENABLE USER



if (isset($_GET['enableuser'])){

    $ID=$_GET['enableuser']; 
    $username=$_GET['username'];
    $password=$_GET['password'];
    $email=$_GET['email'];
   
    // $status=$_GET['status'];



    //INSERT THE USER  ON ENABLE  USERS AREA.

    $sql = "INSERT INTO users(`ID`,`username`,`password`,`email`) VALUES ('$ID','$username','$password','$email')";
    
   
    
     // DELETE THE USER ON THE DISABLE USER SIDE. IT IS ALREADY ENABLED
     $sqldelete = "DELETE FROM `disableuser` WHERE ID = $ID";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: seeusers.php');
        
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    }


// END ENABLE USER







//USER TO ADMIN 





if (isset($_GET['addasadmin'])){

    $ID=$_GET['addasadmin']; 
    $username=$_GET['username'];
    $password=$_GET['password'];
    
   
    // $status=$_GET['status'];


    //INSERT THE USER  ON DISABLED USERS AREA.

    $sql = "INSERT INTO admin(`ID`,`username`,`password`) VALUES ('$ID','$username','$password')";
    
   
    
     // DELETE THE USER ON THE USER SIDE . IT IS ALREADY DISABLED
     $sqldelete = "DELETE FROM `users` WHERE ID = $ID";

  
    $result = $conn->query($sql);
    $sqldelete = $conn->query($sqldelete);
    
        
    if ($result  & $sqldelete == TRUE) {
    header('Location: seeadmin.php');
        
    }else{
    echo "Error:'. $sql . '<br>". $conn->error;
    }
    
    $conn->close();
    
    
    }


// END USER TO ADMIN 




?>


<style>


.swal-wide{


width:350px;
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='800' height='800' viewBox='0 0 200 200'%3E%3Cdefs%3E%3ClinearGradient id='a' gradientUnits='userSpaceOnUse' x1='88' y1='88' x2='0' y2='0'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='1' stop-color='%23e3e3e3'/%3E%3C/linearGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='75' y1='76' x2='168' y2='160'%3E%3Cstop offset='0' stop-color='%238f8f8f'/%3E%3Cstop offset='0.09' stop-color='%23b3b3b3'/%3E%3Cstop offset='0.18' stop-color='%23c9c9c9'/%3E%3Cstop offset='0.31' stop-color='%23dbdbdb'/%3E%3Cstop offset='0.44' stop-color='%23e8e8e8'/%3E%3Cstop offset='0.59' stop-color='%23f2f2f2'/%3E%3Cstop offset='0.75' stop-color='%23fafafa'/%3E%3Cstop offset='1' stop-color='%23ffffff'/%3E%3C/linearGradient%3E%3Cfilter id='c' x='0' y='0' width='200%25' height='200%25'%3E%3CfeGaussianBlur in='SourceGraphic' stdDeviation='12' /%3E%3C/filter%3E%3C/defs%3E%3Cpolygon fill='url(%23a)' points='0 174 0 0 174 0'/%3E%3Cpath fill='%23000' fill-opacity='.5' filter='url(%23c)' d='M121.8 174C59.2 153.1 0 174 0 174s63.5-73.8 87-94c24.4-20.9 87-80 87-80S107.9 104.4 121.8 174z'/%3E%3Cpath fill='url(%23b)' d='M142.7 142.7C59.2 142.7 0 174 0 174s42-66.3 74.9-99.3S174 0 174 0S142.7 62.6 142.7 142.7z'/%3E%3C/svg%3E");
background-attachment: fixed;
background-repeat: no-repeat;
background-position: top left;
}
</style>

