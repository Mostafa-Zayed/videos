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
