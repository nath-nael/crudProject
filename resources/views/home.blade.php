@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <center><img src="{{url('images/logo3.png')}}" width="200" alt=""></center> 
           <center>CHIPI CHAPA SHOP</center>
           <br><br><br>
        </div>
        @foreach ($barangs as $barang)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('fotopegawai/'.$barang->foto)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$barang->nama}}</h5>
                <p class="card-text">Deskripsi : {{$row->keterangan}}</p>
                <p class="card-text">
                    <strong>Harga : </strong>Rp {{number_format($barang->harga)}} <br>
                    <strong>Stok : </strong>{{number_format($barang->stok)}} <br>
                    <strong>Keterangan : </strong>{{number_format($barang->keterangan)}} <br>

                </p>
               
                <a href="#" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-8">
            
        </div>
    </div>
</div>
@endsection
