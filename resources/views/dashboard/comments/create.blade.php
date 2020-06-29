<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title"> Your Comment</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">            
            <form action="{{route('dashboard.comments.store')}}" method="post">
    @include('dashboard.comments.form')
    <input type='hidden' name='video_id' value="{{$row->id}}">
    <button type="submit" class="btn btn-primary pull-right">{{'add comment'}}</button>
    <div class="clearfix"></div>
    </form>
            </div>
        </div>
    </div>
</div>



