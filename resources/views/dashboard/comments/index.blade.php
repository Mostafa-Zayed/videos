
<div class="tab-content">
    <div class="tab-pane active" id="profile">
        <table class="table">
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>
                        @if($comment->user->id == $comment->user_id)
                            <buttons class='btn btn-danger'>
                                {{ucfirst('Instructor')}}
                            </buttons>
                        @else
                        <buttons class='btn btn-primary'>
                            {{ucfirst($comment->user->name)}}
                        </buttons>
                        @endif
                    </td>
                    <td>
                        <p>{{$comment->comment}}</p>
                        <p>{{$comment->created_at}}</p>
                    </td>
                    <td class="td-actions text-center">
                        <form action="{{route('dashboard.comment.destroy',['id'=>$comment->id])}}" method="post" style="display:inline;">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <button type="submit"  class="btn btn-white btn-link btn-sm" data-original-title="Remove Your Comment">
                                <i class="material-icons" >close</i>
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>
                        <buttons class="btn btn-warning">Update Your Comment: </buttons></td>
                    <td>
                        <form action="{{route('dashboard.comment.update',['id'=>$comment->id])}}" method="post">
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <div class='row'>
                                @php $input = 'comment'; @endphp
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <input type='hidden' name='video_id' value="{{$row->id}}">
                                        <textarea class='form-control @error($input) is-invalid @enderror' rows='3' name="{{$input}}">
                                        {{isset($comment) ? $comment->{$input} : old($input)}}
                                        </textarea>
                                        @error($input)
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Update Comment</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$comments->links()}}
</div>
