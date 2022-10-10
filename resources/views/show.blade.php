@extends('layouts.default')

@section('content')
    <section>
       <div class="container mt-5">
           <div class="row">
               <div class="col-lg-8 mt-3"><h1>EDIT DATA BUKU</h1></div>
               <div class="col-lg-8 mt-3">
                   <form action="{{ url('/update/'.$data->id) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group mt-3">
                           <label for="judul">Judul Buku*</label>
                           <input class="form-control" type="text" name="judul" id="judul" maxlength="255" value="{{ $data->judul }}">
                       </div>
                       @if ($errors->any('judul'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('judul') }}
                        </div>
                        @endif 
                       <div class="form-group mt-3">
                           <label for="pengarang">Pengarang Buku*</label>
                           <input class="form-control" type="text" name="pengarang" id="pengarang" maxlength="255" value="{{ $data->pengarang }}">
                       </div>
                       @if ($errors->any('pengarang'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('pengarang') }}
                        </div>
                        @endif 
                       <div class="form-group mt-3">
                           <label for="penerbit">Penerbit Buku*</label>
                           <input class="form-control" type="text" name="penerbit" id="penerbit" maxlength="255" value="{{ $data->penerbit }}">
                       </div>
                       @if ($errors->any('penerbit'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('penerbit') }}
                        </div>
                        @endif 
                       <div class="form-group mt-3">
                           <label for="isbn"> ISBN Buku*</label>
                           <input class="form-control" type="number" name="isbn" id="isbn" maxlength="13" value="{{ $data->isbn }}">
                       </div>
                       @if ($errors->any('isbn'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('isbn') }}
                        </div>
                        @endif 
                       
                       <div class="form-group mt-3">
                           <label for="thterbit">Tahun Terbit</label>
                           <select class="custom-select form-control" id="thterbit" name="thterbit"  value="">
                             <option selected>{{ $data->thterbit }}</option>
                             <option value="2022">2022</option>
                             <option value="2021">2021</option>
                             <option value="2020">2020</option>
                             <option value="2019">2019</option>
                             <option value="2018">2018</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2015">2015</option>
                             <option value="2014">2014</option>
                             <option value="2013">2013</option>
                           </select>
                       </div>
                       @if ($errors->any('thterbit'))
                        <div class="alert-sm alert-danger text-danger d-flex align-items-center">
                                {{ $errors->first('thterbit') }}
                        </div>
                        @endif 
                       <div class="form-group mt-3">
                           <button class="btn btn-primary" type="submit"  data-bs-toggle="modal" data-bs-target="#exampleModal">Ubah Data</button>
                       </div>
                      <div class="form-group mt-3 ml-2 font-weight-bold">
                       <a href="{{ url('/') }}"><<-kembali</a>
                      </div>
                       
                   </form>
                   <br><br><br>
               </div>
           </div>
       </div>
    </section>

    {{-- MODAL BOX --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         Sudah Yaqueen dengan Data Ini?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">TYDACK YAQUEEN</button>
          <button type="button" class="btn btn-primary">YAQUEEN</button>
        </div>
      </div>
    </div>
  </div>
  {{-- TUTUP MODAL BOX --}}
@endsection