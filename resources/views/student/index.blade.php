@foreach ($studentTypes as $studentType)
<tr>
    <td>{{$loop -> iteration}}</td>
    <td>{{$studentType->name}}</td>
    <td>{{$studentType->grade}}</td>
    <br>
</tr>
    
@endforeach