<?php
session_start(); //setting session for username

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}else{
   
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- PRODUCT LINKS -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- ===== BOX ICONS ===== -->
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="preloader/css/style.css">
  <title>Available Products|Inventory Management System</title>

</head>
<!-- navigation bar -->

<body id="body-pd">
  <header class="header" id="header">
    <div class="header__toggle">
      <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <!-- char2 profile pic in the right part of the navigation bar -->
    <div class="header__img">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-YXtrc-aHff09cYKAy_X-m46NN2hIyjbzfg&usqp=CAU" alt="wew" title="<?php echo $_SESSION['username']; ?>">
    </div>
  </header>
  <!-- side navigation bar -->
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div>
        <!-- header -->
        <a href="#" class="nav__logo">
          <i class='bx bx-layer nav__logo-icon'></i>
          <span class="nav__logo-name">
            <h3>ShowYow</h3>
          </span>
        </a>
        <!--class displays the products -->
        <div class="nav__list">
          <a href="#" class="nav__link active">
            <i class='bx bx-grid-alt nav__icon'></i>
            <span class="nav__name">Dashboard</span>
          </a>
          <!-- user name -->
          <a href="userpp.php" class="nav__link">
            <i class='bx bx-user nav__icon'></i>
            <span class="nav__name"><?php echo $_SESSION['username']; ?></span>
          </a>
          <!-- all requeted products -->
          <a href="userrequestpage.php" class="nav__link">
            <i class='bx bx-message-square-detail nav__icon'></i>
            <span class="nav__name">All Request</span>
          </a>
          <!-- ordered products -->
          <a href="order.php" class="nav__link">
            <i class='bx bx-bookmark nav__icon'></i>
            <span class="nav__name">Order</span>
          </a>
          <!-- order history -->
          <a href="userorderhistory.php" class="nav__link">
            <i class='bx bx-folder nav__icon'></i>
            <span class="nav__name">Order History</span>
          </a>
          <!-- char2 analytics -->
          <a href="about.php" class="nav__link">
            <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
            <span class="nav__name">About</span>
          </a>
        </div>
      </div>
      <!-- logout icon -->
      <a href="logout.php" class="nav__link">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
    <!-- PRELOADER -->
    <div id="overlay">
      <div class="cv-spinner">
        <div class="spinner">
          <img src="preloader/images/cool.svg" alt="">
          <!--use other image-->
        </div>
      </div>
    </div>
  </div>


  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .accordion-item:last-of-type .accordion-button.collapsed {
      border-bottom-right-radius: calc(.25rem - 1px);
      border-bottom-left-radius: calc(.25rem - 1px);
      width: 20%;
      background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
    }

    .accordion-item:first-of-type .accordion-button {
      border-top-left-radius: calc(.25rem - 1px);
      border-top-right-radius: calc(.25rem - 1px);
      width: 20%;
      background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
    }

    .accordion-item {
      background-color: white;
      border: 1px solid rgba(0, 0, 0, .125);
      margin-top: 30px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 4px 8px 0 rgba(0, 0, 0, 0.19);
      border-radius: 10px;
      background-image: linear-gradient(-45deg, #4481eb 0%, #04befe 100%);
      transition: 0.5s;
    }

    .accordion-item:hover {
      border: 1px solid black;
      border-radius: 30px;
    }

    .productName {
      font-size: 2.2rem;

      margin-bottom: 10px;
      font-family: "Poppins", sans-serif;
      color: #444;
    }

    .order {
      font-family: "Poppins", sans-serif;
    }

    .productcard {

      margin-top: 80px;
      height: 300px;
      transition: 0.5s;
      height: 71%;

    }

    .header-title {
      margin-top: auto;
    }


    /* TABLE */
    #myInput {
      background-image: url('/css/searchicon.png');
      /* Add a search icon to input */
      background-position: 10px 12px;
      /* Position the search icon */
      background-repeat: no-repeat;
      /* Do not repeat the icon image */
      width: 35%;
      /* width */
      border-radius: 5px;
      /* radius of the search bar */
      font-size: 16px;
      /* Increase font-size */
      padding: 12px 20px 12px 40px;
      /* Add some padding */
      border: 1px solid #ddd;
      /* Add a grey border */
      margin-bottom: 12px;
      /* Add some space below the input */
    }

    #myTable {
      border-collapse: collapse;
      /* Collapse borders */
      width: 100%;
      /* Full-width */
      border: 1px solid #ddd;
      /* Add a grey border */
      font-size: 18px;
      /* Increase font-size */
    }

    #myTable th,
    #myTable td {
      text-align: left;
      /* Left-align text */
      padding: 12px;
      /* Add padding */
    }

    #myTable tr {
      /* Add a bottom border to all table rows */
      border-bottom: 1px solid #ddd;

    }

    tr:hover {
      /* Add a grey background color to the table header and on hover */
      background-color: #f1f1f1;
    }

    tr {
      font-size: 1rem;
      font-family: "Poppins", sans-serif;
    }

    th {
      font-size: 1rem;
    }

    /* END TABLE */
  </style>
  <!-- PRODUCT -->
  <div class="container-fluid">

    <script>
      function myFunction() {

        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[2];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    </script>

    <!-- Heading -->
    <h1>Available Products</h1>

    <!-- opening table -->
    <table id="myTable">
      <h4>Search: &nbsp; <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for brand.."></h4>
      <!-- header table dark -->
      <thead class="table-dark">

        <tr>
          <!-- <th scope="col">productId</th> -->
          <th scope="col">productPhoto</th>
          <th scope="col">productName</th>
          <th scope="col">productBrand</th>
          <th scope="col">productDescription</th>
          <th scope="col">productPrice</th>
          <th scope="col">stocks</th>
          <th scope="col">Request Edit</th>
          <th scope="col">Order</th>

        </tr>
      </thead>

      <?php
      //database connection
      $servername = "remotemysql.com";$username = "zlTTPwailO";$password = "BUkhRiFNyW";$dbname = "zlTTPwailO";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } else {

        $sql = "SELECT * FROM `products`";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

      ?>
            <!-- opening table row -->
            <tr>
              <!-- table data  -->
              <td>
                <img alt="" width="40px" src="<?php echo $row['productPhoto']; ?>">
              </td>

              <td>
                <?php echo  $row['productName']; ?>
              </td>

              <td>
                <?php echo $row['productBrand']; ?>
              </td>

              <td>
                <?php echo $row['productDescription']; ?>
              </td>
              <td>
                <?php echo $row['productPrice']; ?>
              </td>
              <td>
                <?php echo $row['stocks']; ?>
              </td>

              <td>
                <a href="connection.php?requestedit=<?php echo $row['productId']; ?>" class="btn btn-danger">Request Edit</a> <!-- button to request edit -->
              </td>

              <td>
                <a href="connection.php?orderproduct=<?php echo $row['productId']; ?> &orderphoto=<?php echo $row['productPhoto']; ?>&ordername=<?php echo $row['productName']; ?>&orderbrand=<?php echo $row['productBrand']; ?>&orderDescription=<?php echo $row['productDescription']; ?>&orderPrice=<?php echo $row['productPrice']; ?>&orderstocks=<?php echo $row['stocks']; ?>" class="btn btn-info">Order</a> <!-- button to order product -->
              </td>
            </tr>

          <?php } ?>
        <?php } ?>
      <?php } ?>
      <!-- closing -->
  </div>

  <!-- connecting the js -->
  <script src="preloader/js/jquery-latest.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".btn-danger").click(function(event) {
        $("#overlay").fadeIn("fast", function() {
          $("#overlay").delay(1000).fadeOut("slow");
        });
      });

      //will do on page load now
      $("#overlay").delay(1000).fadeOut("slow");
    })

    // PRODUCTS FUNCTIONS
    const sizes = document.querySelectorAll('.size');
    const colors = document.querySelectorAll('.color');
    const shoes = document.querySelectorAll('.shoe');
    const gradients = document.querySelectorAll('.gradient');
    const shoeBg = document.querySelector('.shoeBackground');

    let prevColor = "blue";
    let animationEnd = true;

    function changeSize() {
      sizes.forEach(size => size.classList.remove('active'));
      this.classList.add('active');
    }

    function changeColor() {
      if (!animationEnd) return;
      let primary = this.getAttribute('primary');
      let color = this.getAttribute('color');
      let shoe = document.querySelector(`.shoe[color="${color}"]`);
      let gradient = document.querySelector(`.gradient[color="${color}"]`);
      let prevGradient = document.querySelector(`.gradient[color="${prevColor}"]`);

      if (color == prevColor) return;

      colors.forEach(c => c.classList.remove('active'));
      this.classList.add('active');

      document.documentElement.style.setProperty('--primary', primary);

      shoes.forEach(s => s.classList.remove('show'));
      shoe.classList.add('show');

      gradients.forEach(g => g.classList.remove('first', 'second'));
      gradient.classList.add('first');
      prevGradient.classList.add('second');

      prevColor = color;
      animationEnd = false;

      gradient.addEventListener('animationend', () => {
        animationEnd = true;
      })
    }

    sizes.forEach(size => size.addEventListener('click', changeSize));
    colors.forEach(c => c.addEventListener('click', changeColor));

    let x = window.matchMedia("(max-width: 1000px)");

    function changeHeight() {
      if (x.matches) {
        let shoeHeight = shoes[0].offsetHeight;
        shoeBg.style.height = `${shoeHeight * 0.9}px`;
      } else {
        shoeBg.style.height = "475px";
      }
    }

    changeHeight();

    window.addEventListener('resize', changeHeight);
  </script>

  <!--===== MAIN JS =====-->
  <style>
    /* PRELOADER */
    #overlay {
      position: fixed;
      top: 0;
      z-index: 100;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);

    }

    .cv-spinner {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    /*===== VARIABLES CSS =====*/
    :root {
      --header-height: 3rem;
      --nav-width: 68px;

      /*===== Colors =====*/
      --first-color: #4723D9;
      --first-color-light: #AFA5D9;
      --white-color: #F7F6FB;

      /*===== Font and typography =====*/
      --body-font: 'Nunito', sans-serif;
      --normal-font-size: 1rem;

      /*===== z index =====*/
      --z-fixed: 100;
    }

    /*===== BASE =====*/
    *,
    ::before,
    ::after {
      box-sizing: border-box;
    }

    body {
      position: relative;
      margin: var(--header-height) 0 0 0;
      padding: 0 1rem;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      transition: .5s;
    }

    a {
      text-decoration: none;
    }

    /*===== HEADER =====*/
    .header {
      width: 100%;
      height: var(--header-height);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      background-color: var(--white-color);
      z-index: var(--z-fixed);
      transition: .5s;
    }

    .header__toggle {
      color: var(--first-color);
      font-size: 1.5rem;
      cursor: pointer;
    }

    /* navbar right position image */
    .header__img {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden;
    }

    .header__img img {
      width: 40px;
    }

    /*===== NAV =====*/
    .l-navbar {
      position: fixed;
      top: 0;
      left: -30%;
      width: var(--nav-width);
      height: 100vh;
      background-color: var(--first-color);
      padding: .5rem 1rem 0 0;
      transition: .5s;
      z-index: var(--z-fixed);
    }

    .nav {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
    }

    .nav__logo,
    .nav__link {
      display: grid;
      grid-template-columns: max-content max-content;
      align-items: center;
      column-gap: 1rem;
      padding: .5rem 0 .5rem 1.5rem;
    }

    .nav__logo {
      margin-bottom: 2rem;
    }

    .nav__logo-icon {
      font-size: 1.25rem;
      color: var(--white-color);
    }

    .nav__logo-name {
      color: var(--white-color);
      font-weight: 700;
    }

    .nav__link {
      position: relative;
      color: var(--first-color-light);
      margin-bottom: 1.5rem;
      transition: .3s;
    }

    .nav__link:hover {
      color: var(--white-color);
    }

    .nav__icon {
      font-size: 1.25rem;
    }

    /*Show navbar movil*/
    .show {
      left: 0;
    }

    /*Add padding body movil*/
    .body-pd {
      padding-left: calc(var(--nav-width) + 1rem);
    }

    /*Active links*/
    .active {
      color: var(--white-color);
    }

    .active::before {
      content: '';
      position: absolute;
      left: 0;
      width: 2px;
      height: 32px;
      background-color: var(--white-color);
    }

    /* ===== MEDIA QUERIES=====*/
    @media screen and (min-width: 768px) {
      body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem);
      }

      .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
      }

      .header__img {
        width: 40px;
        height: 40px;
      }

      .header__img img {
        width: 45px;
      }

      .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0;
      }

      /*Show navbar desktop*/
      .show {
        width: calc(var(--nav-width) + 156px);
      }

      /*Add padding body desktop*/
      .body-pd {
        padding-left: calc(var(--nav-width) + 188px);
      }
    }
  </style>



  <script>
    /*===== SHOW NAVBAR  =====*/
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
      const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

      // Validate that all variables exist
      if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', () => {
          // show navbar
          nav.classList.toggle('show')
          // change icon
          toggle.classList.toggle('bx-x')
          // add padding to body
          bodypd.classList.toggle('body-pd')
          // add padding to header
          headerpd.classList.toggle('body-pd')
        })
      }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE  =====*/
    const linkColor = document.querySelectorAll('.nav__link')

    function colorLink() {
      if (linkColor) {
        linkColor.forEach(l => l.classList.remove('active'))
        this.classList.add('active')
      }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))
  </script>
</body>

</html>
