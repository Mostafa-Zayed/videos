<div class="card" style="width: 20rem;">
    <a href="#"><img class="card-img-top" src="{{URL::to('/').'/uploades/images/videos/'.$video->image}}" alt="Card image cap" style="max-height:170px;"></a>
    <div class="card-body">
        <a href="#"><p class="card-text">{{$video->name}}</p></a>
        <small>{{'Created At : '.$video->created_at}}</small>
    </div>
</div>
