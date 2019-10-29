@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($listings) > 0)
                        <h1>Your listings</h1>
                        <table class="table table-striped">
                            <tr>
                                <td>Company</td>
                                <td>Website</td>
                                <td>Actions</td>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td>{{$listing->website}}</td>
                                    <td>
                                        {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'post', 'class' => 'float-right',  'onsubmit' => 'return confirm("Are you sure want to delete this listing?")']) !!}
                                        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {!! Form::close() !!}
                                        <a class="btn btn-warning float-right mr-2" href="/listings/{{$listing->id}}/edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
