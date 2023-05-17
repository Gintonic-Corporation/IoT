<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Termelő gép[{{$producer->id}}]</title>
</head>
<body>
    <h1>Mért adatok:</h1>
<?php

use Illuminate\Http\Request;

    $data=DB::table('producer_sensors')->where('producerID','=',$producer->id)->get();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Dátum</th>
        <th>Óraállás</th>
        <th>Fogyasztás</th>
        <th>Termelt mennyiség</th>
    </tr>
    @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->date}}</td>
        <td>{{$row->meter}}</td>
        <td>{{$row->consumption}}</td>
        <td>{{$row->itemsProduced}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
