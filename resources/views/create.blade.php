 @extends('layouts.default')
@php
    



@endphp
 @section('content')
     <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 mt-3"><h1>TAMBAH DATA BUKU</h1></div>
                <div class="col-lg-8 mt-3">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="judul">Judul Buku*</label>
                            <input class="form-control" type="text" name="judul" id="judul" value="{{ old('judul') }}">
                        </div>
                        <!-- validation--> 
                        @if ($errors->any('judul'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('judul') }}
                        </div>
                        @endif  
                        <!-- Create Post Form -->
                        <div class="form-group mt-3">
                            <label for="pengarang">Pengarang Buku*</label>
                            <input class="form-control" type="text" name="pengarang" id="pengarang" value="{{ old('pengarang') }}">
                        </div>
                        @if ($errors->any('pengarang'))
                        <div class="text-danger">
                                {{ $errors->first('pengarang') }}
                        </div>
                        @endif  
                        <div class="form-group mt-3">
                            <label for="penerbit">Penerbit Buku*</label>
                            <input class="form-control" type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}">
                        </div>
                        @if ($errors->any('penerbit'))
                        <div class="text-danger">
                                {{ $errors->first('penerbit') }}
                        </div>
                        @endif  
                        <div class="form-group mt-3">
                            <label for="isbn"> ISBN Buku*</label>
                            <input class="form-control" type="number" name="isbn" id="isbn" value="{{ old('isbn') }}">
                        </div>
                        @if ($errors->any('isbn'))
                        <div class="text-danger">
                                {{ $errors->first('isbn') }}
                        </div>
                        @endif  
                        
                        <div class="form-group mt-3">
                            <label for="thterbit">Tahun Terbit</label>
                            <select type="text" class="custom-select form-control" id="thterbit inputGroupSelect01" name="thterbit" value="{{ old('thterbit') }}">
                              <option value="">Pilih Tahun</option>
                              @for ($i = 2013; $i <= 2022; $i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                            </select>
                        </div>
                        @if ($errors->any('thterbit'))
                        <div class="text-danger">
                                {{ $errors->first('thterbit') }}
                        </div>
                        @endif  
                        <div class="form-group mt-3">
                            <button id="testBtn" class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Masukkan Data</button>
                        </div>
                       <div class="form-group mt-3 ml-2 font-weight-bold">
                        <a href="{{ url('/') }}"><<-kembali</a>
                       </div>
                        
                    </form>
                    <br><br><br>
                </div>
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

        


     </section>

     <script>
        
    </script>

 @endsection