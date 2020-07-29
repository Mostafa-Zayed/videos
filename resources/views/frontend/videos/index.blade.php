@extends('layouts.main')
@section('title')
    {{$video->name}}
@endsection
@section('content')
            <div class="row">
                <p><strong>{{$video->name}}</strong></p>
                <br>
                <div class="col-md-12">
                @php $videoId = getVideoId($video->youtube_link); @endphp
                @if(isset($videoId) && !empty($videoId))
                    <iframe height="500" width="100%" src="https://www.youtube.com/embed/{{$videoId}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                @endif
                </div>
            </div><br>
    <div class="row">
        <div class="col-md-12">
            <p>Video Instructor : <strong>{{ ucfirst($video->user->name)}}</strong></p>
            <p>Description Video : <strong>{{$video->describe}}</strong></p>
            <p>Published Date : <strong>{{$video->created_at}}</strong></p>
            <p>Category : <a href="{{route('category',['category'=>$video->category->name])}}"><strong>{{ucfirst($video->category->name)}}</strong></a></p>
            <p>Skills :<br>
                @foreach($video->tages as $tage)
                    <span class="badge badge-pill badge-info">{{$tage->name}}</span>
                    @endforeach
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="title">
                <p><strong>Video Comments :</strong></p>
            </div>
        </div>
        @if($video->comments->count() > 0)
            @foreach($video->comments as $comment)
        <div class="col-md-1.5">
            <button class="btn btn-danger">{{ucfirst($video->user->name)}}</button>
        </div>
        <div class="col-md-10">
            <div class="alert alert-info">{{$comment->comment}}</div>
        </div>
            @endforeach
        @else
            <div class="col-md-12">
        <div class="alert alert-info">No Comments Yet</div>
            </div>
        @endif
    </div>
@endsection
