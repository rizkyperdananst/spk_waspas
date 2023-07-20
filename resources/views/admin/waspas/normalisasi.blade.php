<div class="row mt-2 mb-2">
     <div class="col-md-12">
          <div class="card shadow">
               <div class="card-header">
                    <h4>Normalisasi</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         <table class="table table-bordered table-hover">
                              <thead>
                                   <tr>
                                        <th>Nama</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach ($data as $item)
                                   <tr>
                                        {{-- @if ($item->kriteria->atribut = "benefit" != "const") --}}
                                             {{-- <td>{{ $item->nama }}</td>
                                             <td>{{ $C1min['produks'] }}</td>
                                             <td>{{ $C2min['produks'] }}</td>
                                             <td>{{ $C3min['produks'] }}</td>
                                             <td>{{ $C4min['produks'] }}</td>
                                             <td>{{ $C5min['produks'] }}</td> --}}
                                        {{-- @else --}}
                                             <td>{{ $item->nama }}</td>
                                             <td>{{ $item->C1 / $C1max['produks'] }}</td>
                                             <td>{{ $item->C2 / $C2max['produks'] }}</td>
                                             <td>{{ $item->C3 / $C3max['produks'] }}</td>
                                             <td>{{ $item->C4 / $C4max['produks'] }}</td>
                                             <td>{{ $item->C5 / $C5max['produks'] }}</td>
                                        {{-- @endif --}}
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>