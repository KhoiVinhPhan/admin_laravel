@extends('layouts.backend.app')

@section('title', 'Create')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3>Tạo tài khoản</h3>
        </div>
        <div class="col-md-7 page-action text-right">
            <a href="{{ route('users.index') }}" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Quay lại</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => ['users.store'] ]) !!}
                @include('user._form')
                <!-- Submit Form Button -->
                {!! Form::submit('Tạo', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection