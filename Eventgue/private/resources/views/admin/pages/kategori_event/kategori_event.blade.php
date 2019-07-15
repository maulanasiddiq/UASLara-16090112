@extends('admin/template')

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori Event
        <small>management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kategori Event</li>
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
                        <th>No.</th>
                        <th>Nama Kategori Event</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tr>
                    @if (count($list_kategori) > 0)
                    <?php $no = 1; ?>
                    @foreach($list_kategori as $kategori)
                    <td>{{ $no }}</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>
                      <div class="col-md-8">
                          <div class="col-md-3">
                            {{ link_to('admin/kategori' . $kategori->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                          </div>
                          <div class="col-md-3">
                            {{ link_to('admin/ketegori' . $kategori->id . '/edit', 'Edit', ['class' => 'btn btn-warning  btn-sm']) }}
                          </div>
                            <div class="col-md-2" onclick="delete()">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KategoriEventController@destroy', $kategori->id], 'id'=>'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                      </div>
                    </td>
                </tr>
                <?php $no++ ?>
              @endforeach
              @else
                <tr>
                  <td>{{ 'Tidak Ada Data' }}</td>
                </tr>
              @endif
                </tfoot>
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

  <!-- Modal -->
	<div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Kategori Event</h4>
                </div>
                <!-- body modal -->
                {!! Form::open(['url' => 'admin/kategori', 'files' => true]) !!}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body">
                      @if ($errors -> any())
                      <div class="form-group {{ $errors -> has('nama') ? 'has-error' : 'has-success' }}">
                        @else
                        <div class="form-group">
                          @endif
                          {!! Form::label('nama', 'Nama Kategori', ['class' => 'control-label']) !!}
                          {!! Form::text('nama', null, ['class' => 'form-control']) !!}

                          @if ($errors -> has('nama'))
                          <script>
                            $(document).ready(function(){
                              $('#add').modal({show: true});
                            })
                          </script>
                            <span class="help-block">{{ $errors -> first('nama') }}</span>
                          @endif
                      </div>

                    </div>

                <!-- /.box-body -->

                <!-- footer modal -->
                <div class="modal-footer">
                  {!! Form::button('Tutup', ['type' => 'button', 'class' => 'btn btn-default', 'data-dismiss' => 'modal'] )  !!}
                  {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
