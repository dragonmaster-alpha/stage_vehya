<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Admin Forget Password</h1>
    <p>Hi {{ $details['name'] }} Please click on <a href="{{env('APP_URL')}}admin/recover-password/{{ $details['token']}}">Reset-password</a> to change your password'</p>
   
    <p>Thank you</p>
</body>
</html>