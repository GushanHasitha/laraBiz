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
                                <td></td>
                            </tr>
                            @foreach ($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td>{{$listing->website}}</td>
                                    <td></td>
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
