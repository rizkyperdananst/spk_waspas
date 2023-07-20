@extends('layouts.dashboard')
@section('title', 'Admin | Hasil Akhir')
    
@section('content')
     <div class="row">
          <div class="col-md-12">
               <a href="#" class="btn btn-primary float-end"><i class="fa-solid fa-print pe-2"></i>Cetak Data</a>
          </div>
     </div>
    <div class="row">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Hasil Akhir Perangkingan</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-hover table-bordered">
                              <tbody>
                                   <tr>
                                        <th>Alternatif</th>
                                        <th>Nilai Qi</th>
                                        <th>Rank</th>
                                   </tr>
                                   <tr>
                                        <td>A5</td>
                                        <td>0.659</td>
                                        <td>1</td>
                                   </tr>
                                   <tr>
                                        <td>A3</td>
                                        <td>0.552</td>
                                        <td>2</td>
                                   </tr>
                                   <tr>
                                        <td>A1</td>
                                        <td>0.532</td>
                                        <td>3</td>
                                   </tr>
                                   <tr>
                                        <td>A4</td>
                                        <td>0.474</td>
                                        <td>1</td>
                                   </tr>
                                   <tr>
                                        <td>A6</td>
                                        <td>0.441</td>
                                        <td>5</td>
                                   </tr>
                                   <tr>
                                        <td>A2</td>
                                        <td>0.431</td>
                                        <td>6</td>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
    </div>
@endsection