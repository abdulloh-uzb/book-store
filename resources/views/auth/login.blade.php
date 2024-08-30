<x-auth-layout :title="'Kirish'">

    <div class="card-body login-card-body">
        <p class="login-box-msg">Kirish</p>

        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                    name="email" value="{{ old('email') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Parol"
                    name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">
                            Eslab qol
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Kirish</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <p class="mb-1">
            <a href="forgot-password.html">Parolni unutdingizmi?</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('register') }}" class="text-center">Yangi akkaunt ochish</a>
        </p>



    </div>



</x-auth-layout>
