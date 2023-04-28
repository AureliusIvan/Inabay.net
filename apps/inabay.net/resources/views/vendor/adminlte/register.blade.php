@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">
                {{--                {!! config('adminlte.logo', '<b>Admin</b>LTE') !!} --}}
                <img style="height:150px" src="{{ asset('images/logo_inabay_sementara.jpg') }} " />
            </a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Pendaftaran Anggota Baru</p>
            <form action="{{ route('register') }}" method="post">
                {!! csrf_field() !!}
                <div class="panel panel-info">
                    <div class="panel-heading text-bold">Informasi Personal</div>
                    <div class="panel-body">
                        <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                            <input required type="text" name="name" class="form-control" value="{{ old('name') }}"
                                placeholder="Nama Sesuai KTP">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        {{--                        <div class="form-group"> --}}
                        {{--                            <input type="text" required name="no_ktp" class="form-control" --}}
                        {{--                                   placeholder="No. KTP" /> --}}
                        {{--                        </div> --}}
                        <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                            <textarea required class="form-control" name="address" placeholder="Alamat Sesuai KTP" value="{{ old('address') }}"></textarea>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('city') ? 'has-error' : '' }}">
                            <input required type="text" name="city" class="form-control" placeholder="Kota"
                                value="{{ old('city') }}" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                            <input required type="text" name="zipcode" class="form-control" placeholder="Kode pos"
                                value="{{ old('zipcode') }}" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('zipcode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('zipcode') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <input required type="text" name="phone" class="form-control" placeholder="No telepon"
                                value="{{ old('phone') }}" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('shop_name') ? 'has-error' : '' }}">
                            <input required type="text" name="shop_name" class="form-control" placeholder="Nama toko"
                                value="{{ old('shop_name') }}" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            @if ($errors->has('shop_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('shop_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading text-bold">Informasi Bank</div>
                    <div class="panel-body">
                        <div class="form-group has-feedback {{ $errors->has('bank_name') ? 'has-error' : '' }}">
                            <input required type="text" name="bank_name" class="form-control" placeholder="Nama Bank"
                                value="{{ old('bank_name') }}" />
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('bank_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('bank_acc_name') ? 'has-error' : '' }}">
                            <input required type="text" name="bank_acc_name" class="form-control"
                                placeholder="Nama Pemilik Rekening" value="{{ old('bank_acc_name') }}" />
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('bank_acc_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_acc_name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('bank_acc_no') ? 'has-error' : '' }}">
                            <input required type="text" name="bank_acc_no" class="form-control"
                                placeholder="No. Rekening" value="{{ old('bank_acc_no') }}" />
                            @if ($errors->has('bank_acc_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_acc_no') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading text-bold">Informasi Akun</div>
                    <div class="panel-body">
                        <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                            <input required type="email" name="email" class="form-control" value="{{ old('email') }}"
                                placeholder="{{ trans('adminlte::adminlte.email') }}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                            <input required type="password" name="password" class="form-control"
                                placeholder="{{ trans('adminlte::adminlte.password') }}">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div
                            class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            <input required type="password" name="password_confirmation" class="form-control"
                                placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button>
            </form>
            <div class="auth-links">
                <a href="{{ route('login') }}" class="text-center">Saya sudah menjadi anggota
                    Inabay</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
