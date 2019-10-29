@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create listing <a href="/dashboard" class="btn btn-info float-right">Go Back</a></div>

                    <div class="card-body">
                        {!! Form::open(['action' => 'ListingsController@store', 'method' => 'post']) !!}
                            {{ Form::bsText('name', '', ['placeholder' => 'Please enter your name']) }}
                            {{ Form::bsText('website', '', ['placeholder' => 'Please enter your web site']) }}
                            {{ Form::bsText('email', '', ['placeholder' => 'Please enter your email']) }}
                            {{ Form::bsText('phone', '', ['placeholder' => 'Please enter your phone']) }}
                            {{ Form::bsText('address', '', ['placeholder' => 'Please enter your address']) }}
                            {{ Form::bsTextArea('bio', '', ['placeholder' => 'Please enter your bio']) }}
                            {{ Form::bsSubmit('Add', ['class' => 'btn btn-primary']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
