<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session()->has('success'))
    <h1>{{session('success')}}</h1>
    @else
    <h1>{{session('error')}}</h1> 
    @endif 
    <a href="transaksi/tambahtransaksi">tambah transaksi</a><br><br><br>
    <table style="width:100%" border="1">
  <tr>
    <th>No</th>
    <th>User name</th>
    {{-- <th>Nama barang</th> --}}
    {{-- <th>QTY</th> --}}
    <th>Create_at</th>
    <th>Action</th>
  </tr>
  @foreach ($transaksi_v as $key => $transaksi)
  
  <tr>
    <td>{{++$key}}</td>
    <td>{{$transaksi->trc_user_name}}</td>
    {{-- <td>{{$transaksi->brg_name}}</td> --}}
    {{-- <td>{{$transaksi->dt_brg_jml}}</td> --}}
    <td>{{$transaksi->trc_create_at}}</td>
    <td><a href="/transaksi/detailtransaksi/{{$transaksi->trc_id}}">detail_transaksi</a></td>
  </tr>
  @endforeach
</table>
<br><br><br><br>
<a href="/barang">tabel barang</a>
</body>
</html>