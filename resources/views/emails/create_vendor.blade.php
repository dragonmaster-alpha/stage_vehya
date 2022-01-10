<html>
    <head>
        <title>{{env('APP_NAME')}}</title>
    </head>
    <body>
        <h3>Hi, {{$name}}</h3>
        <h2>
            User Id: <i>{{$email}}</i>       <br>
            Password: <i>{{$password}}</i>      
        </h2>
        <p>Hi, Please click on <a href="https://www.obtclientprojects.com/vehya/vendors/login">Login</a></p>
        <!--<p>Hi, Please click on <a href="{{env('APP_URL')}}vehya/vendors/login}}">Login</a></p>-->
        <p>Thank You</p>
    </body>
</html>