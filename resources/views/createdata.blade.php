@extends('layout.user')

@section('content')
<body>
  <h1 class="text-center mb-4">Tambah Pengiriman</h1>

  <div class="container">

      <div class="row justify-content-center">
         <div class="col-6">
          <div class="card">
              <div class="card-body">
                  <form action="/createdata" method="POST" enctype="multipart/form-data"> 
                      @csrf
                      <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                        <input type="text" name="nama_pengirim" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>
                      
                      <div class="mb-1">
                         <label for="exampleInputEmail1" class="form-label">Alamat</label>
                         <input type="text" name="alamat_pengirim" class="form-control" id="exampleInputEmail1" 
                         aria-describedby="emailHelp">
                      </div>
                      <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Penerima</label>
                        <input type="text" name="nama_penerima" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>
                      <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat_penerima" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>
                      <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>
                      <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Berat Barang</label>
                        <input type="text" name="berat" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>                     
                      <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label">Pembayaran</label>
                          <select class="form-select" aria-label="Default select example">
                              <option selected>Metode Pembayaran</option>
                              <option value="cash">Cash</option>
                              <option value="kartu_kredit">Kartu Kredit</option>
                          </select>                       
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Rp 10,000/Kg</label>
                        <input type="text" name="total" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp">
                      </div>
                     

                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
              </div>
             </div> 
         </div>
      </div>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

@endsection