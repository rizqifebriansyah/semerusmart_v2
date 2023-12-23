@extends('templates.main')
@section('container')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Pelayanan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Daftar Pelayanan</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <button class="btn btn-success" data-toggle="modal" data-target="#modalpasienbaru"><i
                    class="bi bi-person-plus-fill mr-1 ml-1"></i> Pasien Baru</button>
            <div class="row mt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light"><i class="bi bi-search ml-1 mr-1"></i> Pencarian Pasien</div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label for="inputEmail4">Nomor RM</label>
                                    <input type="text" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword4">Nomor KTP</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword4">Nomor BPJS</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputPassword4">Nama Pasien</label>
                                    <input type="text" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-2">
                                    <button class="btn btn-success" style="margin-top:31px"><i
                                            class="bi bi-search ml-1 mr-1"></i>Cari Pasien</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-info"><i class="bi bi-database-fill mr-1 ml-1"></i>Data Pasien</div>
                        <div class="card-header">
                            <table id="tabelpasien" class="table table-sm table-bordered table-hover">
                                <thead>
                                    <th>Nomor RM</th>
                                    <th>Nomor KTP</th>
                                    <th>Nomor BPJS</th>
                                    <th>Nama Pasien</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>23900111</td>
                                        <td>3209330506931111</td>
                                        <td>11101212000</td>
                                        <td>Pasien 1</td>
                                        <td>Dusun 3 RT 01 RW 02 Desa Babakan Kec Babakan Kab Cirebon</td>
                                        <td><button class="btn btn-success btn-sm">Daftar</button></td>
                                    </tr>
                                    <tr>
                                        <td>23900111</td>
                                        <td>3209330506931111</td>
                                        <td>11101212000</td>
                                        <td>Pasien 1</td>
                                        <td>Dusun 3 RT 01 RW 02 Desa Babakan Kec Babakan Kab Cirebon</td>
                                        <td><button class="btn btn-success btn-sm">Daftar</button></td>
                                    </tr>
                                    <tr>
                                        <td>23900111</td>
                                        <td>3209330506931111</td>
                                        <td>11101212000</td>
                                        <td>Pasien 1</td>
                                        <td>Dusun 3 RT 01 RW 02 Desa Babakan Kec Babakan Kab Cirebon</td>
                                        <td><button class="btn btn-success btn-sm">Daftar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalpasienbaru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus-fill mr-1 ml-1"></i>
                            Pasien Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                $('#tabelpasien').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    </section>
    <!-- /.content -->
@endsection
