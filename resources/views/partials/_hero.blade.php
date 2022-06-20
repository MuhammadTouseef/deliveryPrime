<div id="hero" class="d-flex flex-column justify-content-center align-items-start">
    <div class="ms-md-5 ms-3">
        <h2 class="text-white hero-title">Order food to your door</h2>

        <div class="my-5 input-group mb-3">
                <span class="input-group-text bg-dark text-white" id="location">
                    <i class="fa-solid fa-location-crosshairs fa-2x "></i>
                </span>
{{--            <input type="text" class="form-control py-3" placeholder="Delivery Address ..." aria-label="Username"--}}
{{--                   aria-describedby="basic-addon1" />--}}
            <select class="form-select" aria-label="Default select example">
                <option selected>Select City </option>
                <option value="1">Islamabad</option>
                <option value="2">Lahore</option>
                <option value="3">Karachi</option>
            </select>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button class="w-75 btn-outline-secondary btn btn-lg btn-light text-dark fw-bold findFood">
                Find Food
            </button>
        </div>
    </div>
</div>
