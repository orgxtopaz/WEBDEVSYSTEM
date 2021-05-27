<div class="container-fluid">
  

          
  <h1>Components</h1>
  <div class="row">

        <?php
                              $servername = "remotemysql.com";$username = "zlTTPwailO";$password = "BUkhRiFNyW";$dbname = "zlTTPwailO";
     
     $conn = new mysqli($servername, $username, $password, $dbname);
      //  echo $_SESSION['UserId'];
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }else{
        
        $sql = "SELECT * FROM `products`";
        $result = $conn->query($sql);
        $count=1;
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            
        ?>




<?php } ?>
<?php }?>
<?php }?>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

        
            <div class="box card productcard">

              
                <div class="box cardImg">
                    <img src="https://image.freepik.com/psd-gratuit/cap-maquette_1310-498.jpg" alt="...">
                </div>
                <div class="info">
                     <p class="productBrand"><b>productBrand</b> <span> <i class="fa fa-cube"></i>Stock</span></p>
                    <h3 class="productName"><b>productName</b></h3>
                    <p><span>150</span> Price</p>
                    <button class="btn btn-primary order " style="  background-image: linear-gradient(
                              -45deg
                              , #4481eb 0%, #04befe 100%);  " >Order</button>     
                    
                    
                   <center>  
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong>
                      </div>
                    </div>
                  </div>
                  </center>  

                  </div>    
                </div>





  </div>

  


  
  






</div>



