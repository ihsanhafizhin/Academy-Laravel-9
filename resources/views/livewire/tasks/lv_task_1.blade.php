<div>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="card-title">Customers</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. Identitas</th>
                                <th>Jenis Identitas</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr wire:key="{{'row-cs-'.$customer->No_Identitas}}">
                                <td>{{$customer->No_Identitas}}</td>
                                <td>{{$customer->Jenis_Identitas}}</td>
                                <td> {{$customer->Nama}} </td>
                                <td> {{$customer->Alamat}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="card-title">Films</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Film</th>
                                <th>Jenis</th>
                                <th>Judul</th>
                                <th>Jumlah Keping</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($films as $film)
                            <tr wire:key="{{'row-flm-'.$film->Kd_Film}}">
                                <td> {{$film->Kd_Film}} </td>
                                <td> {{$film->Jenis}} </td>
                                <td> {{$film->Judul}} </td>
                                <td> {{$film->Jml_Keping}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="card-title">Sewas</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Sewa</th>
                                <th>No. Identitas</th>
                                <th>Kode Film</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Harga Sewa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sewas as $sewa)
                            <tr wire:key="{{'row-sw-'.$sewa->Kd_Sewa}}">
                                <td> {{$sewa->Kd_Sewa}} </td>
                                <td> {{$sewa->No_Identitas}} </td>
                                <td> {{$sewa->Kd_Film}} </td>
                                <td> {{$sewa->Tgl_Pinjam}} </td>
                                <td> {{$sewa->Tgl_Kembali}} </td>
                                <td> {{$sewa->Harga_Sewa}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <hr>
        </div>
        <div class="col-md-12 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h4 class="card-title">Relations 1</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode Sewa</th>
                                <th>Nama Customer</th>
                                <th>Nama Film</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Harga Sewa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <x-tables.loading-state :column-size='6' :target="'setRelationOnes'" />
                            @forelse ($relation_ones as $rl_one)
                            <tr wire:key="{{'row-rls-1-'.$rl_one->Kd_Sewa}}">
                                <td> {{$rl_one->Kd_Sewa}} </td>
                                <td> {{$rl_one->Nama_Customer}} </td>
                                <td> {{$rl_one->Judul_Film}} </td>
                                <td> {{$rl_one->Tgl_Pinjam}} </td>
                                <td> {{$rl_one->Tgl_Kembali}} </td>
                                <td> {{$rl_one->Harga_Sewa}} </td>
                            </tr>
                            @empty
                            <x-tables.empty-data :colum-size='6' :target="'setRelationOnes'" />
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary" wire:click="setRelationOnes">Show Data</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
</script>