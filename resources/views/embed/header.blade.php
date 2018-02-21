<style>
    nav{
        background-color: #34495e;
    }

</style>

<link rel="stylesheet" href="/css/login_drop.css">
<nav  class="navbar navbar-expand-md navbar-dark fixed-top ">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
        @if(Auth::check())
            <li class="nav-item">
                <div class="dropdown ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b>{{Auth::user()->name}}</b><span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/seller_profile">Анкета</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <hr>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/logout">Logout</a>
            </li>

        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" ><b>Login</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu dropdown-menu-right">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                Login via
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                                or
                                <form class="form" role="form" method="post" action="/sessions" accept-charset="UTF-8" id="login-nav">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> keep me logged-in
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="/register"><b>Join Us</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        @endif
        </ul>
    </div>
</nav>
