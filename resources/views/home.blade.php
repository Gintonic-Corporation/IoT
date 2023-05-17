<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IoT</title>
</head>
<body>
<?php
use App\Models\Producer;
use App\Models\Air_extractor;
use App\Models\Compressor;
use Illuminate\Http\Request;

    $producers=Producer::all();
    $compressors=Compressor::all();
    $air_extractors=Air_extractor::all();
?>
<h1>Termelő gépek:</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Elszívó azonosító</th>
        <th>Gyár azonosító</th>
    </tr>
    @foreach($producers as $producer)
    <tr>
        <td>{{$producer->id}}</td>
        <td><a href="/producer/{{$producer->id}}">{{$producer->name}}</a></td>
        <td>{{$producer->extractorID}}</td>
        <td>{{$producer->factoryID}}</td>
    </tr>
    @endforeach
</table>
<hr>
<h1>Kompresszorok:</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Gyár azonosító</th>
    </tr>
    @foreach($compressors as $compressor)
    <tr>
        <td>{{$compressor->id}}</td>
        <td><a href="/compressor/{{$compressor->id}}">{{$compressor->name}}</a></td>
        <td>{{$compressor->factoryID}}</td>
    </tr>
    @endforeach
</table>
<hr>
<h1>Elszívó berendezések:</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
    </tr>
    @foreach($air_extractors as $air_extractor)
    <tr>
        <td>{{$air_extractor->id}}</td>
        <td><a href="/air_extractor/{{$air_extractor->id}}">{{$air_extractor->name}}</a></td>
    </tr>
    @endforeach
</table>
</body>
</html>
