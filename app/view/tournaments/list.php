<section id="news" class='my-5'>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="/new">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                </svg>
                                Registration
                            </a>
                        </li>
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="#profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-broadcast" viewBox="0 0 16 16">
                                  <path d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707m2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708m5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708m2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM10 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0"/>
                                </svg>
                                Live
                            </a>
                        </li>
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="/new/show">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2" viewBox="0 0 16 16">
                                    <path d="M3.5 2a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-12a.5.5 0 0 0-.5-.5H12a.5.5 0 0 1 0-1h.5A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1H4a.5.5 0 0 1 0 1z"/>
                                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
                                </svg>
                                Past Tournaments
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class='text-color'>Registration for the tournament</h2>
                        <hr class='text-color'>
                    </div>
                </div>
                <div class="row justify-content-evenly align-items-center">
                    <div class="col-6">
                        <h2 class='title-text-gradient fs-2 text-center'>Registration Form</h2>
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <form action="tournaments" method="POST" enctype="multipart/form-data">
                                    <div class="row justify-content-center">
                                        <div class="col mb-3">
                                            <label for="name" class="form-label text-color">Name</label>
                                            <input type="text" class="form-control input-background" id="name" name="name" required>
                                        </div>
                                        <div class="col mb-3">
                                            <label for="telephone" class="form-label text-color">Number</label>
                                            <input type="tel" class="form-control input-background" id="telephone" name="telephone" required>
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <label for="email" class="form-label text-color">Gmail</label>
                                        <input type="text" class="form-control input-background" id="email" name="email" required>
                                    </div>
                                    <div class="row justify-content-center my-4">
                                        <div class="col-lg-6 col-md-8 col-sm-10">
                                            <button type="submit" class="btn btn-violet w-100">Apply now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 py-5 border-start border-end">
                        <h6 class='text-center text-color'>OR</h6>
                    </div>
                    <div class="col-3">
                        <form action="/tournaments/account" method='post'>
                            <div class="my-2">
                                <button class='btn btn-outline-light w-100'>
                                    Sign up using your account
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                        </svg>
                                </button>
                            </div>
                            <div class="my-2">
                                <button class='btn btn-outline-success w-100'>
                                    Sign up using your Google
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                            <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                                        </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>