@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard 
                <span class="float-right">
                    <a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a>
                </span>
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
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Company</strong></h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$listing->name}}</h6>
                                <p class="card-text">Some quick example text to build on the card title 
                                    and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
