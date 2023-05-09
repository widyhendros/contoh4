<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=table, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
        </tr>
        @foreach ($detail_v as $item)
        <tr>
            <td>{{$item->brg_name}}</td>
            <td>{{$item->dt_brg_jml}}</td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>