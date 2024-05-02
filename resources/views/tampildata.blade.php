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
        <h2><center>Update Employee Data</center></h2> 
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Product Name</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$data->nama}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Price</label>
              <input type="number"name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$data->harga}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Stock</label>
              <input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$data->stok}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Photo</label>
              <input type="file" name="foto" class="form-control" value="{{$data->foto}}">
            </div>
    
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>