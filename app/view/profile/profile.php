<section class='profile my-5'>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="#profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                Update Profile
                            </a>
                        </li>
                        <li class="nav-item m-2 nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="#change-profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill" viewBox="0 0 16 16">
                                    <path d="M3.904 1.777C4.978 1.289 6.427 1 8 1s3.022.289 4.096.777C13.125 2.245 14 2.993 14 4s-.875 1.755-1.904 2.223C11.022 6.711 9.573 7 8 7s-3.022-.289-4.096-.777C2.875 5.755 2 5.007 2 4s.875-1.755 1.904-2.223"/>
                                    <path d="M2 6.161V7c0 1.007.875 1.755 1.904 2.223C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777C13.125 8.755 14 8.007 14 7v-.839c-.457.432-1.004.751-1.49.972C11.278 7.693 9.682 8 8 8s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                                    <path d="M2 9.161V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13s3.022-.289 4.096-.777C13.125 11.755 14 11.007 14 10v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                                    <path d="M2 12.161V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13v-.839c-.457.432-1.004.751-1.49.972-1.232.56-2.828.867-4.51.867s-3.278-.307-4.51-.867c-.486-.22-1.033-.54-1.49-.972"/>
                                </svg>
                                Change Details
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item m-2 d-flex align-items-center nav-list-item rounded-2">
                            <a class="nav-link rounded-2 px-4" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                                </svg>
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class='text-start fs-2 title-text-gradient'>Public profile</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="row d-flex justify-content-start">
                                <div class="row justify-content-start">
                                    <form action="profile" method="post">
                                        <div class="row">
                                            <div class="col-12 my-2">
                                                <label for='user_name' class='form-label text-color'>Name</label>
                                                <input name='user_name' class="form-control w-100 mb-3 input-background" type='text' id="user_name" value="<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>">
                                                <p class='text-secondary'>Your name may appear around Swift Game where you contribute or are mentioned. You can remove it at any time.</p>
                                            </div>
                                            <div class="col-12 my-2">
                                                <label for="email" class='form-label text-color'>Public email</label>
                                                <input name="email" class="form-control w-100 mb-3 input-background" type="email" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                                                <p class="text-secondary">Your email may appear around Swift Game where you contribute or are mentioned.</p>
                                            </div>
                                            <div class="col-12 my-2">
                                                <label for="bio" class='form-label text-color'>Bio</label>
                                                <textarea name="bio" class="form-control w-100 mb-3 input-background" id="bio" rows="3" <?php echo isset($_SESSION['bio']) ? $_SESSION['bio'] : ''; ?>></textarea>
                                                <p class='text-secondary'>You can @mention other users and organizations to link to them.</p>
                                            </div>
                                            <div class="col-12 my-2">
                                                <label for="pronouns" class='form-label text-color'>Pronouns</label>
                                                <select name="pronouns" id="pronouns" class="form-select input-background">
                                                    <option value="">Don't specify</option>
                                                    <option value="they/them" <?php echo (isset($_SESSION['pronouns']) && $_SESSION['pronouns'] == 'they/them') ? 'selected' : ''; ?>>they/them</option>
                                                    <option value="she/her" <?php echo (isset($_SESSION['pronouns']) && $_SESSION['pronouns'] == 'she/her') ? 'selected' : ''; ?>>she/her</option>
                                                    <option value="he/him" <?php echo (isset($_SESSION['pronouns']) && $_SESSION['pronouns'] == 'he/him') ? 'selected' : ''; ?>>he/him</option>
                                                    <option value="Custom">Custom</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4 col-md-8 col-sm-12 my-2">
                                                <button class='btn btn-success'>Update profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <!-- Icon Imafges -->
                            <div class="row d-flex justify-content-center text-center">
                                <div class="col-12">
                                    <?php foreach ($user_foto as $key => $value):?>
                                        <?php if ($value == NULL):?>
                                                <div class="text-color">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                    </svg>
                                                </div>
                                        <?php else:?>
                                            <img src="<?php echo $value;?>" class="rounded-circle" style='width: 250px; height: 250px' alt="...">
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <form action="/profile/foto"  method="post">
                                    <label for="iconFoto" class="form-label text-color">Upload image</label>
                                    <input type="url" class="form-control input-background" id="iconFoto" name="iconFoto" placeholder="Your foto link">
                                    <div class="row justify-content-center my-3">
                                        <div class="col-lg-6 col-md-9 col-sm-12">
                                            <button type="submit" class="btn btn-violet w-100">Upload</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='my-5' id='change-profile'>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row justify-content-start">
                    <div class="col-12">
                        <h2 class='title-text-gradient fs-2'>Change Dateils</h2>
                    </div>
                    <hr>
                    <div class="row d-flex justify-content-start">
                        <div class="col-7">
                            <div class="row d-flex justify-content-start">
                                <div class="col-12">
                                    <form action="profile/change" method="post">
                                        <div class="col-12 my-4">
                                            <label for='login' class='form-label text-color'>Login</label>
                                            <input name='login' class="form-control w-100 mb-3 input-background" type='text' id="login">
                                            <p class='text-secondary'>If you wish, you can change your email address for your convenience.</p>
                                        </div>
                                        <hr>
                                        <div class="col-12 my-4">
                                            <label for='password' class='form-label text-color'>Password</label>
                                            <input name='password' class="form-control w-100 mb-3 input-background" type='password' id="password">
                                            <p class='text-secondary'>If you wish, you can change your password address for your convenience.</p>
                                        </div>
                                        <div class="col-12 my-4">
                                            <label for='repeatpassword' class='form-label text-color'>Repeat Password</label>
                                            <input name='repeatpassword' class="form-control w-100 mb-3 input-background" type='password' id="repeatpassword">
                                        </div>
                                        <hr>
                                        <div class="col-12 my-2">
                                            <label for="email" class='form-label text-color'>Change email</label>
                                            <input name="email" class="form-control w-100 mb-3 input-background" type="email" id="email">
                                            <p class="text-secondary">Your email may appear around Swift Game where you contribute or are mentioned.</p>
                                        </div>
                                        <div class="col-lg-4 col-md-8 col-sm-12  my-4">
                                            <button class='btn btn-success'>Change Dateils</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                        <div class="col-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
