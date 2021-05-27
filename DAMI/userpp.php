<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile|Inventory Management System</title>

    <style>
        footer {
            text-align: center;
            padding: 5px;
            color: black;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand"><strong> My Profile</strong></a>
        </div>
    </nav>
    <br><br>

    <div class="container">
        <div class="main-body">
            <!-- back icon -->
            <a href="userpage.php"><i class="fa fa-arrow-left" style="color:#5995fd;" aria-hidden="true"></i>Back</a>
            <br><br>
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="data:image/jpeg;base64,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" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Dave Lyndrex Millan</h4>
                                    <p class="text-secondary mb-1">Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Casay, Dalaguete, Cebu</p>
                                    <button class="btn btn-primary" id="follow">Follow</button>
                                    <button class="btn btn-outline-primary" id="message">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>Website</h6>
                                <span class="text-secondary">https:passerellesnumeriques.org</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline">
                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                    </svg>Github</h6>
                                <span class="text-secondary">https://github.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>Twitter</h6>
                                <span class="text-secondary">https://twitter.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary">https://instagram.com</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">https://facebook.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Dave Lyndrex Paz Millan
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    davelyndrex@gmail.com
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    (239) 816-9029
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Mobile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    +639550399602
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Casay, Dalaguete, Cebu
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                    <small>Web Design</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Website Markup</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>One Page</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Mobile Template</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small>Backend API</small>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <p>Copyright © 2021 PN Philippines. All rights reserved.
            <a href="https://passerellesnumeriques.org">passerellesnumeriques.org</a>
        </p>
    </footer>

    <script>
        $(document).ready(function() {
            $('#follow').on('click', function() {
                alert('EZZZZAAAAAAHH PPPRAAAAAAANNNKKKKKK!');
            });

            $('#message').on('click', function() {
                alert('EZZZZAAAAAAHH PPPRAAAAAAANNNKKKKKK!');
            });
        });
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>