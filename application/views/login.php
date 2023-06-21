<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="<?= $this->config->item('css1') ?>bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->config->item('css1') ?>fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->config->item('css1') ?>iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->config->item('css1') ?>iofrm-theme10.css">

</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="logo">
                            <a>
                                <img class="centered-image" src="<?= $this->config->item('img1') ?>e-mudharabah.png" alt="">
                            </a>
                        </div>
						<br>

                        <h3>Mudharabah Digital untuk Pertumbuhan UMKM</h3>
                        <!-- <div class="page-links">
                            <a href="login" class="active">Login</a><a href="register">Register</a>
                        </div>

                        <form action="<?= site_url('dashboard/login') ?>" method="post">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                                <a href="dashboard">Forget password?</a>
                            </div>
                        </form> -->

                        <div class="other-links">
						<br><br><br>
							<div style=" display: flex; align-items: center;">
							
							<p style="font-weight: bold;margin-left:30px; margin-right: 30px;">Silahkan Login:</p>
    						<a href="<?=base_url('home/google_login')?>"><img src="<?=base_url('assets/img/icons/brands/google.png')?>" style="vertical-align: middle;"></a><a><img src="<?=base_url('assets/img/icons/brands/facebook.png')?>" style="vertical-align: middle;"></a><a><img src="<?=base_url('assets/img/icons/brands/instagram.png')?>" style="vertical-align: middle;"></a>
							</div>
							<br><br><br><br><br><br><br><br><br><br><br>
						  <label>Web Ver.: 1.0.0</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $this->config->item('js1') ?>jquery.min.js"></script>
    <script src="<?= $this->config->item('js1') ?>popper.min.js"></script>
    <script src="<?= $this->config->item('js1') ?>bootstrap.min.js"></script>
    <script src="<?= $this->config->item('js1') ?>main.js"></script>
</body>
</html>
