<tbody>
@foreach($rows as $row)
    <tr>
        <td style='text-align:center;'>{{++$increment}}</td>
        <td style='text-align:center;'>{{$row->name}}</td>
        <td style='text-align:center;'>{{$row->email}}</td>
        <td style='text-align:center;'>{{$row->message}}</td>
        <td class="td-actions text-center">
            &nbsp;
            @include('dashboard.shared.buttons.delete',['model'=>$models,'id'=>$row->id])
        </td>
    </tr>
@endforeach
</tbody>
