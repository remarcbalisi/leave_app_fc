@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf       
                        <!-- ###################### fname -->
                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ###################### lname -->
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ###################### mname -->
                         <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}" name="mname" value="{{ old('mname') }}" required autofocus>

                                @if ($errors->has('mname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <!-- ###################### b_day -->
                        <div class="form-group row">
                            <label for="b_day" class="col-md-4 col-form-label text-md-right">{{ __('Birth day') }}</label>

                            <div class="col-md-6">
                                <input id="b_day" type="date" class="form-control{{ $errors->has('b_day') ? ' is-invalid' : '' }}" name="b_day" value="{{ old('b_day') }}" required autofocus>

                                @if ($errors->has('b_day'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('b_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ################## -->
                        <div class="form-group row">
                            <label for="date_hired" class="col-md-4 col-form-label text-md-right">{{ __('Date Hired') }}</label>

                            <div class="col-md-6">
                                <input id="date_hired" type="date" class="form-control{{ $errors->has('date_hired') ? ' is-invalid' : '' }}" name="date_hired" value="{{ old('date_hired') }}" required autofocus>

                                @if ($errors->has('date_hired'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_hired') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!-- ####################### -->
                        <div class="form-group row">
                            <label for="dept_name" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select id="dept_name" type="date" class="form-control{{ $errors->has('dept_name') ? ' is-invalid' : '' }}" name="dept_name" value="{{ old('dept_name') }}" required autofocus>
                                   <option>--select--</option> 
                                </select>
                                

                                @if ($errors->has('dept_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dept_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ################## -->

                         <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- ################## -->

                         <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <!-- ################## -->

                         <div class="form-group row">
                            <label for="confpass" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="confpass" type="text" class="form-control{{ $errors->has('confpass') ? ' is-invalid' : '' }}" name="confpass" value="{{ old('confpass') }}" required autofocus>

                                @if ($errors->has('confpass'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confpass') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        






                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
