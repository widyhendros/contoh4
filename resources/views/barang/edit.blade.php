<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/barang/{{$detail_barang[0]->brg_id}}" method="post">
    @method("put")
    @csrf
    
        <input type="text" name="brg_name" placeholder="nama obat" value="{{$detail_barang[0]->brg_name}}">
        <input type="number" name="brg_stok" placeholder="stok barang" value="{{$detail_barang[0]->brg_stok}}">
    
        <button type="sumbit">edit data</button>
        
    </form>
</body>
</html>