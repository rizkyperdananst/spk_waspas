@extends('layouts.dashboard')
@section('title', 'Admin | Edit Kriteria')
    
@section('content')
<div class="row mt-3 mb-3">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Kriteria</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('kriteria.update', $k->id) }}" method="POST">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="kode" class="form-label">Kode</label>
                                   <input type="text" name="kode" value="{{ $k->kode }}" id="kode" class="form-control @error('kode') is-invalid @enderror" placeholder="masukkan kode">
                                   @error('kode')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" value="{{ $k->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="bobot" class="form-label">Bobot</label>
                                   <input type="text" name="bobot" value="{{ $k->bobot }}" id="bobot" class="form-control @error('bobot') is-invalid @enderror" placeholder="masukkan bobot">
                                   @error('bobot')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <button class="btn btn-primary float-end ms-3">Update</button>
                                   <a href="{{ route('kriteria.index') }}" class="btn btn-secondary float-end">Kembali</a>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection