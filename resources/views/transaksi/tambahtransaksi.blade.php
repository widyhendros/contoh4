<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/transaksi/tambahtransaksi" method="post">
    @method("post")
    @csrf
    <table>
        @foreach ($barang_v as $o)
        <tr>
            <td><label for="" >{{$o->brg_name}}-{{$o->brg_stok}}</label></td>
            <input hidden name="barang[]" value="{{$o->brg_id}}" />
            <td><input type="text" name="dt_brg_jml[]" placeholder="jumlah yg di ingin kan"></td>
            
        </tr>
        @endforeach
        
    </table>
        <br><br>
        <input type="text" name="trc_user_name" placeholder="pembeli">

    
         <button type="submit">tambah transaksi</button>
    </form>
</body>
</html>