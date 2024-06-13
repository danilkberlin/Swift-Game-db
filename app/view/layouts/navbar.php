<nav id="NavBar" class="navbar navbar-expand-lg navbar-light rounded" aria-label="Twelfth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        </a>
        <?php
            if (isset($_COOKIE['PHPSESSID'])) {
                echo '
                <a class="rounded-circle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" fill="white"></rect> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"></path>
                    </svg>
                </a>';
            }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDrop" aria-controls="navbarDrop" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-between" id="navbarDrop">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="/">Home</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="/">About</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="tournaments">Tournaments</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="gallery">Gallery</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="new">News</a>
                </li>
                <li class="nav-item m-2">
                    <a class="nav-link rounded-2 px-4" href="/">Contacts</a>
                </li>
            </ul>
            
            <?php
               
                if (!isset($_COOKIE['PHPSESSID'])) {
                    ?>
                    <div class="d-flex">
                        <a href="user/login">
                            <button class="btn btn-outline-success w-100 px-5">Login</button>
                        </a>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</nav>

<!-- Sidebar -->
<?php
    if (isset($_COOKIE['PHPSESSID'])) {
        include('sidebar.php');
    }
    
?>