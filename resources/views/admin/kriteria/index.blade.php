@extends('layouts.dashboard')
@section('title', 'Admin | Data Kriteria')
    
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
                    <h4>Data Kriteria</h4>
                    <a href="{{ route('kriteria.create') }}" class="btn btn-primary">Tambah</a>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Keterangan</th>
                                        <th>Jenis</th>
                                        <th>Aksi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @php
                                       $no= 1;
                                   @endphp
                                   @foreach ($kriterias as $k)
                                   <tr>
                                        <td width="5%">{{ $no++ }}</td>
                                        <td>{{ $k->kode }}</td>
                                        <td>{{ $k->keterangan }}</td>
                                        <td>{{ $k->jenis }}</td>
                                        <td width="19%">
                                             {{-- <a href="#"
                                                  class="btn btn-info">
                                                  <i class="fa-solid fa-eye"></i>
                                              </a> --}}
                                             <a href="{{ route('kriteria.edit', $k->id) }}"
                                                  class="btn btn-warning">
                                                  <i class="fa-solid fa-pen-to-square"></i>
                                              </a>
                                              <form action="{{ route('kriteria.destroy', $k->id) }}"
                                                  method="POST" class="d-inline mb-1">
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