<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CTIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
        .hero {
            height: 60vh;
            background: url('img/ctmain.jpeg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: blue;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero h1 {
            position: relative;
            font-size: 4rem;
            z-index: 1;
            
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .intro-box, .content-box {
            border: 1px solid #ddd;
            padding: 20px;
            height:600px;
            width:600px;
            display: flex;
            gap: 3rem;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!-- Navbar include start -->
    <?php include("inc/menu.php") ?>
    <!-- Navbar include End -->

    <!-- Hero Section Start -->
    <div class="hero">
        <h1 class="display-3 text-white animated slideInDown">NCC</h1>
    </div>
    <!-- Hero Section End -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="list-group flex-column flex-md-row" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-class-list" data-bs-toggle="list" href="#list-class" role="tab" aria-controls="list-class">Introduction</a>
                    <a class="list-group-item list-group-item-action" id="list-labs-list" data-bs-toggle="list" href="#list-labs" role="tab" aria-controls="list-labs">Camp Details</a>
                    <a class="list-group-item list-group-item-action" id="list-medicare-list" data-bs-toggle="list" href="#list-medicare" role="tab" aria-controls="list-medicare">Student Achievements</a>
                    <a class="list-group-item list-group-item-action" id="list-workshop-list" data-bs-toggle="list" href="#list-workshop" role="tab" aria-controls="list-workshop">Certificates</a>
                </div>
            </div>

            <!-- ClassRoom section starts -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-class" role="tabpanel" aria-labelledby="list-class-list">
                    <p>&nbsp;</p>
                    <h4>National Cadet Corps</h4>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 intro-box">
                            <img class="w-100 h-75" src="img/ncc/ncclogo.png">
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 content-box">
                            <p align="justify">The National Cadet Corps is the Indian military cadet corps with its head Quarters at New Delhi. It is open to school and college students on voluntary basis. The National Cadet Corps in India is a voluntary organization which recruits cadets from high schools, colleges and Universities all over India. The Cadets are given basic military training in small arms and parades. The officers and cadets have no liability for active military service once they complete their course but are given preference over normal candidates during selections based on the achievements in the corps.</p>
                            <p align="justify"><strong>18 February 2021 CTIT</strong>, Shahpur campus establishes its NCC unit under 8 Punjab Battalion NCC from NCC headquarters Phagwara The campus got sanction of 54 cadets to be enrolled along with female cadets. Right now we have 35 cadets (SD=26, SW=9). The main objective of NCC to provide military training, the cadets will also learn several other valuable things such as selflessness, honesty, discipline, hard work and ways to build confidence and gain leadership qualities.</p>
                            <p align="justify">CT University’s Managing Director Manbir Singh, while congratulating one and all said that this is for generating the best in a student. NCC is a highly reputed body which is also a second line of defense. In India, many youngsters are trained in line with defense in case the need arises. If one has zeal to serve the nation, this is the right opportunity. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ClassRoom section ends -->

                <!-- Camp Details section starts -->
                <div class="tab-pane fade" id="list-labs" role="tabpanel" aria-labelledby="list-labs-list">
                    <p>&nbsp;</p>
                    <h4>Camp Details</h4>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <img class="w-100 h-100" src="img/ncc/ncc1.jpg">
                                </div>
                                <div class="col-6 mb-3">
                                    <img class="w-100 h-100" src="img/ncc/ncc2.jpg">
                                </div>
                                <div class="col-6 mb-3">
                                    <img class="w-100 h-100" src="img/ncc/ncc3.jpg">
                                </div>
                                <div class="col-6 mb-3">
                                    <img class="w-100 h-100" src="img/ncc/ncc4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h6 align="justify">NCC Cadets of CTIT, Shahpur attended 10 days NCC Training camp at Punjab technical university, Kapurthala.</h6>
                            <br>
                            <p align="justify">The 10-days camp of the 08 Punjab Battalion National Cadet Corps (NCC) held at Punjab technical university from 8 November 2021 to 17 November 2021. The 200 cadets from various districts are participated in the camp that began on November 8, 2021. The 11 cadets (SW=2,SD=9) of NCC CTIT, Shahpur Participated in the Camp. The aims of this NCC camp are developing character, comradeship, discipline, a secular outlook, the spirit of adventure and ideals of selfless service. Also included weapons training, drill, firing, map reading, personality development class, and awareness on lifestyle disease. The camp was inaugurated by battalion Commandant Col. Vishal Uppal, Grp Comm. I.S Bhalla, Col. NS Sidhu, Sub. Kabal singh and Sub. Pooran singh.</p>
                        </div>
                    </div>
                </div>
                <!-- Camp Details section ends -->

                <!-- Medicare complex starts -->
                <div class="tab-pane fade" id="list-medicare" role="tabpanel" aria-labelledby="list-medicare-list">
                    <p>&nbsp;</p>
                    <h4>Student Achievements</h4>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <img class="w-75 h-50" src="img/ncc/stu1.jpg"><br><br><br><br>
                            <p align="justify">Mayank sharma NCC cadet of CTIT, Shahpur won gold medal in Rifle shooting Competition during NCC Camp at Punjab technical university, Kapurthala.</p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <img class="w-75 h-50" src="img/ncc/st2.jpg"><br><br><br><br>
                            <p align="justify">NCC Cadet Mridul sharma selected for NCC Narmada trekking camp held at Vadodara (Gujrat) from 6 December 2021 to 12 December 2021.</p>
                        </div>
                    </div>
                </div>
                <!-- Medicare Complex Ends -->

                <!-- Grounds section starts -->
                <div class="tab-pane fade" id="list-sports" role="tabpanel" aria-labelledby="list-sports-list">
                    <p>&nbsp;</p>
                    <h4>Play Grounds @ CTIT</h4>
                    <p>&nbsp;</p>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <img class="w-100 h-100" src="img/infra/ground.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p align="justify">The institute has excellent sports facilities for both indoor and outdoor games. It includes cricket ground, football ground, volleyball court, badminton court, table tennis court, facility to play throw ball, chess, carom, and snooker. Yoga Centre and fitness Centre is available with all essential equipment to do gymnasium and yoga. All the dimensions of these play areas are as per the national and international standards.</p>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Grounds section Ends -->

                <!-- Seminar hall starts -->
                <div class="tab-pane fade" id="list-hall" role="tabpanel" aria-labelledby="list-hall-list">
                    <p>&nbsp;</p>
                    <h4>Seminar Hall @ CTIT</h4>
                    <p>&nbsp;</p>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <img class="w-100 h-100" src="img/infra/hall.jpg">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p align="justify">The Seminar Hall is equipped with an ICT facility, centralized air conditioning and well-built sitting arrangements and Sound system. To add more, speakers and mics are also available in the seminar Hall along with separate sound system and internet cabin in Seminar Hall. Seminar Hall also have white boards and Wi-Fi connectivity and an ICT facility.</p>
                        </div>
                    </div>
                </div>
                <!-- Seminar hall ends -->

                <!-- Workshop section starts -->
                <div class="tab-pane fade" id="list-workshop" role="tabpanel" aria-labelledby="list-workshop-list">
                    <p>&nbsp;</p>
                    <h4>Certificates</h4>
                    <div class="row">
                        <p>&nbsp;</p>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img class="w-100 h-100" src="img/ncc/akash.jpg">
                        </div>
                    </div>
                </div>
                <!-- Workshop section ends -->
            </div>
        </div>
    </div>

    <!-- Footer include start -->
    <?php include("inc/footer.php") ?>
    <!-- Footer include End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>