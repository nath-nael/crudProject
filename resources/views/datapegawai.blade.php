<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Chipi Chapa</title>
    <link rel="icon" href="https://i.scdn.co/image/ab67616d00001e02f9a2fe80ff23839bae6fb3ec">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav>
    <div class="logo">
    <img src="https://i.scdn.co/image/ab67616d00001e02f9a2fe80ff23839bae6fb3ec" alt="">
    PT Chipi Chapa
    </div>
        <div class="menu">
            <a href="/welcome">Home</a>
            <a href="/about">About Us</a>
        </div>
</nav>
    <div class="wording">
        <h2><center>Product List</center></h2> 
    </div>
    <div class="container">
        <div class="d-flex justify-content-end">
          <a href="/tambahpegawai" type="button" class="btn btn-success">Add</a>
      </div>
      <form class="row gy-2 gx-3 align-items-center mt-2">
        <div class="col-auto">

          <label class="visually-hidden" for="autoSizingInput">Search</label>
            <form action="/pegawai" method="GET">
              <input type="search" class="form-control" name ="search" id="autoSizingInput" placeholder="Type Product Name">
            </form>
        </div>
      </form>
      <div class="col-auto">

        <a href="/exportpdf" type="button mb-4" class="btn btn-info">Export PDF</a>

          </form>
      </div>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
              
          @endif
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Category</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Photo</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              @php
                  $no=1;

              @endphp
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$row->kategori}}</td>
                    <td>{{$row->nama}}</td>
                    <td>
                      <img src="{{asset('fotopegawai/'.$row->foto)}}" style="width:40px" alt="">
                    </td>
                    <td>Rp {{$row->harga}}</td>
                    <td>{{$row->stok}}</td>
                    {{-- <td>{{$row->created_at->format('D M Y')}}</td> --}}

                    <td>
                        <a href="/tampildata/{{$row->id}}" class="btn btn-info">Edit</a>
                        <a href="#"  class="btn btn-secondary delete" data-id="{{$row->id}} ">Delete</a>
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script
  src="https://code.jquery.com/jquery-3.7.1.slim.js"
  integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
  crossorigin="anonymous"></script>

</body>
  <script>
  $('.delete').click(function(){
    var pegawaiid=$(this).attr('data-id');
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location="/delete/"+pegawaiid+""
        swal("File has been deleted!", {
          icon: "success",
        });
      } else {
        swal("Your imaginary file is safe!");
      }
    });
  });
      
  </script>
</html>