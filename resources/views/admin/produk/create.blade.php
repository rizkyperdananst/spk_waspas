@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Produk')
    
@section('content')
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Tambah Alternatif</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST">
                         @csrf
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              @foreach ($kriterias as $k)
                              <div class="col-md-6 mb-3">
                                   <label for="{{ $k->kode }}" class="form-label">{{ $k->kode }}</label>
                                   <input type="number" name="{{ $k->kode }}" id="{{ $k->kode }}" class="form-control @error('{{ $k->kode }}') is-invalid @enderror" placeholder="masukkan {{ $k->kode }}">
                                   @error('{{ $k->kode }}')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              @endforeach
                              {{-- <div class="col-md-6">
                                   <label for="C2" class="form-label">Bahan</label>
                                   <input type="number" name="C2" id="C2" class="form-control @error('C2') is-invalid @enderror" placeholder="masukkan C2">
                                   @error('C2')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div> --}}
                         </div>
                         {{-- <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C3" class="form-label">Kualitas</label>
                                   <input type="number" name="C3" id="C3" class="form-control @error('C3') is-invalid @enderror" placeholder="masukkan C3">
                                   @error('C3')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C4" class="form-label">Merek</label>
                                   <input type="number" name="C4" id="C4" class="form-control @error('C4') is-invalid @enderror" placeholder="masukkan C4">
                                   @error('C4')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C5" class="form-label">Penjualan</label>
                                   <input type="number" name="C5" id="C5" class="form-control @error('C5') is-invalid @enderror" placeholder="masukkkan C5">
                                   @error('C5')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div> --}}
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <button class="btn btn-primary float-end ms-3">Tambah</button>
                                   <a href="{{ route('produk.index') }}" class="btn btn-secondary float-end">Kembali</a>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection