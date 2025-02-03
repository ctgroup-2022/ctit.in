<?php
$students = [
    ["name" => "Manish", "package" => "$120,000", "image" => "img/place/1.jpg", "company" => "Google", "cv" => "cvs/manish.pdf", "placement_year" => 2023],
    ["name" => "Bob Smith", "package" => "$110,000", "image" => "img/place/2.jpg", "company" => "Facebook", "cv" => "cvs/bob.pdf", "placement_year" => 2022],
    ["name" => "Charlie Brown", "package" => "$115,000", "image" => "img/place/3.jpg", "company" => "Amazon", "cv" => "cvs/charlie.pdf", "placement_year" => 2023],
    ["name" => "Diana Prince", "package" => "$125,000", "image" => "img/place/4.jpg", "company" => "Microsoft", "cv" => "cvs/diana.pdf", "placement_year" => 2021],
    ["name" => "Evan White", "package" => "$118,000", "image" => "img/place/5.jpg", "company" => "Apple", "cv" => "cvs/evan.pdf", "placement_year" => 2022],
    ["name" => "Fiona Green", "package" => "$122,000", "image" => "img/place/6.jpg", "company" => "Netflix", "cv" => "cvs/fiona.pdf", "placement_year" => 2023],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Favicon -->
     <link href="img/favicon1.ico" rel="icon">
   

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            height: 55vh;
            position: relative;
            overflow: hidden;
        }
        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .student-card {
            background-color: #ffffff;
            color: #000000;
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
        }
        .student-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        .rounded-circle img {
            transition: transform 0.3s;
        }
        .student-card:hover .rounded-circle img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <img src="img/ctimg.jpeg" alt="Hero Image">
        <div class="hero-overlay">
            <h1 class="text-white text-center fw-bold display-4">Shaping Future Tech Leaders</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container py-5">
        <h2 class="text-dark text-center fw-bold mb-5 display-5">Our Brilliant Students</h2>
        <div class="row g-4">
            <?php foreach ($students as $index => $student): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card student-card shadow-sm rounded">
                        <div class="card-body text-center">
                            <div class="mb-3 position-relative mx-auto rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 5px solid black;">
                                <img src="<?= $student['image'] ?>" alt="<?= $student['name'] ?>" class="img-fluid">
                            </div>
                            <h3 class="card-title fs-4"><?= $student['name'] ?></h3>
                            <p class="text-primary fw-bold"><?= $student['package'] ?></p>
                            <p class="text-secondary">Placed at <?= $student['company'] ?></p>
                            <button class="btn btn-primary text-white fw-semibold rounded-pill px-4 py-2 mt-3" data-bs-toggle="modal" data-bs-target="#profileModal<?= $index ?>">View Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="profileModal<?= $index ?>" tabindex="-1" aria-labelledby="profileModalLabel<?= $index ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="profileModalLabel<?= $index ?>"><?= $student['name'] ?>'s Profile</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="mb-3 position-relative mx-auto rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 5px solid black;">
                                    <img src="<?= $student['image'] ?>" alt="<?= $student['name'] ?>" class="img-fluid">
                                </div>
                                <h3 class="fw-bold"><?= $student['name'] ?></h3>
                                <p class="text-primary fw-bold"><?= $student['package'] ?></p>
                                <p class="text-secondary">Placed at <?= $student['company'] ?></p>
                                <p class="text-secondary">Placement Year: <?= $student['placement_year'] ?></p>
                                <a href="<?= $student['cv'] ?>" target="_blank" class="btn btn-info text-white fw-semibold rounded-pill px-4 py-2 mt-3">View CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php 
include("inc/footer.php") 
?>
</body>
</html>
