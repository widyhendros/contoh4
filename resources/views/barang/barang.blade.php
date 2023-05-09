<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>barang</title>
</head>
<body>
    @if(session()->has('success'))
    <h1>{{session('success')}}</h1>
    @else
    <h1>{{session('error')}}</h1> 
    @endif 

    <a href="/barang/tambah">tambah Obat</a><br><br><br>
    <table style="width:100%" border="1">
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Barang Stok</th>
    <th>Barang_create_at</th>
    <th>Actions</th>
  </tr>

  @foreach ($barang_v as $key => $barang)
  
  <tr>
    <td>{{++$key}}</td>
    <td>{{$barang->brg_name}}</td>
    <td>{{$barang->brg_stok}}</td>
    <td>{{$barang->brg_create_at}}</td>
    <td><a href="/barang/{{$barang->brg_id}}/edit">EDIT</a> <br><br><form action="/barang/{{$barang->brg_id}}" method="post">
          @method("delete")
          @csrf
        <button type="submit">hapus</button>
      </form></td>
    
  </tr>
  @endforeach
</table>
<br><br><br><br>
<a href="/transaksi">tabel transaksi</a>
</body>
</html>