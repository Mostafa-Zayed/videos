@extends('dashboard.layout.app')
@section('title',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-8">
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
</div>
@endsection