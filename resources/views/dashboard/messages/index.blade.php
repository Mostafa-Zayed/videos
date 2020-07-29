@extends('dashboard.layout.app')
@php
    $pageDesc  = 'Here You Can Show / Delete '.$models;
    $fields    = array('id','name','email','message','control');
    $increment = 0;
@endphp
@section('title',$pageTitle)
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

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
