@extends('navfoot.admin1')

@section('content')
    <section id="form">
        <form action="POST" action="">
            <div class="container d-flex justify-content-center p-3" style="margin-top: 5rem; margin-bottom: 3rem;">
                <div class="col-lg-6 pt-3">
                    <div class="container mt-2 p-4 shadow m-auto rounded" style="background-color:#ffff ;width:auto;">
                        <img src="img/logofull.png" alt="" width="230" class="mb-4 rounded mx-auto d-block">
                        <h4 class="text-center pb-3 fw-bold" style="color: #021668;">Please Login Your Account</h4>
                        <div class="form-group mb-3 px-1">
                            <input type="email" name="user" class="form-control" id="floatingInput" placeholder="Email" style="border: 3px solid #021668; background-color: #f1f1f1" />
                        </div>
                        <div class="form-group mb-3 px-1">
                            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" style="border: 3px solid #021668; background-color: #f1f1f1" />
                        </div>
                        <div class="d-flex justify-content-between px-1">
                            <div class="form-check">
                                <input class="form-check-input" style="border: 2px solid #021668;" type="checkbox" value="" id="flexCheckChecked" name="remember"/>
                                <label class="form-check-label" style="color: #021668;" for="flexCheckChecked">Remember Me </label>
                            </div>
                            <div class="">
                                <a href="#" style="color: #021668;">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="container px-1 m-auto mt-4">
                            <div class="d-flex justify-content-center">
                                <button class="btn fw-bold fs-5" style="background-color: #021668; color:#ffff; width:100%" type="submit" name="login">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
</body>
</html>
