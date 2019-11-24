<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.masterpage')
    @section('judul')
    Profile User
    @endsection 
    @section('isihalaman')

    <table width="400" border="1">
        <tr>
            <td>Username</td>
            <td>{{$data['username']}}</td>
        </tr>
        <tr>
            <td>Theme</td>
            <td>{{$data['tanggal_login']}}</td>
        </tr>
    </table>
    @endsection
</body>
</html>