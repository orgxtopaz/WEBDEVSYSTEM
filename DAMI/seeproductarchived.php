<?php
session_start(); //set session for adminusername
if (!isset($_SESSION['adminusername'])) { //if the variable adminusername is being set,
  header('location:adminlogin.php'); //then it will set the location to adminlogin.php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <title>Products Archived|Inventory Management System</title>
</head>

<body>
  <!-- side navigation bar icon -->
  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <!-- side navigation bar header -->
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <a href="#">Administrator</a>
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <!-- user profile picture -->
        <div class="sidebar-header">
          <div class="user-pic">
            <img class="img-responsive img-rounded" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBIPEhISEhIPERIPDw8PDw8PDxESEhAPGBQZGSUUGRgpIzwlHB44JR0kJjg0ODA0Njg1KDE7Tkg0Pzw0NTYBDAwMEA8QHBISGDQhGB4/PzExND8xOD8xNTE2ND80MTQ/MT80NDE0NDE0NDQxMTQxMTQxMTE0PzExPzE0NDE0Mf/AABEIAMgAyAMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAADBAACAQUGBwj/xAA9EAACAgEBBgIIBAMHBQEAAAABAgADEQQFEiExQVFhcQYHEzKBkaHBIkJSsRQjYnKSosLR4fAkQ1OyszP/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAJhEBAQACAQQCAgEFAAAAAAAAAAECEQMEEiExMkETUSIFI0Jhgf/aAAwDAQACEQMRAD8A39axqtYvWI3WIBq1jVawVYjVYgERYwqyiCMIIF0EKqyqCGUQIolgJAJbMCYmRFNfrq9NW9trqldalndjwAH7npPBPTD1l6vW2OmmsfS6YEhVrbdssHLedxx49hw8+cjf6Tp9DSYnyIm1tSrb636hX/Wt1gb55na+iXrP1mjsVdVZZq9OcB1chrUH6lc8T5E/KSPoUiUaJ7L2nTrKkuosWytxkMpHA490/pYdo3mQaVMEwhiJRhJToB1gGEZYQLiEFHEWsEddYtYskJOItYsdcRWxZCCVgmJewTMC9YjdYi9YjVYgMViNViArEarEAyCMIIJBGEEC6CFUSqiEgYzAajUJWCzkKBnLHkB3l3acL61tc1GznKkAu61DIB97PLPXEzuW/DSY/bz71i+mtm0bH0mnIahW3d5cMb2DZyD+ngPlOZr9FNQRlgE8GPGb31f7HzvahwDgbqA9DnnO0esdRmcPUdXePLtwep0vQY5492f39PK7fRm1RkFT5Zmp1Gjer3lI8ek9helTnh8xNbrdl12gggcc9O8rxddbf5L8/wDTcZN43TXeqH0kOl1f8LYR7HVkKN4+5cAd1h2z7vxE97Bny1tbZb6G5eYBO9Ww7gjr3n05o3LVoxzlkRjnuVBnpTKZSWPJuNxtxv0alSJYTEtFaEwg3WHYQbiSgq4iziOOItYIQTcRWwRxxFbBIQSsEkvYJIFqxG6xFqxG6xAZrEaQQFYjVYgGQQ6iCQRhBAsomWmVEjSMkz2BZOH9aelFuzLs863psXlz31X9mM7h5yHpbcLQ+kIAW2rfdjnIAYYwO+ROfPLt811cPHc72xzno5pSmkr3AN4r1zjPKKa02Vtx1aAn8hROeeWJ0Gy9J7OkV593KkjrxM1Gu9HtPneKLnJJbjnPHOeM8uybuVe1hv4w1pcugZ91iPzKMAzX6zWWFitVdZUcN53xx74j1CBECpkqAMc8Yx0mo1OxPbOHW21CCMqjFeR+krxyb3fTTPu14D1WlbVvoktrXI2hpkYD3XRiSR5YE9iThPOdHphpjQ9hexdPeLcgKXOK3A7Z4kT0LR3raiWIco6q6nwIzPV6fOXHTxeqwsy3rxTay2JhRL4nU5KowgnEO0G4kqlnEWsEbcRewQqSsEVsEdsEUsEgI2CZlrRJAtUI3WIrVHK4DNYjSCLVxpIB0EYQQKQ6QLiYaWEw0i+kwtbOV9LNltequhIZVZGKjJ3CQc468vrOssEXcZnPyYzKadXDyXDKZT6croK9xApAG6ApxnHAYim1E3iQeC4JYntN3rgEfHLeUH45M0+09nLqVAJI3GVxgnG8p4Aj8w8JwZ4a/i9Ti5N3uaC7V4Lfzm4gKQMFFA7dpfZ1hbB9pv7mQScbxUnrG9ReaiwanTvvHj/IGMdBwiOh0RWxrRhBZgeyRcIMdcZOJW4yT26u7L3rUbPaRcqgRc7zgNy4Lgj4mdxsnS+xpqr/AEVoh8wADNfsHQIVFjKCwJCE9B3xN2g4zv6bi7Zu/bx+r5u+9s9QZBLgSqiXnW4KoZVxCESjSSl3EWcRpxF3kKlLBFLBHLIpYICVsktbJAlUcqilcbrgN1xpIrXGkgM1wywNcMsAgmGmRKtIqYG8CRCuYB24ZPASJhutZdOf27YDYFU5ZVG9j8ueU1I13s8hwcfqHKUs1H/WXqx4uldi57fiXH0jAUMOIHAnP1nldTLjyWSvY4Nfjm419uvrc53lx4y+msR2AXBLMAMdycRO/Z9ZfIHNs/WbXZGnRbq+g3wfl0mXFO7Of7bc+XbhdfUdvRWEUKOAUAD4QijjMCWXpPd1qPn+7fkUS0wJmFWDKNLmUaEAtFrIzZFrJCCtkUsjdkUsgKWySWSQJVG64nVHKjAbrjVcVrjVcBmuGWAWYttI4DAPDj5yZN+AxZaF5nyHUnymr1e190fhXiSEBYj3icfCWYHOTkkEnj3xiavV1q4bIBVgDg/q4gj5zfDjl9ot02NLknLPvZ6ZGB4Y6QmqbK47/tOE21spPYBQCGusU5453RyE3Xo3pkorNa/hdjvlj+YDAxNrxandEd+/Dm/SRimvBHDOlT5h3jtGvwOI59Zp/WZqLNFfp9UAHqtRqHQ8N10O9kHpkH6RDZnpTpLVw1nsm/TYpA8t7lPA63gzvJcpHt9J1HH+OY5XzHT7wY5Ai76lhqNKqn3r/wAQ7qEc4ii7X0oUn+J04Hf2qZx5dYnsXbNWq2np6aiXVVvZrMHG8K2IwPhM+k4s/wAstniVfquXD8d/l7es03YHHiB25xmpw2CDma6s4+8G+p3D+ENnhx5DB65nv5Ybvh4OOWm9WWEV0mpFgBB48Mj7+UbBnNlLLqr72wYNpcyjSEAtFrIw8XsgK2RSyN2GKWQFLJJi2SBiqOVmJVmOVmA3WY2hidcZQwGlaLj8bsP0oP7zcf8ASFU/884rp3/nXDtuH4EGacc90vgxneXP5hzHiOkQfT726o907zk9lLM33jN7bhJ5BgDnsw4ZgNqWbunZlwrOiIpHRnKqD9ZrjbLNK1rdRT/ENXgcMs4/sg7oHlwhb6Nx1Zfy4+k2Wm04QnHJQqL5KJTUV5E2xz86+lNacJ63wLNmVvgArqq8+H4XH3niAGeU919ZdQs2XcPzVW03KOPRgh+jzwmcvLNZNMfQj1MoyQQO87D1S1ltq0447teoY+Xs2H3nHtczDdJJA6T0H1IpnabMRwTSXHPYlkGZSeLuJr2axipz0BAbwBHPET1erGdxBvbu6XPQK2Rw7zpiqN0U58BNTptmDfdjwHtLBjHNCcgTbHln2zuP6A0QKYGTni2fAk8JuqLN4eIxkRG/S7roq8SUI446GE0pIdgeH4RkeIOfvIzsym4nG2XR8mUeZzKOZiuC5i7mHcxZzIC1hithjVhilhgKWmSYtMkCtZjdZiVZjdZgPVmMoYnWYyhgM1/6RC0lNUe1lf1U5j1UU2gQWVxzqcE/2TwImvFfOkZL7RcLUzkZVVYsO6EcYvttMJpUGcNfQMeAGf8ASPXgmt1XGWRim9yJxy8pfaNO+aP6bEbHiJaXViLNjLpyGx0GWJ8SYPUU46TZCL6jj8JTHK7LHLba2T/FafVUYybdNcqZ6WBcqfDjifM5GOBn19p6xvZ7A/WfKfpHpfYazVVAYFeq1CKOyixgJPJl3VOPiNXPTvUdWTq9S/RdIF+LWKf8pnm/svtPXfUXozu66zx01Y8cB2x58pWeCvVt88O3GXXU7oHgRn4kcYO5cD/nOAUcx3mvbLFLdC6jU4srOCfwufoBjPxhWsChTwy78fDIms1bFNwnufljMll++EA6hm+h4yfxeJYiZeW7BlWMoj5APcA/MZkYzDJso5i1hhnMWcyqALDE7DGbDFLDAWtMkrYZIFKzHKzEKzG6zAerMZQxOsxpDAbrMW1BxZg8nU/MQ9Zi+0sgJYOaOM+RmnH7Vy9A6q9kqYj3qwWXxA6TYW6jNlY5ZK4885gdTWj1s2QAy5z0xiXaoG6s9Fx8908ZpbLETbYqzBsdDCsuczIMsDMNrhVKQfP958wesWrc2trh31LP8WAb7z6ftqVsZ/KwZeJGGGePjPl/1iWb+1dce2qdf7uF+0b2NCbR27T3n1IVBdnWOf8Au6yzp+lEGRPB105KFvkJ9IeqzQex2TpM8DYr3kH+t2IPyxJK6jUYbAGOJ/YExPd5wloKsqk5O6ST8phD3muHiKVpfSC0/wApB71lgRfjjjD0plmPRFCj5Smv0xfU1P8AlprsIHexyqg/LPzjiV7qY6k8fMnM27tYyM9bpvTN+ADtkS7GBqOMjyly05cvbeelHMWsMM5i1hlACwxWww9hilhgAsMxKWGSBSsxqsxKto1W0B6to0hiNbRlGgPVmEtTfRl7g/PnFkaMo0mXV2VrHG/pr6iSuabNxhzAKkfMTaaZt50xx/DvfDdAmv1K7m/0zvFfIg8ITYtm+R3SisHzYf7Tos3jcopP03wMuDAq0sDOZcbM+TvS602a/Wufza3U/wD0afVjuFBY8lBJ8gM5nyNrW3yz8zZbY2e+WPGTAbSn+Uw8D959T+j+l9hpNNVwHstNQhxyyEUEz5f2FX7Syqv/AMl1dYz3ZwPvPq4cPAD9hFTSSvvahh0VN39jMaivBOILQtvWO3cE/DMZ1LAce/2mnrKSKe41NluLFXwBx8YxZYB05Z+Zimh3btVex/7aoiqPLJMPYm++Byzk/wBkTXKzclUglBJ4nryHgIQtKtwOOwlC0wyu2mPpHaLO0K7RaxpRINjRSxoexorY0AFhmYOxpIA6zGq2iKNGq2gPVtGUaIo0ZRoDyNDq0TRowjQK7TQtWccCVZQ3YkHBml9Edd7S+5eJ3UUfBSBN9Yu+jKObKQCehxwM4r1aq3tdWXBDoVrYHo28wI/wzr4speLKVTKfyj0lWlw0XVpcNORcj6QatqdLrLMACvSXOj5z+MI5wR06T5f1CYrTwAPzn0T6ytX7PZWrOQC9a1DPXfdVI+RM+ftYn4cdh9QJaJjZ+ryn2m0dGmAcamtznsn4z/6z6V1lu4jH+kgeZ4T549Ude9tWjIyFS5/IitgD9Z7vti//APNOrMWPksnHHuykVyuoJs0YJP8ASB9YTXHiCeQB/fnKaDr8Irt/UBKyCcF1ZF+IxmaSW8mor/i0voTv2jUah8j+IsZq1PSssxB/adLWu7k9W/YdJqtgJhScAKAFUDwxNqzxz/KxOPoF24n4QbNI7c/MCBZpktEdou7S7tF3aVA7GitjQrtFrGgBsaZgnaSAJGjVbRJGjCNAeRoyjRFGjCNAeRodWiaNDo8B1Wms2TohRq9Yw5aj2NwHid8H47wJ+McRoo2vVdZXSeDWaZ3B7hHXh/iMvjbqyfaK3ivCB4qry5swCeJwCcAEnAGcY6mUS4/1uX42elYIzdq6Ex3Vd5/8onjWo4sV/p/2nqXrV1G+2irB4Z1F7DH6VVAf8RnmVyg3EcPcB6d5aVaTw6P1LITtJ2xwXSW5PYlkE9X1N/tNSwHJMIPhxP1nmPqaO5rNW2Pd0rcfH2icJ6LspS1xJ7lifHvNuKSS5fpln9R0lK7gx16+eOU4/wBYVdjnSBG3FD2mxuylV4Y6zrt6ct6YuS2nUAHeZ+fgFjp7/dlM/ic9Ghmoc9xMKgOeJA97xm4ZotoqhVWiAAYAzj9RGTLu8py5d2dsTjNQEvz8/tBs8w78T4fvBM8pVoy7wDtMu8A7yoo7RZ2hHaLO0AbtJBu0kASNDo0kkBlHjCNMyQGEeHR5JIBkeB12nV8WbubKA71MPeyRxXPYySS2PyRfQux9QbKKXPN6kc+ZUR8PMySMvlSenl3rI1O9rUXj/L0qDHDm7uSfoJwjv/1I8UI+uZJJDSenceqikqde/Rnor+rtz+U9B2UhFlhPQKvzOZJJ0Y/Cscvk2Yfn5/aaLbCF9XpBxwFtJHgChzJJKcXy/wCJvpuWaBd5JJksTD5ye5MGzSSS1IE7wLtMySKmlnaLu0kkhBd2kkkgf//Z" alt="User picture">
          </div>
          <!-- user information -->
          <div class="user-info">
            <span class="user-name">
              <strong><?php echo $_SESSION['adminusername']; ?></strong>
            </span>
            <!-- rule(admin or user) -->
            <span class="user-role">Administrator</span>
            <span class="user-status">
              <i class="fa fa-circle"></i>
              <span>Online</span>
              <!-- char2 status -->
            </span>
            <!-- sign out icon -->
            <a href="logoutadmin.php" class="nav__link">
              <i class='bx bx-log-out nav__icon'></i>
              <span class="nav__name text-muted"> <i class="fa fa-sign-out text-muted" aria-hidden="true"></i>Sign out</i></span>
            </a>
          </div>
        </div>
        <!-- sidebar seatch bar  -->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>General</span>
            </li>
            <li class="sidebar-dropdown">
              <a href="adminpage.php">
                <i class="fa fa-tachometer-alt"></i>
                <span>Dashboard</span>
                <span class="badge badge-pill badge-warning">New</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Products Archived
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Dashboard 2</a>
                  </li>
                  <li>
                    <a href="#">Dashboard 3</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a>
                <i class="fa fa-shopping-cart"></i>
                <span>Products</span>
                <!-- product dropdown (query) -->
                <?php

                // db connection
                $servername = "remotemysql.com";$username = "zlTTPwailO";$password = "BUkhRiFNyW";$dbname = "zlTTPwailO";
                //execute query for connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                //initialize count to 0
                $count = 0;
                //query that selects all data from products table
                $query = ("SELECT * FROM products;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";

                ?>

              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="products.php">Products

                    </a>
                  </li>
                  <li>
                    <a href="seeorders.php">Orders</a>
                  </li>

                  <li>
                    <a href="seeorderhistory.php">Order History</a>
                  </li>

                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="far fa-gem"></i>
                <span>User Requests</span>
                <!-- user requests dropdown (query) -->
                <?php

                // db connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dami";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $count = 0;

                $query = ("SELECT * FROM request;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";

                ?>

              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="seeuserrequest.php">Show Requests</a>
                  </li>

                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown">
              <a href="seeproductarchived.php">
                <i class="fa fa-chart-line"></i>
                <span>Products Archived</span>
                <!-- products archived dropdown (query) -->
                <?php
                //db connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dami";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $count = 0;

                $query = ("SELECT * FROM archivedproducts;");
                $query_run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_run)) {
                  $count++;
                }
                echo "<span class='badge badge-pill badge-danger'>$count</span> ";

                ?>


              </a>

            </li>
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-globe"></i>
                <span>Maps</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="map.php">Google maps</a>
                  </li>
                  <li>
                    <a href="map.php">Open street map</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="header-menu">
              <span>Extra</span>
            </li>
            <li>
              <a href="documentation.php">
                <i class="fa fa-book"></i>
                <span>Documentation</span>
                <span class="badge badge-pill badge-primary">Beta</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-folder"></i>
                <span>Examples</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      <div class="sidebar-footer">
        <a href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
          <i class="fa fa-cog"></i>
          <span class="badge-sonar"></span>
        </a>
        <a href="#">
          <i class="fa fa-power-off"></i>
        </a>
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
      <div class="container-fluid">
        <h2>Archived Products</h2>
        <hr>
        <br><br>



        <style>
          /* TABLE */

          #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 35%;
            /* Full-width */
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

        <!-- USERS  PRODUCT REQUEST -->



        <table id="myTable">
          <h4>Search: &nbsp; <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for brand.."></h4>

          <thead class="table-dark">

            <tr>
              <!-- <th scope="col">productId</th> -->
              <!-- table header -->
              <th scope="col">productId</th>
              <th scope="col">productPhoto</th>
              <th scope="col">productName</th>
              <th scope="col">productBrand</th>
              <th scope="col">productDescription</th>
              <th scope="col">productPrice</th>
              <th scope="col">stocks</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <!-- query for archived products -->
          <?php
          // db connection
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "dami";

          $conn = new mysqli($servername, $username, $password, $dbname);
          //  echo $_SESSION['UserId'];
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          } else {

            $sql = "SELECT * FROM `archivedproducts`";
            $result = $conn->query($sql);
            $count = 1;
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {

          ?>
                <!-- insert data via is value -->
                <tr>

                  <td>
                    <?php echo  $row['productId']; ?>
                  </td>

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
                    <style>
                      .fa-recycle {
                        font-size: 1rem;
                      }
                    </style>
                    <a href="connection.php?unarchivedproduct=<?php echo $row['productId']; ?>&unarchivedphoto=<?php echo $row['productPhoto']; ?>&unarchivedname=<?php echo $row['productName']; ?>&unarchivedbrand=<?php echo $row['productBrand']; ?>&unarchivedDescription=<?php echo $row['productDescription']; ?>&unarchivedPrice=<?php echo $row['productPrice']; ?>&un   archivedstocks=<?php echo $row['stocks']; ?>" class="btn btn-warning">Unarchived</a>
                  </td>

                </tr>

              <?php } ?>
            <?php } ?>
          <?php } ?>

<!-- closing -->

      </div>

      <!-- END  -->

      <footer class="text-center">

      </footer>
  </div>
  </main>
  <!-- page-content" -->
  </div>
  <!-- page-wrapper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>


<style>
  @keyframes swing {
    0% {
      transform: rotate(0deg);
    }

    10% {
      transform: rotate(10deg);
    }

    30% {
      transform: rotate(0deg);
    }

    40% {
      transform: rotate(-10deg);
    }

    50% {
      transform: rotate(0deg);
    }

    60% {
      transform: rotate(5deg);
    }

    70% {
      transform: rotate(0deg);
    }

    80% {
      transform: rotate(-5deg);
    }

    100% {
      transform: rotate(0deg);
    }
  }

  @keyframes sonar {
    0% {
      transform: scale(0.9);
      opacity: 1;
    }

    100% {
      transform: scale(2);
      opacity: 0;
    }
  }

  body {
    font-size: 0.9rem;
  }

  .page-wrapper .sidebar-wrapper,
  .sidebar-wrapper .sidebar-brand>a,
  .sidebar-wrapper .sidebar-dropdown>a:after,
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
  .sidebar-wrapper ul li a i,
  .page-wrapper .page-content,
  .sidebar-wrapper .sidebar-search input.search-menu,
  .sidebar-wrapper .sidebar-search .input-group-text,
  .sidebar-wrapper .sidebar-menu ul li a,
  #show-sidebar,
  #close-sidebar {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
  }

  /*----------------page-wrapper----------------*/

  .page-wrapper {
    height: 100vh;
  }

  .page-wrapper .theme {
    width: 40px;
    height: 40px;
    display: inline-block;
    border-radius: 4px;
    margin: 2px;
  }

  .page-wrapper .theme.chiller-theme {
    background: #1e2229;
  }

  /*----------------toggeled sidebar----------------*/

  .page-wrapper.toggled .sidebar-wrapper {
    left: 0px;
  }

  @media screen and (min-width: 768px) {
    .page-wrapper.toggled .page-content {
      padding-left: 300px;
    }
  }

  /*----------------show sidebar button----------------*/
  #show-sidebar {
    position: fixed;
    left: 0;
    top: 10px;
    border-radius: 0 4px 4px 0px;
    width: 35px;
    transition-delay: 0.3s;
  }

  .page-wrapper.toggled #show-sidebar {
    left: -40px;
  }

  /*----------------sidebar-wrapper----------------*/

  .sidebar-wrapper {
    width: 260px;
    height: 100%;
    max-height: 100%;
    position: fixed;
    top: 0;
    left: -300px;
    z-index: 999;
  }

  .sidebar-wrapper ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .sidebar-wrapper a {
    text-decoration: none;
  }

  /*----------------sidebar-content----------------*/

  .sidebar-content {
    max-height: calc(100% - 30px);
    height: calc(100% - 30px);
    overflow-y: auto;
    position: relative;
  }

  .sidebar-content.desktop {
    overflow-y: hidden;
  }

  /*--------------------sidebar-brand----------------------*/

  .sidebar-wrapper .sidebar-brand {
    padding: 10px 20px;
    display: flex;
    align-items: center;
  }

  .sidebar-wrapper .sidebar-brand>a {
    text-transform: uppercase;
    font-weight: bold;
    flex-grow: 1;
  }

  .sidebar-wrapper .sidebar-brand #close-sidebar {
    cursor: pointer;
    font-size: 20px;
  }

  /*--------------------sidebar-header----------------------*/

  .sidebar-wrapper .sidebar-header {
    padding: 20px;
    overflow: hidden;
  }

  .sidebar-wrapper .sidebar-header .user-pic {
    float: left;
    width: 60px;
    padding: 2px;
    border-radius: 12px;
    margin-right: 15px;
    overflow: hidden;
  }

  .sidebar-wrapper .sidebar-header .user-pic img {
    object-fit: cover;
    height: 100%;
    width: 100%;
  }

  .sidebar-wrapper .sidebar-header .user-info {
    float: left;
  }

  .sidebar-wrapper .sidebar-header .user-info>span {
    display: block;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-role {
    font-size: 12px;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-status {
    font-size: 11px;
    margin-top: 4px;
  }

  .sidebar-wrapper .sidebar-header .user-info .user-status i {
    font-size: 8px;
    margin-right: 4px;
    color: #5cb85c;
  }

  /*-----------------------sidebar-search------------------------*/

  .sidebar-wrapper .sidebar-search>div {
    padding: 10px 20px;
  }

  /*----------------------sidebar-menu-------------------------*/

  .sidebar-wrapper .sidebar-menu {
    padding-bottom: 10px;
  }

  .sidebar-wrapper .sidebar-menu .header-menu span {
    font-weight: bold;
    font-size: 14px;
    padding: 15px 20px 5px 20px;
    display: inline-block;
  }

  .sidebar-wrapper .sidebar-menu ul li a {
    display: inline-block;
    width: 100%;
    text-decoration: none;
    position: relative;
    padding: 8px 30px 8px 20px;
  }

  .sidebar-wrapper .sidebar-menu ul li a i {
    margin-right: 10px;
    font-size: 12px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    border-radius: 4px;
  }

  .sidebar-wrapper .sidebar-menu ul li a:hover>i::before {
    display: inline-block;
    animation: swing ease-in-out 0.5s 1 alternate;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown>a:after {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f105";
    font-style: normal;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    background: 0 0;
    position: absolute;
    right: 15px;
    top: 14px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
    padding: 5px 0;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
    padding-left: 25px;
    font-size: 13px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
    content: "\f111";
    font-family: "Font Awesome 5 Free";
    font-weight: 400;
    font-style: normal;
    display: inline-block;
    text-align: center;
    text-decoration: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin-right: 10px;
    font-size: 8px;
  }

  .sidebar-wrapper .sidebar-menu ul li a span.label,
  .sidebar-wrapper .sidebar-menu ul li a span.badge {
    float: right;
    margin-top: 8px;
    margin-left: 5px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
  .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
    float: right;
    margin-top: 0px;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-submenu {
    display: none;
  }

  .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a:after {
    transform: rotate(90deg);
    right: 17px;
  }

  /*--------------------------side-footer------------------------------*/

  .sidebar-footer {
    position: absolute;
    width: 100%;
    bottom: 0;
    display: flex;
  }

  .sidebar-footer>a {
    flex-grow: 1;
    text-align: center;
    height: 30px;
    line-height: 30px;
    position: relative;
  }

  .sidebar-footer>a .notification {
    position: absolute;
    top: 0;
  }

  .badge-sonar {
    display: inline-block;
    background: #980303;
    border-radius: 50%;
    height: 8px;
    width: 8px;
    position: absolute;
    top: 0;
  }

  .badge-sonar:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    border: 2px solid #980303;
    opacity: 0;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    animation: sonar 1.5s infinite;
  }

  /*--------------------------page-content-----------------------------*/

  .page-wrapper .page-content {
    display: inline-block;
    width: 100%;
    padding-left: 0px;
    padding-top: 20px;
  }

  .page-wrapper .page-content>div {
    padding: 20px 40px;
  }

  .page-wrapper .page-content {
    overflow-x: hidden;
  }

  /*------scroll bar---------------------*/

  ::-webkit-scrollbar {
    width: 5px;
    height: 7px;
  }

  ::-webkit-scrollbar-button {
    width: 0px;
    height: 0px;
  }

  ::-webkit-scrollbar-thumb {
    background: #525965;
    border: 0px none #ffffff;
    border-radius: 0px;
  }

  ::-webkit-scrollbar-thumb:hover {
    background: #525965;
  }

  ::-webkit-scrollbar-thumb:active {
    background: #525965;
  }

  ::-webkit-scrollbar-track {
    background: transparent;
    border: 0px none #ffffff;
    border-radius: 50px;
  }

  ::-webkit-scrollbar-track:hover {
    background: transparent;
  }

  ::-webkit-scrollbar-track:active {
    background: transparent;
  }

  ::-webkit-scrollbar-corner {
    background: transparent;
  }


  /*-----------------------------chiller-theme-------------------------------------------------*/

  .chiller-theme .sidebar-wrapper {
    background: #31353D;
  }

  .chiller-theme .sidebar-wrapper .sidebar-header,
  .chiller-theme .sidebar-wrapper .sidebar-search,
  .chiller-theme .sidebar-wrapper .sidebar-menu {
    border-top: 1px solid #3a3f48;
  }

  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    border-color: transparent;
    box-shadow: none;
  }

  .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-role,
  .chiller-theme .sidebar-wrapper .sidebar-header .user-info .user-status,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text,
  .chiller-theme .sidebar-wrapper .sidebar-brand>a,
  .chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
  .chiller-theme .sidebar-footer>a {
    color: #818896;
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>a,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a,
  .chiller-theme .sidebar-wrapper .sidebar-header .user-info,
  .chiller-theme .sidebar-wrapper .sidebar-brand>a:hover,
  .chiller-theme .sidebar-footer>a:hover i {
    color: #b8bfce;
  }

  .page-wrapper.chiller-theme.toggled #close-sidebar {
    color: #bdbdbd;
  }

  .page-wrapper.chiller-theme.toggled #close-sidebar:hover {
    color: #ffffff;
  }

  .chiller-theme .sidebar-wrapper ul li:hover a i,
  .chiller-theme .sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu:focus+span,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
    color: #16c7ff;
    text-shadow: 0px 0px 10px rgba(22, 199, 255, 0.5);
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu ul li a i,
  .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div,
  .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
  .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
    background: #3a3f48;
  }

  .chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
    color: #6c7b88;
  }

  .chiller-theme .sidebar-footer {
    background: #3a3f48;
    box-shadow: 0px -1px 5px #282c33;
    border-top: 1px solid #464a52;
  }

  .chiller-theme .sidebar-footer>a:first-child {
    border-left: none;
  }

  .chiller-theme .sidebar-footer>a:last-child {
    border-right: none;
  }

  .sidebar-wrapper .sidebar-header .user-pic img {
    object-fit: cover;
    height: 6%;
    width: 100%;
  }
</style>

<script>
  jQuery(function($) {

    $(".sidebar-dropdown > a").click(function() {
      $(".sidebar-submenu").slideUp(200);
      if (
        $(this)
        .parent()
        .hasClass("active")
      ) {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .parent()
          .removeClass("active");
      } else {
        $(".sidebar-dropdown").removeClass("active");
        $(this)
          .next(".sidebar-submenu")
          .slideDown(200);
        $(this)
          .parent()
          .addClass("active");
      }
    });

    $("#close-sidebar").click(function() {
      $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function() {
      $(".page-wrapper").addClass("toggled");
    });




  });
</script>