@extends('layouts.main')

@section('content')

    <div class="title">
        <h2>Latest Videos</h2>
    </div>
    <div class="row">
        @include('includes.card')
    </div>
    <div class="row">
        <div class="col-md-12">
            {{$videos->links()}}
        </div>
    </div>
@endsection
