<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @section('tables')
        <h1>helphjvvvvvvvvvvvvvv</h1>
    @endsection
<table border='1'>
    <tr>
        <th>User Name</th>
        <th>User Age</th>
        <th>User Email</th>
        <th>plate_no_of_rented_car</th>
        <th>model_of_rented_car</th>
        <th>color_of_rented_car</th>
        <th>Type_of_agency</th>

    </tr>

    
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->plate_no }}</td>
            <td>{{ $user->model }}</td>
            <td>{{ $user->color }}</td>
            <td>{{ $user->agency_name }}</td>
        </tr>
        @endforeach
</table>

<p></p>

<table border='1'>
    <tr>
        <th>car model</th>
        <th>car plate no</th>
        <th>car color</th>
        <th>agency name</th>
        <th>agency email</th>
        <th>agency address</th>

    </tr>

    
        @foreach($users as $user)
        <tr>
            <td>{{ $user->model }}</td>
            <td>{{ $user->plate_no }}</td>
            <td>{{ $user->color }}</td>
            <td>{{ $user->agency_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
        </tr>
        @endforeach
</table>


    
</body>
</html>