@extends('layouts.dashboard')
@section('title', 'Admin | Data Produk')
    
@section('content')
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          @if (session('success'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
          @endif
     </div>
</div>
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header d-flex justify-content-between">
                    <h4>Data Alternatif</h4>
                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nama</th>
                                        {{-- @foreach ($kriterias as $k)
                                            <th>{{ $k->nama }}</th>
                                        @endforeach --}}
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no= 1;
                                   @endphp
                                   @foreach ($kriterias as $p)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $p->kode }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>
                                             {{-- <a href="{{ route('produk.edit', $p->id) }}"
                                                  class="btn btn-warning">
                                                  <i class="fa-solid fa-pen-to-square"></i>
                                              </a> --}}
                                              <form action="{{ route('produk.destroy', $p->id) }}" method="POST" class="d-inline mb-1">
                                                  @csrf
                                                  @method('delete')
                                                  <button type="submit" class="btn btn-danger"><i
                                                          class="fa-solid fa-trash"></i></button>
                                              </form>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection