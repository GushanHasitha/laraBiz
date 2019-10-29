@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create listing <a href="/dashboard" class="btn btn-info float-right">Go Back</a></div>

                    <div class="card-body">
                        {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'post']) !!}
                        {{ Form::bsText('name', $listing->name, ['placeholder' => 'Please enter your name']) }}
                        {{ Form::bsText('website', $listing->website, ['placeholder' => 'Please enter your web site']) }}
                        {{ Form::bsText('email', $listing->email, ['placeholder' => 'Please enter your email']) }}
                        {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Please enter your phone']) }}
                        {{ Form::bsText('address', $listing->address, ['placeholder' => 'Please enter your address']) }}
                        {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'Please enter your bio']) }}
                        {{ Form::bsSubmit('Update', ['class' => 'btn btn-primary']) }}
                        {{ Form::hidden('_method', 'PUT') }}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
