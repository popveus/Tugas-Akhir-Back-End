@extends('layout.user')

@section('content')
<body>
  <h1 class="text-center mb-4">Edit Data User</h1>

  <div class="container">

      <div class="row justify-content-center">
         <div class="col-8">
          <div class="card">
              <div class="card-body">
                  <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                        <input type="text" name="nama_pengirim" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->pengirim }}">
                      </div>
                      <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Telepon</label>
                         <input type="number" name="telepon" class="form-control" id="exampleInputEmail1" 
                         aria-describedby="emailHelp" value="{{ $data->notelepon }}">
                      </div>
                      <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Alamat</label>
                         <input type="number" name="alamat_pengirim" class="form-control" id="exampleInputEmail1" 
                         aria-describedby="emailHelp" value="{{ $data->alamatpengirim }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerima</label>
                        <input type="text" name="nama_penerima" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->penerima }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat_penerima" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->alamatpenerima }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->barang }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Berat Barang</label>
                        <input type="text" name="berat" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->beratbarang }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Total Pembayaran</label>
                        <input type="text" name="total" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->pembayaran }}">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                        <input type="text" name="jenis_pembayaran" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="{{ $data->pembayaran }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
             </div> 
         </div>
      </div>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

@endsection