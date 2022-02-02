<?php 
    $filename = basename($_SERVER['PHP_SELF'], '.php');

    include_once 'inc/global.php';
?>

<?php include_once 'inc/header.php'; ?>

    <!-- Main wrapper -->
    <div class="main-wrapper">

        <!-- Sign in Section -->
        <section id="signin">
            <div class="container d-flex">
                <div class="signin-content">
                    <div class="row">
                        <div class="col">
                            <div class="signin-form">
                                <div id="error" class="error"></div>
                                <h2 class="form-title pb-2">Log In</h2>
                                <form method="POST" class="reg-form pt-3" id="signin-form">
                                    <div class="form-group">
                                        <label for="email">
                                            <i class="fas fa-user"></i>
                                        </label>
                                        <input type="text" name="email" id="email" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">
                                            <i class="fas fa-lock"></i>
                                        </label>
                                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                                    </div>
                                    <div class="form-group form-button mb-0">
                                        <input type="submit" name="signin" id="signinButton" class="form-submit" value="Sign In">
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