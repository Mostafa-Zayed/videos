<div class="row">
    @php $input = 'name'; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Course Name : </label>
            <input type="text" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}"  autocomplete="{{$input}}" autofocus id="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
<br/>
<div class='row'>
    @php $input = 'category_id'; @endphp 
    <div class="col-md-12">
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
<br/>
<div class='row'>
    @php $input = 'type_id'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Type Name : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" id="{{$input}}"  >
                <option disabled>Select Type </option>
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{ucfirst($type->name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br>
<div class='row'>
    @php $input = 'price'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Price : </label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}"  autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = 'lectures'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Num Lecutures :</label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="new-{{$input}}" >
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>   
</div>
<br/>
<div class='row'>
    @php $input = 'duration'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Duration : </label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = 'quizzes'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Num Quizzes :</label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="new-{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>   
</div>
<br/>
<div class='row'>
    @php $input = 'pass_percentage'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Pass Percentage : </label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    @php $input = 'max_retakes'; @endphp 
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating" for="{{$input}}">Max Retakes   :</label>
            <input type="number" id="{{$input}}" class="form-control @error($input) is-invalid @enderror" name="{{$input}}" value="{{isset($row) ? $row->{$input} : old($input)}}" autocomplete="new-{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>   
</div>
<br/>
<div class='row'>
    @php $input = 'instructors[]'; @endphp 
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Instructor Name : </label>
            <select name="{{$input}}" class="form-control @error($input) is-invalid @enderror" multiple style="height:100px;">
                @foreach($instructors as $instructor)
                    <option value="{{$instructor->id}}" {{in_array($instructor->id,$selectInstructors) ? 'selected' : ''}}>{{ucfirst($instructor->user->full_name)}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<br/>
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
<br/>
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

<br/>
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
<div class='row'>
    @php $input = 'image'; @endphp 
    <div class='col-md-12'>
        <div class="form-group bmd-form-group">
            <label>Course Image : </label>
            <input type="file" class="form-control-file @error($input) is-invalid @enderror" name="{{$input}}">
            @error($input)
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
</div>
@if(isset($row->image) && !empty($row->image))
<div class='row'>
    <div class='col-md-12'>
        <div id='person_image'>
            <img width="600" src="{{URL::to('/')}}/images/{{$row->image}}"/>
        </div>
    </div>
</div>
@endif