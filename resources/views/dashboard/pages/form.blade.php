<div class="row">
@php $input = 'name'; @endphp
    <div class="col-md-8">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">{{ucfirst($input)}} : </label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}" autofocus>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class='row'>
@php $input = 'describe'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Description : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}">
                {{isset($row) ? $row->{$input} : old($input)}}
            </textarea>                
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class='row'>
@php $input = 'meta_keywords'; @endphp                    
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta KeyWords : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}">
                {{isset($row) ? $row->{$input} : old($input)}}
            </textarea>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class='row'>
@php $input = 'meta_describe'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='5' name="{{$input}}">
                {{isset($row) ? $row->{$input} : old($input)}}
            </textarea>                
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br>
<div class="row">   
    @php $input = 'status'; @endphp
    <div class='col-md-4'>
        <label class='bmd-label-floating'>Status : </label>
    </div>
    <div class="col-md-4">
        <div class="form-check form-check-radio">
            <label class="form-check-label" for='active'>    
                <input class="form-check-input @error($input) is-invalid @enderror" id="active" type="radio" name="{{$input}}"  value="1" {{(isset($row) && $row->status === 1) ? 'checked' : ''}}>Active
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </div>
    <div class='col-md-4'>
        <div class="form-check form-check-radio">
            <label class="form-check-label" for='inactive'>
                <input class="form-check-input @error($input) is-invalid @enderror" type="radio" name="{{$input}}" id="inactive" value="0" {{(isset($row) && $row->status === 0) ? 'checked' : ''}}>Not Active
                <span class="circle">
                    <span class="check"></span>
                </span>
            </label>
        </div>
    </div>  
</div>
<br/>