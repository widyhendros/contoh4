<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah</title>
</head>
<body>
    <form action="/barang/tambah" method="post">
    @method("post")
    @csrf
    
        <input type="text" name="brg_name" placeholder="nama barang">
        <input type="number" name="brg_stok" placeholder="stok barang">
    
        <button type="sumbit">tambah data</button>
        
    </form>
</body>
</html>