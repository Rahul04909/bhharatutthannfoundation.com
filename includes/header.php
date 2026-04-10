<?php
// Header Component for Bhharat Utthann Foundation
?>
<style>
    /* Adding an attractive and modern font for the menu */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    /* Header Custom Styles */
    .top-banner-section {
        background-color: #ffb700;
        /* Yellow/Orange background as seen in design */
        padding: 5px 0;
        text-align: center;
        width: 100%;
    }

    .top-banner-section img {
        max-width: 100%;
        height: auto;
    }

    .custom-navbar {
        background-color: #051b60;
        /* Dark Blue */
        padding: 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        /* Slight shadow to make header pop */
    }

    .custom-navbar .navbar-nav .nav-item {
        margin: 6px 5px;
        /* Smaller top/bottom margin to reduce container height */
    }

    .custom-navbar .navbar-nav .nav-link {
        font-family: 'Poppins', sans-serif;
        /* Applied attractive font */
        color: #ffffff;
        font-weight: 500;
        font-size: 15px;
        padding: 8px 18px !important;
        /* Reduced padding drastically decreases container height */
        border: 1px solid #ffb700;
        /* Solid border with requested color */
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
        /* Smooth interactive transition */
    }

    /* Interactive Hover Effect */
    .custom-navbar .navbar-nav .nav-link:hover,
    .custom-navbar .navbar-nav .nav-link:focus,
    .custom-navbar .navbar-nav .nav-item.show .nav-link {
        background-color: #ffb700;
        /* Fill with solid yellow/orange */
        color: #051b60 !important;
        /* Switch text to dark blue for contrast */
        transform: translateY(-2px);
        /* Slight nudge up interaction */
        box-shadow: 0 4px 8px rgba(255, 183, 0, 0.4);
    }

    .custom-navbar .navbar-toggler {
        border-color: rgba(255, 255, 255, 0.5);
        margin: 8px 10px;
        padding: 4px 8px;
    }

    .custom-navbar .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Desktop specific styles */
    @media (min-width: 992px) {
        .custom-navbar .navbar-collapse {
            justify-content: center;
        }

        .dropdown-menu {
            border-radius: 4px;
            margin-top: 5px;
            border: 1px solid rgba(255, 183, 0, 0.3);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            font-family: 'Poppins', sans-serif;
        }

        .dropdown-item {
            font-size: 14px;
            font-weight: 500;
            padding: 8px 20px;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #fff6e0;
            color: #051b60;
            padding-left: 25px;
            /* Interactive sliding effect on submenus */
        }
    }

    /* Mobile Offcanvas (Sidebar) Styles */
    @media (max-width: 991.98px) {
        .custom-offcanvas {
            background-color: #051b60;
            /* Same dark blue background for sidebar */
        }

        .custom-offcanvas .offcanvas-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .custom-offcanvas .nav-item {
            margin: 10px 15px;
            /* Spaced row layout for mobile */
        }

        .custom-offcanvas .nav-link {
            padding: 12px 18px !important;
        }

        .custom-offcanvas .dropdown-menu {
            background-color: transparent;
            border: none;
            padding-left: 1rem;
            margin-top: 5px;
            margin-bottom: 15px;
            box-shadow: none;
        }

        .custom-offcanvas .dropdown-item {
            color: #d1d5db;
            padding: 10px 20px;
            border-left: 1px solid rgba(255, 183, 0, 0.3);
            margin-left: 10px;
        }

        .custom-offcanvas .dropdown-item:hover,
        .custom-offcanvas .dropdown-item:focus {
            background-color: transparent;
            color: #ffb700;
            border-left-color: #ffb700;
        }
    }
</style>

<header>
    <!-- Top Banner Section -->
    <div class="top-banner-section">
        <div class="container-fluid">
            <!-- Using the header-banner.png provided in the assets -->
            <img src="assets/images/header-banner.png" alt="Bhharat Utthann Foundation Banner" class="img-fluid">
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid p-0">
            <!-- Mobile Toggle Button (Triggers Offcanvas) -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#mainMenu"
                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Offcanvas Sidebar Menu -->
            <div class="offcanvas offcanvas-end custom-offcanvas" tabindex="-1" id="mainMenu"
                aria-labelledby="mainMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white font-weight-bold" id="mainMenuLabel"
                        style="font-family: 'Poppins', sans-serif;">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- Removed padding to reduce overall height of navbar properly -->
                <div class="offcanvas-body p-0">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                About Us
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                <li><a class="dropdown-item" href="pages/about/index.php">Overview</a></li>
                                <li><a class="dropdown-item" href="pages/about/our-vision/index.php">Our Vision</a></li>
                                <li><a class="dropdown-item" href="pages/about/our-aim/index.php">Our Aim</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                                <li><a class="dropdown-item" href="pages/women-empowerment/index.php">Women
                                        Empowerment</a></li>
                                <li><a class="dropdown-item" href="pages/health-checkup-camps/index.php">Health Checkup
                                        Camps</a></li>
                                <li><a class="dropdown-item" href="pages/water-conservation/index.php">Water
                                        Conservation</a></li>
                                <li><a class="dropdown-item" href="pages/plantation-drive/index.php">Plantation
                                        Drive</a></li>
                                <li><a class="dropdown-item" href="pages/self-reliance-women/index.php">Self Reliance in
                                        Women</a></li>
                                <li><a class="dropdown-item" href="pages/self-defence-camp/index.php">Self Defence
                                        Camp</a></li>
                                <li><a class="dropdown-item" href="pages/skill-development/index.php">Skill
                                        Development</a></li>
                                <li><a class="dropdown-item" href="pages/handicapped-assistance/index.php">Handicapped
                                        Assistance</a></li>
                                <li><a class="dropdown-item" href="pages/cultural-camps/index.php">Cultural Camps</a>
                                </li>
                                <li><a class="dropdown-item" href="pages/swachh-bharat/index.php">Swachh Bharat
                                        Abhiyan</a></li>
                                <li><a class="dropdown-item" href="pages/blood-donation/index.php">Blood Donation
                                        Camp</a></li>
                                <li><a class="dropdown-item" href="pages/covid-relief/index.php">Covid 19 Relief</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/finance/index.php">Finance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/media/index.php">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/faq/index.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/contact/index.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/feedback/index.php">Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>