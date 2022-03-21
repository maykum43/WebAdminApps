@extends('layouts.admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Users</h3>

                <!-- <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No.Telepon</th>
                      <th style="width: 70px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                        @php
                            $i = 1;
                        @endphp
                      @foreach($listUser as $data)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $data->name }}</td>
                          <td>{{ $data->email }}</td>
                          <td>{{ $data->no_tlp }}</td>
                          <td>
                          <div class="btn-group">
                                        <a href="" 
                                            class="btn btn-success btn-sm">Detail</a>
                                        <a href="" 
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="" 
                                            class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                          </td>
                      </tr>
                      @endforeach
                    <!-- <tr>
                      <td>1.</td>
                      <td>Update software</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
