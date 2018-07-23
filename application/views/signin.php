<div class="main-wrapper auth-wrapper">

    <div class="container container-auth">
                    
        <form action="<?php echo site_url("user/signin"); ?>" method="post" role="form" id="signIn" autocomplete="off" novalidate="novalidate" class="fv-form fv-form-bootstrap">
            <h2 class="text-center">LEAGUEX</h2>
            <p class="text-center">Sign In to your account</p>
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Email</label>                                    
                <input name="email" id="email" type="email" class="form-control">
            </div>
            <div class="form-group bmd-form-group" style="margin-bottom: 20px;">
                <label class="bmd-label-floating">Password</label>                                        
                <input name="password" id="password" type="password" autocomplete="new-password" class="form-control">
            </div>
            <div class="row form-recovery m-0">
                <div class="col col-md-6 pl-0">
                    <div class="checkbox d-inline-block">
                        <label for="rememberme">
                            <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                        </label>
                    </div>
                </div>
                <div class="col col-md-6 pr-0">
                    <a href="#" class="forgot-password float-right">Forgot Password?</a>
                </div>
            </div>
            <div class="form-action">
                <button class="btn btn-raised btn-info" type="submit">Sign In</button>
            </div>
            <div class="auth-form-link text-center">
                <span>Don't have an account yet? <a href="<?php site_url(); ?>signup">Sign Up</a></span>
            </div>
                   
        </form>

    </div>

</div>

