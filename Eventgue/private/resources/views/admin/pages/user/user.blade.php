@extends('admin/template')

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nomor Handphone</th>
                  <th>Alamat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Maulana</td>
                  <td>siddiqmaulanaabdul@gmail.com</td>
                  <td>082324653228</td>
                  <td>Krandon Tegal</td>
                  <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop

@section('footer')
  @include('admin/footer')
@stop

  {{-- MODAL --}}
  <div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data User</h4>
            </div>
            <!-- body modal -->
            <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="judulEvent" placeholder="Judul Event">
                  </div>                                   
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Foto</label>
                    <input type="file" id="uploadFoto">
    
                    <p class="help-block">Upload Foto Profil</p>
                  </div>        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Handphone</label>
                    <input type="text" class="form-control" id="noHp" placeholder="Nomor Handphone">
                  </div>                    
                  <!-- textarea -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>                    
                </div>
                </div>
                    <!-- /.box-body -->
              </form>
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>