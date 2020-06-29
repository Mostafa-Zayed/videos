Login Page Template
<form action="{{route('dashboard.login')}}" method="post">
@csrf
    <input type="email" name="email" >
    <br>
    <input type="password" name="password">
    <input type="submit" value="Go">
</form>
