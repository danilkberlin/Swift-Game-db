<section class="signup my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 border rounded-2 py-5">
                <h1 class='text-center'>Log in</h1>
                <form action="/user/register" method="post">        
                    <label for='login'>Your Login</label>
                    <input name='login' class="form-control w-100 mb-3" type='login' id="login">
    
                    <label for='password'>Your Password</label>
                    <input name='password' class="form-control w-100 mb-3" type='password' id="password">
                    <div class="row justify-content-center mt-5">
                        <div class="col-6">
                            <button type="submit" class='btn btn-primary w-100 py-2 px-5'>Log in</button>
                        </div>
                    </div>
                    <p class='text-center my-3'>Don't have an account? <a href='/user/register'>Sign up</a> now to access all features and benefits!</p>
                </form>
            </div>
        </div>
    </div>
</section>