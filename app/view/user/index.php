<section class="signup my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 border rounded-2 py-5">
                <h1 class='text-center title-text-gradient'>Log in</h1>
                <form action="/user/login" method="post">        
                    <label for='login' class='text-color'>Your Login</label>
                    <input name='login' class="form-control input-background w-100 mb-3" type='login' id="login">
    
                    <label for='password' class='text-color'>Your Password</label>
                    <input name='password' class="form-control input-background w-100 mb-3" type='password' id="password">
                    <div class="row justify-content-center mt-5">
                        <div class="col-6 my-2">
                            <button type="submit" class='btn w-100 py-2 btn-violet px-5'>
                                Log in
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0z"/>
                                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class='text-center my-3 text-color'>Don't have an account? <a href='/user/register'>Sign up</a> now to access all features and benefits!</p>
                </form>
            </div>
        </div>
    </div>
</section>