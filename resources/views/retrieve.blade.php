<!DOCTYPE html>
<link lang="en">
<head>
</head>
<body>

<ul>
    @foreach($list as $item)
        <li>{{ $item->field_name }}</li>
    @endforeach
</ul>

</body>
</html>
