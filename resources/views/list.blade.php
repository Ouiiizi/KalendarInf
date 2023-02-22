<html>
<head></head>
<body>
<a href="{{url('/create')}}"></a><button>Create</button>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>Image</th>
    </tr>
    @foreach($Student as $Student)
        <tr>
            <td>{{$Student->activity_name}}</td>
            <td>{{$student->description}}</td>
            <td>{{$student->date}}</td>
            <td> <a href="{{url('/edit/'.$student->id)}}"> Edit</a></td>
            <td> <a href="{{url('/delete/'.$student->id)}}"> Delete</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
