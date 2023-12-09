@extends('partials.connection')

@section('content')
<div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg-xUT9Qdlq9Wo8vAi_K0GnJ_CawBU3Lqg6g&usqp=CAU" alt="logo">
                        </div>
                        <h4>Selamat Datang!</h4>
                        <h6 class="font-weight-light">Kereta Api Indonesia Surabaya</h6>
                        <form class="pt-3" action="/logins" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Email" name="email">
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-transparent border-left-0 password-toggle">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" style="background-color: blue;">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
