<x-layout>
    <h1>
        {{$type}}
    </h1>
    <div class="auth d-flex align-items-center justify-content-center">
        <div class="authBlock bg-white">
            <h2 class="text-center my-3 py-2 authTitle">Sign In to Your Account</h2>
            <h3 class="text-center">
                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
            </h3>
            <form action="/login" class="form p-3" name="reg_form" method="post">
@csrf
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="name" name="username" class="form-control" placeholder="Enter Username" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="text" id="pass" name="password" class="form-control" placeholder="Enter Password" />
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    @error('username')
                    <p class="text-danger">
                        Invalid Login Credentials
                    </p>
                    @enderror


                </div>

                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-lg btn-outline-secondary" type="submit" id="button-addon1" >
                        Login
                    </button>
                </div>
            </form>

            <div class="lb d-flex align-items-center justify-content-center flex-column my-3">
                <a href="" class="text-center">Forget Password</a>
                <span>
                    Don't have an account?

                    <a href="" class="text-center">Sign up and get started!</a>
                </span>

            </div>
        </div>
    </div>
</x-layout>
