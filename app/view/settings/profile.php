<section class="profiel-settings my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h2>Do you want to change your data?</h2>
                <form action="/settings/profile" method="post">      
                    <label for='login'>Change Login</label>
                    <input name='login' class="form-control w-100 mb-3" type='login' id="login">
    
                    <label for='password'>Change Password</label>
                    <input name='password' class="form-control w-100 mb-3" type='password' id="password">
    
                    <label for='repeatpass'> Repeat Password</label>
                    <input name='repeatpassword' class="form-control w-100 mb-3" type='password' id="repeatpass">
    
                    <label for='email'>Change Email</label>
                    <input name='email' class="form-control w-100 mb-3" type='email' id="email">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <button type="submit" class='btn btn-primary w-100 py-2 px-5'>Update Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
