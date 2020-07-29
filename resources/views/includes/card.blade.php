@if($videos->count() > 0)
@foreach($videos as $video)
    <div class="col-lg-4">
        <div class="card" style="width: 20rem;">
            <a href="{{route('video',['video'=>$video->id])}}"><img class="card-img-top" src="{{URL::to('/').'/uploades/images/videos/'.$video->image}}" alt="Card image cap" style="max-height:170px;"></a>
            <div class="card-body">
                <a href="{{route('video',['video'=>$video->id])}}"><p class="card-text">{{$video->name}}</p></a>
                <p>Category : <a href="{{route('category',['category'=>$video->category->name])}}"><strong>{{ucfirst($video->category->name)}}</strong></a></p>
                <small>{{'Published At : '.$video->created_at}}</small>
            </div>
        </div>
    </div>
@endforeach
    @else
    <div class="col-lg-12">
        <div class="card" style="text-align: center;">
            <div class="card-body">
                <p><strong>No Videos Yet</strong></p>
            </div>
        </div>
    </div>
@endif
