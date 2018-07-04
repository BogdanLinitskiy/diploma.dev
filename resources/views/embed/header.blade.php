<style>
    nav{
        background-color: #34495e;
    }
    hr{

        margin: 3px;
    }
</style>

<link rel="stylesheet" href="/css/login_drop.css">
<nav  class="navbar navbar-expand-md navbar-dark fixed-top ">
    <a class="navbar-brand" href="#">Навигация</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Домой <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
        @if(Auth::check())
            <li class="nav-item">
                <div class="dropdown ">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><b>{{Auth::user()->name}}</b><span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/seller_profile">Профиль</a>
                        <a class="dropdown-item" href="/posts">Анкета</a>
                        <hr>
                        <a class="dropdown-item" href="#">Настройки</a>
                        <hr>
                        <a class="dropdown-item" href="/logout">Выйти</a>
                    </div>
                </div>
            </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" ><b>Вход</b> <span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu dropdown-menu-right">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Войти с помощью -->
                                <!-- <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div> -->
                                <!-- или -->
                                <form class="form" role="form" method="post" action="/sessions" accept-charset="UTF-8" id="login-nav">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email </label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Пароль</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Пароль" required>
                                        <div class="help-block text-right"><a href="">Забыли пароль ?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Войти</button>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> оставаться в сети
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="bottom text-center">
                                В первый раз на данном сайте ? <a href="/register"><b>Регистрация</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        @endif
        </ul>
    </div>
</nav>
