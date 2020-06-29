<form action="{{route('dashboard.comments.store')}}" method="post" enctype='multipart/form-data'>
{{csrf_field()}}
<div class='row'>
@php $input = 'comment'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Your Comment : </label>
            <input type='hidden' name='video_id' value="{{$row->id}}">
            <textarea class='form-control @error($input) is-invalid @enderror' rows='3' name="{{$input}}">
                {{isset($row) ? $row->{$input} : old($input)}}
            </textarea>                
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary pull-right">Add Comment</button>
    </div>
</div>
</form>
