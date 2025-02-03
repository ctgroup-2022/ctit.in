<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIT</title>
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-container">
            <div>
                <a href="#" class="logo">
                    <img src="img/ct23logo.png" alt="CTIEMT Logo" class="logo-image">
                </a>
            </div>

            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="nav-links">
                <div class="nav-item active">
                    <a href="index.php" class="nav-link">
                        Home
                        <span class="active-indicator"></span>
                    </a>
                </div>

                <div class="nav-item">
                    <a href="bog.php" class="nav-link">
                        Governing Body
                        
                    </a>

                </div>

                <div class="nav-item">
                    <a href="about.php" class="nav-link">
                        About
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown">
                        <a href="mission&vision.php" class="dropdown-item">Vision & Mission</a>
                        <a href="management.php" class="dropdown-item">Management's Desk</a>
                        <a href="about.php" class="dropdown-item">About Campus</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="courses.php" class="nav-link">
                        Courses
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown">
                        <a href="mcse.php" class="dropdown-item">Computer Science</a>
                        <a href="mme.php" class="dropdown-item">Mechanical Engineering</a>
                        <a href="ce.php" class="dropdown-item">Civil Engineering</a>
                        <a href="ece.php" class="dropdown-item">Electronic and communicstion Engineering</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Departments
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown">
                        <!-- <a href="ai&ml-dept.php" class="dropdown-item">Artificial Intelligence and Machine Learning</a> -->
                        <a href="cse-dept.php" class="dropdown-item">B.Tech Computer Engineering </a>
                        <a href="ce-dept.php" class="dropdown-item">B.Tech CSE</a>
                        <a href="ece-dept.php" class="dropdown-item">B.Tech CSE IOT</a>
                        <a href="ca-dept.php" class="dropdown-item">B.Tech EE</a>
                    </div>
                </div>

                <div class="nav-item">
                    <a href="infra.php" class="nav-link">
                        Infrastructure
                    </a>
                </div>

                <div class="nav-item">
                    <a href="naac.php" class="nav-link">
                        NAAC
                    </a>
                </div>

                <div class="nav-item">
                    <a href="iqac.php" class="nav-link">
                        IQAC
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#" class="nav-link">
                        Others
                        <span class="dropdown-arrow"></span>
                    </a>
                    <div class="dropdown">
                        <a href="mandatory.php" class="dropdown-item">Mandatory Disclosure & EOA</a>
                        <a href="redcell.php" class="dropdown-item">Grivenece Redressal Committee</a>
                        <a href="icc.php" class="dropdown-item">Internal Complaint Committee</a>
                        <a href="anti.php" class="dropdown-item">Anti-Ragging Committee</a>
                        <!-- <a href="feedback.php" class="dropdown-item">Feedback</a> -->
                    </div>
                </div>

                <div class="nav-item">
                    <a href="http://naac.gov.in/index.php/en/19-quick-links/133-screen-reader" class="nav-link">
                        Screen Reader
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        navLinks.classList.toggle('active');
    });
    </script>
</body>

</html>