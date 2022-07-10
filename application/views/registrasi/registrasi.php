<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url() ?>//assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="<?php echo base_url() ?>//assets/media/logos/admin.jpg" class="max-h-300px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Daftar Admin</h3>

                        </div>
                        <form class="form" id="kt_login_signin_form">


                            <!-- <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button> -->
                        </form>
                        <div class="mt-12">

                            <a href="javascript:;" id="kt_login_signup" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Add admin</a>
                            <a href="<?php echo base_url('admin/list'); ?>" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">List admin</a>
                            <a href="<?php echo base_url('admin'); ?>" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Back</a>
                        </div>
                    </div>
                    <!--end::Login Sign in form-->
                    <!--begin::Login Sign up form-->
                    <div class="login-signup">
                        <div class="mb-20">
                            <h3>Sign Up</h3>

                            <form class="user" method="post" action="<?php base_url('auth/registrasi'); ?>">
                                <div class="text-muted font-weight-bold">Enter your details to create your account</div>
                        </div>
                        <form class="user" method="post" action="<?php echo base_url('auth/registrasi'); ?>">
                            <div class="form-group mb-5">
                                <input type="text" class="form-control h-auto form-control-solid py-4 px-8" id="name" name=" name" placeholder="Full name" value="<?= set_value('name'); ?>">
                            </div>
                            <?= form_error('name', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group mb-5">
                                <input type="text" class="form-control h-auto form-control-solid py-4 px-8" id="email" name=" email" placeholder="Email" value="<?= set_value('email'); ?>">
                            </div>
                            <?= form_error('email', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group mb-5">
                                <input type="password" class="form-control h-auto form-control-solid py-4 px-8" id="password1" name=" password1" placeholder="Password">
                            </div>
                            <?= form_error('password1', '<small class="text-danger pl-1">', '</small>'); ?>
                            <div class="form-group mb-5">
                                <input type="password" class="form-control h-auto form-control-solid py-4 px-8" id="password2" name=" password2" placeholder="Retype password">
                            </div>

                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
                                <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                            </div>


                        </form>
                    </div>
                    <!--end::Login Sign up form-->
                    <!--begin::Login forgot password form-->

                    <!--end::Login forgot password form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->