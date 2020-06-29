<form action="{{route('dashboard.'.$models.'.destroy',['id'=>$row->id])}}" method="post" style="display:inline;">
    {{csrf_field()}}
    {{method_field('delete')}}
    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove {{$model}}">
        <i class="material-icons" >close</i>
    </button>
</form>