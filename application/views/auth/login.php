<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Pemrograman Web</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 420px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="card shadow">
            <div class="card-header bg-secondary text-white text-center py-4">
                <h4 class="fw-bold mb-0">Pemrograman Web</h4>
                <small class="text-white-50">Universitas Bumigora</small>
            </div>
            <div class="card-body p-4">

                <h5 class="fw-semibold mb-4 text-center">Masuk ke Akun Anda</h5>

                <?php $error = $this->session->flashdata('error'); ?>
                <?php if ($error) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('auth/login') ?>" method="post">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email"
                               name="email"
                               id="email"
                               class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>"
                               value="<?php echo set_value('email') ?>"
                               placeholder="Masukkan email">
                        <?php if (form_error('email')) : ?>
                            <div class="invalid-feedback"><?php echo form_error('email') ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"
                               name="password"
                               id="password"
                               class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>"
                               placeholder="Masukkan password">
                        <?php if (form_error('password')) : ?>
                            <div class="invalid-feedback"><?php echo form_error('password') ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 fw-semibold">Login</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>