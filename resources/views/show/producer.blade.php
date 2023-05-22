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
    if(count($data)==0){$dlabel="";$dcons="";$dprod="";};
    $dlabel;$dcons;$dprod;
    foreach($data as $row)
    {
        $dlabel[]=$row->date;
        $dcons[]=$row->consumption;
        $dprod[]=$row->itemsProduced;
    }

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
<hr>
<canvas id="myChart" height="100px" width="500px"></canvas>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

      var labels =  {{ Js::from($dlabel) }};
      var cons =  {{ Js::from($dcons) }};
      var prod =  {{ Js::from($dprod) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Termelés',
          backgroundColor: 'rgb(3, 32, 252)',
          borderColor: 'rgb(3, 32, 252)',
          data: prod,
        },
        {
          label: 'Fogyasztás',
          backgroundColor: 'rgb(240, 252, 3)',
          borderColor: 'rgb(240, 252, 3)',
          data: cons,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
</script>
</html>
