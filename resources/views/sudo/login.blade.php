<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<style>body{padding-top: 60px;}</style>
	
    <link href="/admin/login/css/bootstrap.min.css" rel="stylesheet" />
 
	<link href="/admin/login/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="/admin/login/css/app.css">
	
	<script src="/admin/login/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/admin/login/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/admin/login/js/login-register.js" type="text/javascript"></script>

</head>
<body>
    <div class="container">
              
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="division">
                                      <span>ПАНЕЛЬ УПРАВЛЕНИЯ</span>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="POST" action="#" accept-charset="UTF-8">
                                    <input id="login" class="form-control" type="text" placeholder="Логин" name="login">
                                    <input id="password" class="form-control" type="password" placeholder="Пароль" name="password">
                                    <input class="btn btn-default btn-login" type="submit" value="Войти"">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>      
    		      </div>
		      </div>
		  </div>
    </div>
    <script>
        $('document').ready(function(){
            openLoginModal();
        });
    </script>
</body>
</html>
