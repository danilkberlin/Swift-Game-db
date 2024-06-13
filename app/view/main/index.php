<main class="main">
    <!-- Top -->
    <section id="top">
        
    </section>
    <!-- About -->
    <section id='about'>

    </section>

</main>
<footer class="footer"></footer>

<a class="rounded-circle" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"></rect> 
        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"></path> </g>
    </svg><!-- Default user icons -->
</a>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex justify-content-center">
        <div class='mx-3 rounded-circle'> 
            <svg width="92px" height="92px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="24" height="24" fill="white"></rect> 
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#323232"></path> </g>
            </svg><!-- Default user icons -->
        </div>
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <?php
                echo htmlspecialchars($_SESSION['user']);
            ?>
        </h5> <!-- Default user name -->
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Profile</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Notifications</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Saved</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Settings</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Info</a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="#">Help</a>
            </li>
            <hr>
            <li class="nav-item m-2">
                <a class="nav-link rounded-2 px-4" href="/user/signout">Sing out</a>
            </li>
        </ul>
    </div>
</div>