@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('LOKASI') }}</h1>
    @if(session('sukses'))
            <div class="alert alert-success" role="alert">
            {{session('sukses')}}
            </div>
        @endif
    <div class="row ">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">
                        <?php print_r($data->judul);?>
                    </h5>
                    {{-- <a href="{{URL::to('lokasi'.$data_lokasi1->id_lokasi.'/edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i></a> --}}
                    {{-- <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal"><i class="fas fa-edit"></i></button> --}}
                </div>
                <div class="panel">
                   <table id="datatable" class="table table-hover">
                        <tr>
                            <th>Nilai</th>
                            <th>Keterangan </th>
                            <th>Action
                            <a href="{{URL::to('lokasi/sub_lokasi1/create')}}" class="btn btn-primary float-right">Add</a>
                            </th>
                        </tr>
                        @foreach($data_lokasi as $lokasi )
                        <tr>
                          <th>{{$lokasi->nilai}}</th>
                          <th>{{$lokasi->keterangan}}</th>
                          <th>
                            <!--<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal">Edit </button>-->
                            <a href="{{URL::to('lokasi/sub_lokasi1/'.$lokasi->sub_id1.'/edit')}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('apakah yakin ingin di hapus ?')" href="/lokasi/sub_lokasi1/{{$lokasi->sub_id1}}/delete"  class="btn btn-danger " >Delete</a>
                          </th>
                        </tr>
                        @endforeach
                   </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">
                        <?php print_r($data1->judul);?>
                    </h5>
                    {{-- <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal"><i class="fas fa-edit"></i></button> --}}
                </div>
                <div class="panel">
                   <table id="datatable" class="table table-hover">
                        <tr>
                            <th>Nilai</th>
                            <th>Keterangan </th>
                            <th>Action
                            <!--<button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal">Add</button>-->
                            <a href="{{URL::to('lokasi/sub_lokasi2/create')}}" class="btn btn-primary float-right">Add</a>
                            </th>
                        </tr>
                        @foreach($data_lokasi1 as $lokasi1 )
                        <tr>
                          <th>{{$lokasi1->nilai_1}}</th>
                          <th>{{$lokasi1->keterangan_1}}</th>
                          <th>
                            <!--<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal">Edit </button>-->
                            <a href="{{URL::to('lokasi/sub_lokasi2/'.$lokasi1->sub_id2.'/edit')}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('apakah yakin ingin di hapus ?')" href="/lokasi/sub_lokasi2/{{$lokasi1->sub_id2}}/delete"  class="btn btn-danger " >Delete</a>
                          </th>
                        </tr>
                        @endforeach
                   </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h5 class="m-0 font-weight-bold text-primary">
                        <?php print_r($data2->judul);?>
                    </h5>
                    {{-- <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal"><i class="fas fa-edit"></i></button> --}}
                </div>
                <div class="panel">
                   <table id="datatable" class="table table-hover">
                        <tr>
                            <th>Nilai</th>
                            <th>Keterangan </th>
                            <th>Action
                            <!--<button type="button" class="btn btn-primary float-right " data-toggle="modal" data-target="#exampleModal">Add</button>-->
                            <a href="{{URL::to('lokasi/sub_lokasi3/create')}}" class="btn btn-primary float-right">Add</a>
                            </th>
                        </tr>
                        @foreach($data_lokasi2 as $lokasi2 )
                        <tr>
                          <th>{{$lokasi2->nilai_2}}</th>
                          <th>{{$lokasi2->keterangan_2}}</th>
                          <th>
                            <!--<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editmodal">Edit </button>-->
                            <a href="{{URL::to('lokasi/sub_lokasi3/'.$lokasi2->sub_id3.'/edit')}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('apakah yakin ingin di hapus ?')" href="/lokasi/sub_lokasi3/{{$lokasi2->sub_id3}}/delete"  class="btn btn-danger " >Delete</a>
                          </th>
                        </tr>
                        @endforeach
                   </table>
                </div>
            </div>
        </div>
{{--
  <!-- Modal edit -->
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Edit Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/lokasi"method="POST">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <div class="form-group">
              <label for="exampleInputEmail1">Judul</label>
              <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter judul" value="{{$data->judul}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  @endsection
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
$('#editModal').on('show.bs.modal',function(event){
    var button = $(event.relatedTarget)
    var judul = button.data('judul')
    var modal = $(this)
    modal.find('.modal-title').text('Edit successfully');
    modal.find('.modal-body #judul ').val(judul);
})
</script>


@endsection
