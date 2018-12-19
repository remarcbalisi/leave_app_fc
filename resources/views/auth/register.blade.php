@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if (session('success_msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success_msg') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-3">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" placeholder="First Name" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <input id="mname" type="text" class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}" name="mname" value="{{ old('mname') }}" placeholder="Middle Name" required autofocus>

                                @if ($errors->has('mname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="b_day" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-md-6">
                                <input id="b_day" type="date" class="form-control{{ $errors->has('b_day') ? ' is-invalid' : '' }}" name="b_day" value="{{ old('b_day') }}" required>

                                @if ($errors->has('b_day'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('b_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select id="gender" name="gender" class="form-control">
                                    @foreach( $gender as $g )
                                    <option value="{{$g->id}}">{{ucfirst($g->name)}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_hired" class="col-md-4 col-form-label text-md-right">{{ __('Date Hired') }}</label>

                            <div class="col-md-6">
                                <input id="date_hired" type="date" class="form-control{{ $errors->has('date_hired') ? ' is-invalid' : '' }}" name="date_hired" value="{{ old('date_hired') }}" required>

                                @if ($errors->has('date_hired'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('date_hired') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employee_id" class="col-md-4 col-form-label text-md-right">{{ __('Employee ID') }}</label>

                            <div class="col-md-6">
                                <input id="employee_id" type="text" class="form-control{{ $errors->has('employee_id') ? ' is-invalid' : '' }}" name="employee_id" value="{{ old('employee_id') }}" required>

                                @if ($errors->has('employee_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('employee_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <select id="role" name="role" class="form-control">
                                    @foreach( $roles as $role )
                                    <option value="{{$role->id}}">{{ucfirst($role->name)}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('role'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department_id" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select id="role" name="department_id" class="form-control">
                                    @foreach( $departments as $department )
                                    <option value="{{$department->id}}">{{ucfirst($department->name)}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @foreach( $contact_types as $contact_type )
                        <div class="form-group row">
                            <label for="{{$contact_type->name}}" class="col-md-4 col-form-label text-md-right">{{$contact_type->name}}{{ __(' #') }}</label>

                            <div class="col-md-2">
                                <input id="{{$contact_type->name}}-country-code" type="text" class="form-control{{ $errors->has($contact_type->name . '-country-code') ? ' is-invalid' : '' }}" name="{{$contact_type->name . '-country-code'}}" value="{{ old($contact_type->name . '-country-code') }}" placeholder="ex. +63" required>

                                @if ($errors->has($contact_type->name . '-country-code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($contact_type->name . '-country-code') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <input id="{{$contact_type->name}}-number" type="text" class="form-control{{ $errors->has($contact_type->name . '-number') ? ' is-invalid' : '' }}" name="{{$contact_type->name . '-number'}}" value="{{ old($contact_type->name . '-number') }}" required>

                                @if ($errors->has($contact_type->name . '-number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($contact_type->name . '-number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endforeach

                        @foreach( $address_types as $address_type )
                        <div class="form-group row">
                            <label for="{{$address_type->name}}" class="col-md-4 col-form-label text-md-right">{{$address_type->name}}{{ __(' Address') }}</label>

                            <div class="col-md-6">

                            <div class="row">
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-street" type="text" class="form-control{{ $errors->has($address_type->name . '-street') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-street'}}" value="{{ old($address_type->name . '-street') }}" placeholder="Street" required>
                                </div>
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-unit-no" type="text" class="form-control{{ $errors->has($address_type->name . '-unit-no') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-unit-no'}}" value="{{ old($address_type->name . '-unit-no') }}" placeholder="Unit no." required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-barangay" type="text" class="form-control{{ $errors->has($address_type->name . '-barangay') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-barangay'}}" value="{{ old($address_type->name . '-barangay') }}" placeholder="Brgy." required>
                                </div>
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-city" type="text" class="form-control{{ $errors->has($address_type->name . '-city') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-city'}}" value="{{ old($address_type->name . '-city') }}" placeholder="City" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-postal-code" type="text" class="form-control{{ $errors->has($address_type->name . '-postal-code') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-postal-code'}}" value="{{ old($address_type->name . '-postal-code') }}" placeholder="Postal Code" required>
                                </div>
                                <div class="col">
                                <input type="text" id="{{$address_type->name}}-province" type="text" class="form-control{{ $errors->has($address_type->name . '-province') ? ' is-invalid' : '' }}" name="{{$address_type->name . '-province'}}" value="{{ old($address_type->name . '-province') }}" placeholder="Province" required>
                                </div>
                            </div>

                            @if ($errors->has($address_type->name))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first($address_type->name) }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group row">
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
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
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
                        </div>

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
