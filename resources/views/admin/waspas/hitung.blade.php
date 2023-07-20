@extends('layouts.dashboard')
@section('title', 'Admin | Hitung')
    
@section('content')
<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Matrix Pencocockan Kriteria</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                   </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                        <td>1</td>
                                        <td>A1</td>
                                        <td>80</td>
                                        <td>75</td>
                                        <td>80</td>
                                        <td>90</td>
                                        <td>85</td>
                                        <td>80</td>
                                  </tr>
                                  <tr>
                                        <td>2</td>
                                        <td>A2</td>
                                        <td>80</td>
                                        <td>70</td>
                                        <td>85</td>
                                        <td>85</td>
                                        <td>70</td>
                                        <td>80</td>
                                  </tr>
                                  <tr>
                                       <td>3</td>
                                       <td>A3</td>
                                       <td>90</td>
                                       <td>85</td>
                                       <td>90</td>
                                       <td>82</td>
                                       <td>90</td>
                                       <td>85</td>
                                  </tr>
                                  <tr>
                                        <td>4</td>
                                        <td>A4</td>
                                        <td>80</td>
                                        <td>90</td>
                                        <td>81</td>
                                        <td>90</td>
                                        <td>84</td>
                                        <td>80</td>
                                  </tr>
                                  <tr>
                                        <td>5</td>
                                        <td>A5</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>77</td>
                                        <td>85</td>
                                        <td>80</td>
                                        <td>80</td>
                                  </tr>
                                  <tr>
                                        <td>6</td>
                                        <td>A6</td>
                                        <td>70</td>
                                        <td>90</td>
                                        <td>80</td>
                                        <td>85</td>
                                        <td>92</td>
                                        <td>88</td>
                                  </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card shadow">
               <div class="card-header">
                    <h4>Bobot Kriteria</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                   </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                        <td>0,408</td>
                                        <td>0,241</td>
                                        <td>0,158</td>
                                        <td>0,102</td>
                                        <td>0,061</td>
                                        <td>0,027</td>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card shadow">
               <div class="card-header">
                    <h4>Matrix Normalisasi</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                   </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                        <td>1</td>
                                        <td>A1</td>
                                        <td>0.888</td>
                                        <td>0.833</td>
                                        <td>0.888</td>
                                        <td>1</td>
                                        <td>0.923</td>
                                        <td>0.909</td>
                                  </tr>
                                  <tr>
                                        <td>2</td>
                                        <td>A2</td>
                                       <td>0.888</td>
                                       <td>0.777</td>
                                       <td>0.944</td>
                                       <td>0.944</td>
                                       <td>0.760</td>
                                       <td>0.909</td>
                                  </tr>
                                  <tr>
                                       <td>3</td>
                                       <td>A3</td>
                                       <td>1</td>
                                       <td>0.944</td>
                                       <td>1</td>
                                       <td>0.911</td>
                                       <td>0.978</td>
                                       <td>0.965</td>
                                  </tr>
                                  <tr>
                                        <td>4</td>
                                        <td>A4</td>
                                        <td>0.888</td>
                                        <td>1</td>
                                        <td>0.9</td>
                                        <td>1</td>
                                        <td>0.923</td>
                                        <td>0.875</td>
                                  </tr>
                                  <tr>
                                        <td>5</td>
                                        <td>A5</td>
                                        <td>1</td>
                                        <td>0.888</td>
                                        <td>0.855</td>
                                        <td>0.944</td>
                                        <td>0.869</td>
                                        <td>0.909</td>
                                  </tr>
                                  <tr>
                                        <td>6</td>
                                        <td>A6</td>
                                        <td>0.777</td>
                                        <td>1</td>
                                        <td>0.888</td>
                                        <td>0.944</td>
                                        <td>1</td>
                                        <td>1</td>
                                  </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
          <div class="card shadow">
               <div class="card-header">
                    <h4>Nilai Qi</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Qi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                        <td width="5%">1</td>
                                        <td>A1</td>
                                        <td>0.532</td>
                                  </tr>
                                  <tr>
                                        <td width="5%">2</td>
                                        <td>A2</td>
                                        <td>0.431</td>
                                  </tr>
                                  <tr>
                                        <td width="5%">3</td>
                                        <td>A3</td>
                                        <td>0.552</td>
                                  </tr>
                                  <tr>
                                        <td width="5%">4</td>
                                        <td>A4</td>
                                        <td>0.474</td>
                                  </tr>
                                  <tr>
                                        <td width="5%">5</td>
                                        <td>A5</td>
                                        <td>0.659</td>
                                  </tr>
                                  <tr>
                                        <td width="5%">6</td>
                                        <td>A6</td>
                                        <td>0.441</td>
                                  </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>

{{-- <div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Bobot</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>{{ $widget1['kriterias'] }}</th>
                                        <th>{{ $widget2['kriterias'] }}</th>
                                        <th>{{ $widget3['kriterias'] }}</th>
                                        <th>{{ $widget4['kriterias'] }}</th>
                                        <th>{{ $widget5['kriterias'] }}</th>
                                   </tr>
                              </thead>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>

@include('admin.waspas.normalisasi')

<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Produk</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>Nama</th>
                                        <th>WSM</th>
                                        <th>WPM</th>
                                        <th>Qi</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($data as $item)
                                   <tr>
                                        <td>{{ $item->nama }}</td>

                                        <td>
                                             {{ (($item->C1 / $C1max['produks']) * $widget1['kriterias']) + (($item->C2 / $C2max['produks']) * $widget2['kriterias']) + (($item->C3 / $C3max['produks']) * $widget3['kriterias']) + (($item->C4 / $C4max['produks']) * $widget4['kriterias']) + (($item->C5 / $C5max['produks']) * $widget5['kriterias'])}}
                                        </td>

                                        <td>
                                             {{ (($item->C1 / $C1max['produks']) ** $widget1['kriterias']) * (($item->C2 / $C2max['produks']) ** $widget2['kriterias']) * (($item->C3 / $C3max['produks']) ** $widget3['kriterias']) * (($item->C4 / $C4max['produks']) ** $widget4['kriterias']) * (($item->C5 / $C5max['produks']) ** $widget5['kriterias'])}}
                                        </td>

                                        <td>
                                             {{ (((($item->C1 / $C1max['produks']) * $widget1['kriterias']) + (($item->C2 / $C2max['produks']) * $widget2['kriterias']) + (($item->C3 / $C3max['produks']) * $widget3['kriterias']) + (($item->C4 / $C4max['produks']) * $widget4['kriterias']) + (($item->C5 / $C5max['produks']) * $widget5['kriterias'])) * 0.5) + ((($item->C1 / $C1max['produks']) ** $widget1['kriterias']) * (($item->C2 / $C2max['produks']) ** $widget2['kriterias']) * (($item->C3 / $C3max['produks']) ** $widget3['kriterias']) * (($item->C4 / $C4max['produks']) ** $widget4['kriterias']) * (($item->C5 / $C5max['produks']) ** $widget5['kriterias']) * 0.5) }}     
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div> --}}

@endsection