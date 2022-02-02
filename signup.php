<?php 
    $filename = basename($_SERVER['PHP_SELF'], '.php');

    include_once 'inc/global.php';
?>

<?php include_once 'inc/header.php'; ?>

    <!-- Main wrapper -->
    <div class="main-wrapper">

        <!-- Sign up Section -->
        <section id="signup">
            <div class="container d-flex">
                <div class="signup-content">
                    <div class="row">
                        <div class="col">
                            <div class="signup-form">
                                <div id="error" class="error"></div>
                                <h2 class="form-title">Sign Up</h2>
                                <form method="POST" class="reg-form" id="reg-form">
                                    <div class="form-group">
                                        <label for="username">
                                            <i class="fas fa-user"></i>
                                        </label>
                                        <input class="form-input" type="text" name="username" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            <i class="fas fa-envelope"></i>
                                        </label>
                                        <input class="form-input" type="email" name="email" id="email" placeholder="Your Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">
                                            <i class="fas fa-lock"></i>
                                        </label>
                                        <input class="form-input" type="password" name="pass" id="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="repass">
                                            <i class="far fa-lock"></i>
                                        </label>
                                        <input class="form-input" type="password" name="repass" id="repass"
                                            placeholder="Repeat Your Password">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-input" type="checkbox" name="agree_term" id="agree_term" class="agree-term">
                                        <label for="agree-term" class="label-agree-term">
                                            I agree all statements in
                                            <a href="" class="term-service">Terms of service.</a>
                                        </label>
                                    </div>
                                    <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>">
                                    <div class="form-group form-button mb-0 upsub">
                                        <input type="submit" name="signup" id="signupButton" class="form-submit" value="Signup">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

<?php include_once 'inc/footer.php'; ?>