<?php
include("./database.php");
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $query = $connection->prepare("SELECT * tablets");
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO tablets (name) VALUES (:name)");
        $query->bindParam("name", $name, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<script>alert(updattion succesfull)</script>';
            header("location: ./inserttablet.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Tablets</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6">
                    <form action="./inserttablet.php" method="post" role="form">
                        <div class="row">
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="name" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit" name="submit">Submit</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
</body>
<!-- Vendor JS Files -->
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</html>