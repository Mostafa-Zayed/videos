@extends('layouts.main')

@section('content')

    <div class="title">
        <h2>Latest Videos</h2>
    </div>
    <div class="row">
        @foreach($videos as $video)
        <div class="col-lg-4">
            @include('includes.card')
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
@endsection
