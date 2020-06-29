@extends('dashboard.layout.app')
@php
    $pageDesc  = 'Here You Can Create / Edit / Delete '.ucfirst($models);
    $fields = ['id','name','control'];
        $increment = 0;
@endphp
@section('title',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          @component('dashboard.shared.cards.header',['pageTitle'=>$pageTitle,'pageDesc'=>$pageDesc])
            @slot('button')
              @component('dashboard.shared.buttons.add',['model'=>$model,'models'=>$models])
              @endcomponent
            @endslot
          @endcomponent
                <div class="card-body">
                    @component('dashboard.shared.tables.table',['fields'=>$fields])
      @endcomponent
      @include('dashboard.'.$models.'.table-body',['rows'=>$rows])

                    </table>   
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection