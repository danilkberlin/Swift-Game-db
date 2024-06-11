<section class="signup my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h1 class='text-center'>Sign up</h1>
                <form action="/user/register" method="post">        
                    <label for='login'>Your Login</label>
                    <input name='login' class="form-control w-100 mb-3" type='login' id="login">
    
                    <label for='password'>Your Password</label>
                    <input name='password' class="form-control w-100 mb-3" type='password' id="password">
    
                    <label for='repeatpass'>Your Repeat Password</label>
                    <input name='repeatpassword' class="form-control w-100 mb-3" type='password' id="repeatpass">
    
                    <label for='email'>Your Email</label>
                    <input name='email' class="form-control w-100 mb-3" type='email' id="email">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <button type="submit" class='btn btn-primary w-100 py-2 px-5'>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


