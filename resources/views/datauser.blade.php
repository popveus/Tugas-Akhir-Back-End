@extends('layout.user')

@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
</div>
<div class="container"> 
        
            <div class="row-center">            
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Pengirim</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Penerima</th>   
                      <th scope="col">Alamat</th> 
                      <th scope="col">Nama Barang</th>                
                      <th scope="col">Berat Barang</th>
                      <th scope="col">Pembayaran</th>
                      <th scope="col">Jenis Pembayaran</th>
                    </tr>
                  </thead>
      
                  <tbody>
                  @php
                     $nomer = 1;   
                  @endphp
                   @foreach ($data as $row )
                   <tr>
                      <th scope="row">{{ $nomer++ }}</th>
                      <td>{{ $row->nama_pengirim }}</td>
                      <td>{{ $row->alamat_pengirim }}</td>                    
                      <td>{{ $row->nama_penerima }}</td>
                      <td>{{ $row->alamat_penerima }}</td>
                      <td>{{ $row->nama_barang }}</td>
                      <td>{{ $row->berat }}</td>                    
                      <td>{{ $row->total }}</td>
                      <td>{{ $row->jenis_pembayaran }}</td>
                      
      
                      <td>                        
                          <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}">Batalkan</a>
                      </td>
                    </tr> 
                   @endforeach     
                  </tbody>                
              </table>
            </div>
</div>          
      
    
      

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>

  $('.delete').click( function(){
    var userid = $(this).attr('data-id');
    swal({
        title: "Apa Anda Yakin?",
        text: "Setelah dibatalkan,Anda tidak dapat memulihkan pengiriman",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
   .then((willDelete) => {

      if (willDelete) {
        window.location = "/delete/"+userid+""
          swal("Pengiriman Berhasil Dibatalkan", {
            icon: "success",
          });
        } else {
          swal("Pengiriman Tidak Jadi Dibatalkan");
        }
      });  
  });    
    
</script>
@endpush
