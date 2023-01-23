<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
</head>
<body>
<table>
    <tr>
        <th>Activity Name</th>
        <th>Description</th>
        <th>date of activity</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->activity_name}}</td>
            <td>{{$student->description}}</td>
            <td>{{$student->date}}</td>
            <td><a href="{{url('/edit/'.$student->id)}}">Edit</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
