<!DOCTYPE html>
<html>
<head>
	<title>Autenticar en Facebook</title>
    <script>  
    (function(d,s,id) {  
        var js, fjs = d.getElementsByTagName(s)[0];  
        if(d.getElementById(id)) return;  
        js = d.createElement(s); js.id = id;  
        js.src = "http://connect.facebook.net/es_ES/sdk.js";  
        fjs.parentNode.insertBefore(js, fjs);  
    }(document, 'script', 'facebook-jssdk'));  
    window.fbAsyncInit = function() {  
        FB.init({  
            appId    : '187773271709416',  
            cookie   : true,  
            xfbml    : true,  
            version  : 'v2.0'  
        });  
    }  
    </script>  
</head>
<body>

    <fb:login-button scope="public_profile,email" onlogin="validarUsuario();"></fb:login-button>  

</body>
</html>