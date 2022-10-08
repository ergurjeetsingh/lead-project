<?php
if ($this->session->userdata('customer_id')) {
    return redirect('login_buyer/buyer_dashboard');
}
?>
<?php $this->load->view('public/header'); ?>

<body class="is-responsive">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <!-- session msg for login faild -->
                <?php if ($stmt = $this->session->tempdata('login_fail')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> <?= $stmt; ?>
                    </div>
                <?php endif; ?>
                <!-- end of session flashdata -->
                <h2 class="text-center">Login To Lead With Us</h2>
                <div class="box-login mt-4">
                    <h2 class="text-center mb-3 mt-3"><i class="fa fa-unlock-alt"></i></h2>
                    <form action="<?= base_url('login_buyer'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="customer_username" class="form-control" placeholder="Username" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="customer_pswrd" class="form-control" placeholder="Password" id="pass" required>
                            <i class="fa fa-eye" id="show"></i>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-success btn-block" value="Login" required>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#register-modal">
                            <i class="fa fa-user-plus"></i> Sign Up
                        </a>
                        &nbsp; &nbsp; | &nbsp; &nbsp;
                        <a href="#" data-toggle="modal" data-target="#forgot-modal">
                            <i class="fa fa-meh-o"></i> Forgotten Password?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            setTimeout(() => {
                $('.alert').fadeOut();
                // location.reload();
            }, 3000);
        });
    </script>
    <script>
        let show_btn = document.getElementById('show');
        let input = document.getElementById('pass');
        show_btn.addEventListener('click', () => {
            if (input.type == 'text') {
                input.type = 'password';
            } else {
                input.type = 'text';
            }
        });
    </script>
</body>

<?php $this->load->view('public/footer'); ?>