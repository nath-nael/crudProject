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
        <h2><center>Employee List</center></h2> 
    </div>
    <div class="container">
        {{-- <a href="/tambahpegawai" type="button" class="btn btn-success" >Add</a> --}}
        <div class="d-flex justify-content-end">
          <a href="/tambahpegawai" type="button" class="btn btn-success">Add</a>
      </div>
      <br>
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
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
                <th scope="col">Created  At</th>
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
                    <td>{{$row->nama}}</td>
                    <td>{{$row->umur}}</td>
                    <td>{{$row->alamat}}</td>
                    <td>0{{$row->notelpon}}</td>
                    <td>{{$row->created_at->format('D M Y')}}</td>

                    <td>
                        <a href="/tampildata/{{$row->id}}" class="btn btn-info">Edit</a>
                        <a href="delete/{{$row->id}}"  class="btn btn-secondary">Delete</a>
                        
                    </td>
                  </tr>
                @endforeach
              
              
            </tbody>
          </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>