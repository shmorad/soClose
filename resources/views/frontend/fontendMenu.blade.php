<nav class="navbar fixed-top nav-before navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img class="nav-logo" src="images/nav-logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-0 mr-auto mt-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link nav-font" href="{{url('/')}}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-font" href="#protfolio">Protfolio </a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a href="{{url('/dashboard')}}" class="normal-btn btn" >Dashboard</a>
        </div>
    </div>
</nav>