@extends('dashboard.layout.app')

@section('title',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            @component('dashboard.shared.cards.header',['pageTitle'=>$pageTitle,'pageDesc'=>$pageDesc,'button'=>null])
      @endcomponent
            <div class="card-body">
            <form action="{{route('dashboard.'.$models.'.store')}}" method="post" enctype='multipart/form-data'>
            {{csrf_field()}}
                @include('dashboard.'.$models.'.form')
                <button type="submit" class="btn btn-primary pull-right">{{$pageTitle}}</button>
                <div class="clearfix"></div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection