<x-auth-layout :title="'Registratsiya'">

    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign up</p>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Parol" name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Parolni tasdiqlang"
                    name="password_confirmation">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary btn-block">Ro'yxatdan o'tish</button>
                </div>
            </div>

        </form>



        <p class="mb-0">
            <a href="{{ route('login') }}" class="text-center">Akkauntingiz bormi?</a>
        </p>
    </div>
</x-auth-layout>
