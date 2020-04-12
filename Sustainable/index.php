<?php

require_once('db.php');

$selectfood = "SELECT * FROM `items`";
$result     = mysqli_query($con,$selectfood);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - SUSTAINABLE</title>
    <meta name="description" content="Environmental Search Engine &quot;Sustainable&quot;">
    <link rel="icon" type="image/svg+xml" sizes="150x150" href="assets/img/food.svg">
    <link rel="icon" type="image/svg+xml" sizes="150x150" href="assets/img/food.svg">
    <link rel="icon" type="image/svg+xml" sizes="150x150" href="assets/img/food.svg">
    <link rel="icon" type="image/svg+xml" sizes="150x150" href="assets/img/food.svg">
    <link rel="icon" type="image/svg+xml" sizes="150x150" href="assets/img/food.svg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-success shadow navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.php" style="font-weight: bold;">SUSTAINABLE</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                     <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="#">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-flag"></i>&nbsp;</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="#">EN</a><a class="dropdown-item" role="presentation" href="#">SP</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background: url('assets/img/bg-masthead.jpg')no-repeat center center;background-image: url(&quot; &quot;);background-color: #ffffff;">
        <div class="overlay" style="background-color: rgba(0,0,0,0);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="text-success mb-5">Find your environmentally friendly needs!</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form action="result.php" method="GET">
                        <div class="form-row">
                            <div class="col-8 col-md-9 mb-2 mb-md-0">
                                <select name="id" id="itemId" required  class="form-control form-control-lg">
                                    <option value="">Select Food</option>
                                    <?php
                                    
                                    while($row_data   = mysqli_fetch_assoc($result)){
                                        ?>
                                            <option value="<?php echo $row_data['id'];?>"><?php echo $row_data['name'];?></option>
                                        <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="col-4 col-md-3"><button class="btn btn-success btn-block btn-lg" type="submit">Search</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="features-icons text-center py-0" style="background-color: rgb(255,255,255);">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/fruit.svg"></div>
                        <h5>Fruits</h5>
                    </div>
                </div>
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/carrot.svg"></div>
                        <h5>Veggies</h5>
                    </div>
                </div>
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/dairy.svg"></div>
                        <h5>Dairy</h5>
                    </div>
                </div>
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/rice.svg"></div>
                        <h5>Grains</h5>
                    </div>
                </div>
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/protein.svg"></div>
                        <h5>Protein</h5>
                    </div>
                </div>
                <div class="col-4 col-lg-2 col-xl-2 text-center icon-box">
                    <div class="text-center mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="text-center d-flex features-icons-icon"><img class="img-fluid icon-img" src="assets/img/food.svg"></div>
                        <h5>Assorted</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <link href="assets/js/jquery-ui.min.css" rel="stylesheet" />
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/combobox.js"></script>
    

    <script type="text/javascript">

    $(document).ready(function()
    {
        $("#itemId").combobox();
    });

    </script>
</body>

</html>