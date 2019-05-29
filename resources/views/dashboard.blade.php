@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Dashboard<a href="/listings/create" class="btn btn-success btn-xs float-right">Add Listing</a></h2>     
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h3>Your Listings</h3>
                @if(count($listings) > 0)
                    @foreach ($listings as $listing)                     
                        <div class="card mb-3" style="">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <strong>{{$listing->name}}</strong>                                  
                                </h5> 
                                <div class="card-subtitle">  
                                    {!!Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger float-right'])}}
                                    {!! Form::close() !!} 
                                    <a href="/listings/{{$listing->id}}/edit" class="btn btn-primary float-right mr-3">Edit</a> 
                                </div>                         
                                <p class="card-text mt-3">{{$listing->bio}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
