<?php

require_once('db.php');

if(!isset($_GET['id']) || $_GET['id'] == ""){
    header('Location:index.php');
}

$foodid     = $_GET['id'];

$selectfood = "SELECT * FROM `items` WHERE id='$foodid' LIMIT 1";
$result     = mysqli_query($con,$selectfood);
$row_data   = mysqli_fetch_assoc($result);

$id         = $row_data['id'];
$name       = $row_data['name'];
$image      = $row_data['image'];
$desc       = $row_data['description'];
$gwp        = $row_data['gwp'];
$cfp        = $row_data['cfp'];
$cal        = $row_data['calaries'];

$selectcertificates = "SELECT * FROM `itembrand` WHERE itemid='$id'";
$resultcertificate  = mysqli_query($con,$selectcertificates);
$numrow_data        = mysqli_num_rows($resultcertificate);

$selectfood_s = "SELECT * FROM `items`";
$result_s     = mysqli_query($con,$selectfood_s);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Search Result - SUSTAINABLE</title>
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
                    <li class="nav-item" role="presentation"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="#">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-flag"></i>&nbsp;</a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="#">EN</a><a class="dropdown-item" role="presentation" href="#">SP</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-white text-center pt-5" style="background: url('assets/img/bg-masthead.jpg')no-repeat center center;background-image: url(&quot; &quot;);background-color: #ffffff;">
        <div class="overlay" style="background-color: rgba(0,0,0,0);"></div>
        <div class="container">
            <div class="row ">
                <div class="col ">
                <form action="result.php" method="GET" class="mb-3">
                        <div class="form-row">
                            <div class="col-8 col-md-9 mb-2 mb-md-0">
                               
                                <select name="id" id="itemId" required  class="form-control form-control-sm">
                                    <option value="">Select Food</option>
                                    <?php
                                    
                                    while($row_data_s   = mysqli_fetch_assoc($result_s)){
                                        ?>
                                            <option value="<?php echo $row_data_s['id'];?>"><?php echo $row_data_s['name'];?></option>
                                        <?php
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="col-4 col-md-3"><button class="btn btn-success btn-block btn-lg" type="submit">Search</button></div>
                        </div>
                    </form>
                    <h3 class="text-info">Search Result "<em><?php echo $name; ?></em>"</h3>
                    <hr>
                </div>
            </div>
            <div class="row text-dark px-3">
                <div class="col-lg-4 col-xl-4 mx-auto border p-3">
                    <h5 class="text-uppercase text-left text-dark">A brief overview</h5>
                    <hr><img class="img-fluid p-4" src="<?php echo $image; ?>">
                    <hr>
                    <p><?php echo $desc; ?></p>
                </div>
                <div class="col border py-3">
                    <div class="text-left">
                        <h5 class="text-uppercase text-left"><strong>Carbon Foot Print (g CO2 eq. kg−1 fresh wt.)&nbsp;</strong></h5>
                        <hr>
                        <div>
                            <div class="row no-gutters">
                                <div class="col-lg-3 align-self-center">
                                    <h6><strong>GWP:&nbsp;</strong><?php echo $gwp; ?></h6>
                                    <h6><?php echo $cfp; ?></h6>
                                </div>
                                <div class="col">
                                    <?php 
                                    
                                    $rate = $cfp;

                                    if($rate == "Low"){
                                        ?>  <img class="img-fluid" src="assets/img/LW.png"> <?php
                                    }elseif($rate == "Medium"){
                                        ?>  <img class="img-fluid" src="assets/img/MD.png"> <?php
                                    }elseif($rate == "High"){
                                        ?>  <img class="img-fluid" src="assets/img/L.png"> <?php
                                    }elseif($rate == "Very High"){
                                        ?>  <img class="img-fluid" src="assets/img/VH.png"> <?php
                                    }
                                    
                                    ?>
                                   
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="text-left">
                        <h5 class="text-uppercase text-left"><strong>Calories/kg</strong></h5>
                        <hr>
                        <div>
                            <h6><strong>&nbsp;&nbsp;</strong><?php echo $cal; ?></h6>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5 class="text-uppercase text-left">Brands</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm text-left">
                                <thead>
                                    <tr>
                                        <th><strong>Recommended Brands</strong><br></th>
                                        <th><strong>Certification</strong><br></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    if($numrow_data > 0){

                                        while( $certificationdata = mysqli_fetch_assoc($resultcertificate) ){
                                            ?>

                                            <tr>
                                                <td> <?php echo $certificationdata['brand']; ?> </td>
                                                <td> <?php echo $certificationdata['certification']; ?> </td>                                               
                                            </tr>

                                            <?php
                                        }

                                    }else{
                                        ?>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
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
        </div>
    </header>
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