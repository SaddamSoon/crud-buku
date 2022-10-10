@extends('layouts.default')


@section('content')
<div class="container-fluid">
   <div class="row">
        <div class="col-lg-12 mt-5">
            <h2>CRUD LARAVEL</h2>
        </div>
        
        <div class="col-lg-12 mt-5 satu position-relative">
            <a href="{{ url('create') }}" class="btn btn-primary ml-2 mb-3">Tambah Data +</a>
            
            <table class="table table-primary table-striped-columns dua table-hover table-bordered border-light">
                
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Terbit</th>
                    <th scope="col" width=250>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data as $index => $d)
                  <tr class="text-center">
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $d->judul }}</td>
                    <td>{{ $d->pengarang }}</td>
                    <td>{{ $d->penerbit }}</td>
                    <td>{{ $d->isbn }}</td>
                    <td>{{ $d->thterbit }}</td>
                    <td width=150> 

                    <a href="{{ url('/destroy/'.$d->id) }}" class="btn bg-danger btn-outline-warning text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>   
                    
                      <a href="{{ url('/show/'.$d->id) }}" class="btn bg-primary btn-outline-light text-light ml-2">Edit</a>
                             
                    
                    
                    </td>
                  </tr>
                  @php
                      $i++;
                  @endphp
                  @endforeach
                  
                </tbody>
              </table>
              
        </div>
      {{-- pagination --}}
        <div class="row mt-5 mb-5">
          <div class="col-12-lg d-flex justify-content-center">
            {{ $data->links() }}
          </div>
        </div>
      {{-- tutup pagination --}}
    </div> 
</div>


{{-- MODAL BOX --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Yaqueen Mau Hapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Hapus</button>
      </div>
    </div>
  </div>
</div>
{{-- TUTUP MODAL BOX --}}

@endsection
