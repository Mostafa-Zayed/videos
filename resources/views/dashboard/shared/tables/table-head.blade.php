<thead class=" text-primary">
	<tr>
    	@foreach($fields as $field)
        	<th style='text-align:center;'>{{ucwords($field)}}</th>
        @endforeach
    </tr>
</thead>