<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Faktur Belanja</h1>
@foreach ($data as $row)
<table id="customers">
  <tr>
    <th>Nomor Invoice</th>
    <th>Kategori Barang</th>
    <th>Nama Barang </th>
    <th>Alamat Pengiriman </th>
    <th>Kode Pos</th>
    <th>Harga</th>
    <th>Harga Total</th>
  </tr>
  <tr>
    @php
        $no=1;
    @endphp
    <th scope="row">{{$no++}}</th>
    <td>{{$row->kategori}} | {{$row->stok}}</td>
    <td>{{$row->nama}}</td>
    <td></td>
    <td></td>
    <td>Rp {{$row->harga}}</td>
    <td>Rp {{$row->harga}}</td>
  </tr>
</table>
@endforeach
</body>
</html>


