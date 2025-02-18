<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.headerTags')
    <title>Register</title>
</head>

<body>
    <!-- Including Navbar -->
    @include('layouts.nav')
    <!--  Navbar End    -->
    <div class="container mb-5">
        <div class="form-heading d-flex justify-content-center m-3">
            <h2>Register here</h2>
        </div>
        <div class="form-container card p-4 m-auto">
            <form >
                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="NameHelp">
                    <!-- <div id="NameHelp" class="form-text">We'll never share your User name with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="userName" class="form-label">User name</label>
                    <input type="text" class="form-control" id="userName" aria-describedby="userNameHelp">
                    <div id="userNameHelp" class="form-text">Username must be unique.</div>
                </div>
                <div class="mb-3">
                    <label for="userMail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="userMail" aria-describedby="userMailHelp">
                    <!-- <div id="userMailHelp" class="form-text">We'll never share your User name with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="userContact" class="form-label">Contact</label>
                    <input type="text" inputmode="numeric" class="form-control" id="userContact" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    <!-- <div id="userContactHelp" class="form-text">We'll never share your User name with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" aria-describedby="password">
                    <!-- <div id="userNameHelp" class="form-text">We'll never share your User name with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="cpasswor" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">I Agree</label>
                </div>
                <div class="actio-btn d-flex justify-content-between ">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="#" class="text-decoration-none">Forgot Password</a>
                </div>
                <!-- <p class=" d-flex justify-content-end">Already user ?<a href="{{ route('login') }}" class="text-decoration-none">&nbsp;&nbsp;Login here</a></p> -->
            </form>
        </div>
    </div>

    <!-- Including footer -->
    @include('layouts.footer')
</body>

</html>