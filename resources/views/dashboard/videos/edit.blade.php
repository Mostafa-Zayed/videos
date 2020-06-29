@extends('dashboard.layout.app')
@section('title',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{$pageTitle}}</h4>
                    <p class="card-category">{{$pageDesc}}</p>
            </div>
            <div class="card-body">
            <form action="{{route('dashboard.'.$models.'.update',['id'=>$row->id])}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
            {{method_field('put')}}
                @include('dashboard.'.$models.'.form')
                <button type="submit" class="btn btn-primary pull-right">{{$pageTitle}}</button>
                <div class="clearfix"></div>
            </form>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
                <div class='card'>
                    <div class='card-body'>
                        @php $videoId = getVideoId($row->youtube_link); @endphp
                        @if(isset($videoId) && !empty($videoId))
                        <iframe width="380" src="https://www.youtube.com/embed/{{$videoId}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <br>
                        <div>
                            <img width="380" height="200" src="{{url('uploades/videos/'.$row->image)}}">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
    <div class='col-md-12'>
        <div class='card'>
            
                @include('dashboard.shared.cards.header',['pageTitle'=>'Video Comments','pageDesc'=>'Here You Can Control Video Comments','button'=>null])
            <div class='card-body'>
                @include('dashboard.comments.index',['comments'=>$comments])
                <div>
                @include('dashboard.comments.form')
            </div>
            </div>
        </div>
    </div>
</div>
@endsection