<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.headerTags')
    <title>Login</title>
</head>

<body>
    <!-- Including Navbar -->
    @include('layouts.nav')
    <!--  Navbar End    -->
<div class="container mb-5">
    <div class="form-heading d-flex justify-content-center m-3">
        <h2>Login here</h2>
    </div>
    <div class="form-container card p-4 m-auto">
    <form>
        <div class="mb-3">
            <label for="userName" class="form-label">User name</label>
            <input type="text" class="form-control" id="userName" aria-describedby="userNameHelp">
            <div id="userNameHelp" class="form-text">We'll never share your User name with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="passwor" class="form-label">Password</label>
            <input type="password" class="form-control" id="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <div class="actio-btn d-flex justify-content-between ">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="#" class="text-decoration-none">Forgot Password</a>
    </div>
    <p class=" d-flex justify-content-end">New user ?<a href="{{ route('register') }}" class="text-decoration-none">&nbsp;&nbsp;Sign up here</a></p>
    </form>
    </div>
    </div>

    <!-- Including footer -->
     @include('layouts.footer')
</body>
</html>