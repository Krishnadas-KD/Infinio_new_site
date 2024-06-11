<?php
include('./admin/includes/config.php');
$id = $_GET['id'];
$sql = "SELECT * from blog where status='1' AND id='$id' ";
$query = $dbh->prepare($sql);
$query->execute();
$userArr = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog - Infinio Technologies</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custome.css" rel="stylesheet">
</head>

<body>




    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Blog</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php echo substr(strval(htmlentities($userArr[0]->title)), 0, 10); ?>...</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">

                <h1 class="mb-4 text-center"><?php echo htmlentities($userArr[0]->title); ?></h1>
                <h6 class="mb-2 pt-sm-4"><b>Posted By : <?php echo htmlentities($userArr[0]->autherName); ?> - </b><?php echo  date_format(date_create($userArr[0]->date), 'd/m/Y'); ?></h6>

                <div class="col-md-12 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn d-flex justify-content-center align-items-center" data-wow-delay="0.3s">
                    <img class="img-fluid" src="./admin/uploads/<?php echo $userArr[0]->image ?>" alt="">
                </div>

            </div>
            <div class="row g-5 ">
                <div class="col-lg-12 wow  fadeIn" data-wow-delay="0.1s">  
                           
                    <p class="mb-4"><?php echo $userArr[0]->content ?></p>
                </div>
               
                
               
            </div>
        </div>
    </div>
    <!-- Team End -->


   



</body>

</html>
<?php }
?>