<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KANTOR IMIGRASI KELAS I BOGOR</title>

    <meta http-equiv="X-UA-Compatible" content=="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/libs/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/common.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/pages/auth.min.css">
</head>
<body>

<div class="ks-page">
    <div class="ks-page-header">
        <a href="#" class="ks-logo">KANIM KELAS I BOGOR - LOGIN APLIKASI</a>
    </div>
    <div class="ks-page-content">
        <div class="ks-logo">KANIM KELAS I BOGOR</div>

        <div class="card panel panel-default ks-light ks-panel ks-login">
            <div class="card-block">
                <form method="post" action="login" class="form-container">
                    <h4 class="ks-header">Login</h4>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="text" name="identity" class="form-control" placeholder="Email">
                            <span class="icon-addon">
                                <span class="la la-at"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon icon-left icon-lg icon-color-primary">
                            <input type="text" class="form-control" name="password" placeholder="Password">
                            <span class="icon-addon">
                                <span class="la la-key"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <div class="ks-text-center">
                        <a href="pages-forgot-password.html">Lupa Password</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="ks-footer">
        <span class="ks-copyright">&copy; 2017 Hope ID</span>
        <ul>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
</div>

<script src="<?=base_url()?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?=base_url()?>assets/libs/tether/js/tether.min.js"></script>
<script src="<?=base_url()?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>