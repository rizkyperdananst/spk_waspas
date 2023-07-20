@extends('layouts.dashboard')
@section('title', 'Admin | Edit Produk')
    
@section('content')
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Edit Produk</h4>
               </div>
               <div class="card-body">
                    <form action="{{ route('produk.update', $p->id) }}" method="POST">
                         @csrf
                         @method('put')
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <label for="nama" class="form-label">Nama</label>
                                   <input type="text" name="nama" value="{{ $p->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="masukkan nama">
                                   @error('nama')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C1" class="form-label">Tampilan</label>
                                   <input type="number" name="C1" value="{{ $p->C1 }}" id="C1" class="form-control @error('C1') is-invalid @enderror" placeholder="masukkan C1">
                                   @error('C1')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C2" class="form-label">Bahan</label>
                                   <input type="number" name="C2" value="{{ $p->C2 }}" id="C2" class="form-control @error('C2') is-invalid @enderror" placeholder="masukkan C2">
                                   @error('C2')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C3" class="form-label">Kualitas</label>
                                   <input type="number" name="C3" value="{{ $p->C3 }}" id="C3" class="form-control @error('C3') is-invalid @enderror" placeholder="masukkan C3">
                                   @error('C3')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              <div class="col-md-6">
                                   <label for="C4" class="form-label">Merek</label>
                                   <input type="number" name="C4" value="{{ $p->C4 }}" id="C4" class="form-control @error('C4') is-invalid @enderror" placeholder="masukkan C4">
                                   @error('C4')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-6">
                                   <label for="C5" class="form-label">Penjualan</label>
                                   <input type="number" name="C5" value="{{ $p->C5 }}" id="C5" class="form-control @error('C5') is-invalid @enderror" placeholder="masukkkan C5">
                                   @error('C5')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div>
                              {{-- <div class="col-md-6">
                                   <label for="kriteria_id" class="form-label">Kriteria</label>
                                   <select name="kriteria_id" id="kriteria_id" class="form-select @error('kriteria_id') is-invalid @enderror">
                                        <option selected hidden>Pilih Kriteria</option>
                                        @foreach ($kriterias as $k)
                                             @if ($p->kriteria_id == $k->id)
                                                  <option value="{{ $k->id }}" selected>{{ $k->nama }}</option>
                                             @else
                                                  <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                             @endif
                                        @endforeach
                                   </select>
                                   @error('kriteria_id')
                                       <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                   @enderror
                              </div> --}}
                         </div>
                         <div class="row mb-3">
                              <div class="col-md-12">
                                   <button class="btn btn-primary float-end ms-3">Update</button>
                                   <a href="{{ route('produk.index') }}" class="btn btn-secondary float-end">Kembali</a>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection