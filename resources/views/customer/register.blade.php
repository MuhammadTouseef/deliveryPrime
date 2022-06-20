<x-layout>

    <div class="auth d-flex align-items-center justify-content-center flex-column" style="min-height: 120vh;">
        @if ($errors->any())
            <div class="alert alert-danger my-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="authBlock bg-white">
            <h2 class="text-center my-3 py-2 authTitle">Restaurant Sign Up</h2>
            <h3 class="text-center">
                <i class="fa-solid fa-arrow-right-to-bracket fa-2x"></i>
            </h3>
            <form action="/register" method="post" class="form p-3" id="refrm" name="reg_form">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="name" name="name" class="form-control username" placeholder="Enter Name" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" id="username" name="username" class="form-control username" placeholder="Enter Username" />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="text" id="pass" name="password" class="form-control password" placeholder="Enter Password" />
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" class="form-control email" name="email" placeholder="Enter Email" />
                </div>



                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-hotel"></i></span>
                    <input type="text"class="form-control restaurant" name="contact" placeholder="Enter Contact Number" />
                </div>







                <div class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-lg btn-outline-secondary" type="submit" id="button-addon1" >
                        Register
                    </button>
                </div>
            </form>

            <div class="lb d-flex align-items-center justify-content-center flex-column my-3">
                <a href="" class="text-center">Forget Password</a>
                <span>
                    Don't have an account?

                    <a href="/login" class="text-center">Sign in!</a>
                </span>

            </div>
        </div>
    </div>



</x-layout>
