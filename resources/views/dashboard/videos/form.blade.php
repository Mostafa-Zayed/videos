<div class="row">
    @php $input = 'name'; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Video Name : </label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="{{$input}}" autofocus>
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = 'category_id'; @endphp
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Category Name : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" >
                <option disabled>Select Category </option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class='row'>
    @php $input = 'youtube_link'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Youtube Link : </label>
            <input type="url" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" required autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>


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
<div class='row'>
    @php $input = 'meta_keywords'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Keywords : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='3' name="{{$input}}">
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
<div class='row'>
@php $input = 'meta_describe'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description : </label>
            <textarea class='form-control @error($input) is-invalid @enderror' rows='3' name="{{$input}}">
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
<div class='row'>
    @php $input = 'skills[]'; @endphp
    <div class='col-md-6'>
        <div class="form-group">
            <label>Skills :</label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" multiple style="height:100px">
                @foreach($skills as $skill)
                <option value="{{$skill->id}}" {{ in_array($skill->id,$selectedSkills) ? 'selected' : ''}}>{{ucfirst($skill->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @php $input = 'tages[]'; @endphp
    <div class='col-md-6'>
        <div class="form-group">
            <label>Tages :</label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" multiple style="height:100px">
                @foreach($tages as $tage)
                    <option value="{{$tage->id}}" {{ in_array($tage->id,$selectedTages) ? 'selected' : ''}}>{{ucfirst($tage->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class='row'>
    @php $input = 'image'; @endphp
    <div class='col-md-12'>
        <div class="form-group bmd-form-group">
            <label>Video Image : </label>
            <input type="file" class="form-control-file @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br/>
@if(isset($row->image) && !empty($row->image))
    <div class='row'>
        <div class='col-md-12'>
            <div>
                <label>Video Image: </label>
            </div>
            <div id='person_image'>
                <img src="{{URL::to('/').'/uploades/images/videos/'.$row->image}}" width="300" height="200">
            </div>
        </div>
    </div>
@endif

