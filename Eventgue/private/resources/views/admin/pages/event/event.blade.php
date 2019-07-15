@extends('admin/template')
{{-- <link rel="icon" href="{{ asset('public/favicon.ico')}}" type="image/x-icon"> --}}

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event
        <small>management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event</li>
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
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul Event</th>
                  <th>Kategori Event</th>
                  <th>Gambar Event</th>
                  <th>Deskripsi</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data['events'] as $event)
                    <tr>
                            <td>{{$event->judul_event}}</td>
                            <td>{{$event->kategori->nama}}</td>
                            <td>{{$event->gambar}}</td>
                            <td>{{$event->deskripsi}}</td>
                            <td>{{$event->status}}</td>
                            <td>
                            <div class="col-md-12">
                                    <div class="col-md-4">
                                            {{ link_to('admin/event' . $event->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{route('event.show', $event->id)}}" type="button" class="btn btn-warning btn-sm">Edit</a>
                                    </div>
                                      <div class="col-md-4" onclick="delete()">
                                          {!! Form::open(['method' => 'DELETE', 'action' => ['EventController@destroy', $event->id], 'id'=>'delete']) !!}
                                          {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                          {!! Form::close() !!}
                                      </div>
                                </div>
                            </td>
                    </tr>
                    @endforeach

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
                <h4 class="modal-title">Tambah Data Event</h4>
            </div>
            <!-- body modal -->
            <form role="form" method="post" action="{{ route('event.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                  <div class="form-group">
                    <label>Judul Event</label>
                    <input name="judul_event" type="text" class="form-control" placeholder="Judul Event">
                  </div>
                  <div class="form-group">
                        <label>Kategori Event</label>
                        <select name="kategori" class="form-control select2" style="width: 100%;">
                            <option value="">--Pilih kategori--</option>

                            @foreach($data['kategories'] as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lokasi Acara</label>
                        <input name="lokasi" type="text" class="form-control" placeholder="lokasi ...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelaksanaan</label>
                        <input name"tanggal" type="date" class="form-control">
                    </div>
                  <div class="form-group">
                    <label>Upload Gambar</label>
                    <input name="gambar" type="file" id="uploadGambar">

                    <p class="help-block">Upload gambar event</p>
                  </div>
                  <!-- textarea -->
                <div class="form-group">
                    <label>Deskripsi Event</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsikan Event"></textarea>
                </div>
                </div>
                    <!-- /.box-body -->
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

            </form>
        </div>
    </div>
</div>
