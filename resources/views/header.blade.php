<div class=" bg-success text-center fw-bold p-4 fs-1">
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <h1 class="fw-bold fs-1 text-dark" style="margin-left: 750px">
                Amazing E-Grocery
            </h1>
        </div>
        <div class="d-flex">
            @guest
                <form class="d-flex" role="right">
                    <div class="ms-auto pe-2">
                        <button class="btn btn-outline-light" type="button"><a class="nav-link active" href="/login">Login</a></button>
                        <button class="btn btn-outline-light " type="button"><a class="nav-link active" href="/register">Register</a></button>
                    </div>
                </form>
                @else
                <div class="d-flex">
                    <form action="/logout" method = "GET">
                        @csrf
                        <div class="buttonSignout">
                            <button type = "submit" class="btn btn-danger fw-bold ">Log Out</button>
                        </div>
                    </form>
                </div>
            @endguest
        </div>
    </div>
</div>
