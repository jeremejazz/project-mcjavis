<nav class="navbar default-color nav-shadow">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand waves-effect waves-light" href="{{ url('/') }}" >McJaviz</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/menu-order') }}" class="waves-effect waves-light">Our Food <span class="sr-only">(current)</span></a>

                </li>
                <li><a href="{{ url('cart') }}"  class="waves-effect waves-light">Cart</a>

                </li>
                <li><a href="{{ url('payment') }}"  class="waves-effect waves-light">Payment</a>
                </li>

            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group waves-effect waves-light">
                    <input type="text" class="form-control" placeholder="Food Search!">
                </div>
            </form>
        </div>
    </div>
</nav>