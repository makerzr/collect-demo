<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="/css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
<!--SIGN UP-->
<h1>laravel视频系统登录界面</h1>
<div class="login-form">
    <div class="close"> </div>
    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"> </div>
    <div class="avtar">
        <img src="/images/avtar.png" />
    </div>
    <form method="post" action="">
        {{csrf_field()}}
        <input type="text" class="text" name="username">
        <div class="key">
            <input type="password" name="password">
        </div>
        <div class="signin">
            @if(session('error'))
                <span style="color: red">{{session('error')}}</span>
            @endif
            <input type="submit" value="Login" >
        </div>
    </form>
</div>
</body>
</html>