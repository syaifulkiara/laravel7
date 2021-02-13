@extends('layouts.master')

@section('content')
<!-- Page-Title -->
<div class="row">
  <div class="col-sm-12">
    <div class="page-title-box">
      <div class="btn-group pull-right">
        <ol class="breadcrumb hide-phone p-0 m-0">
          <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Overtime</a></li>
        </ol>
      </div>
      <h4 class="page-title">Overtime</h4>
    </div>
  </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
  <div class="col-lg-12 col-sm-6">
    <div class="card m-b-30">
      <div class="card-body table-responsive">
        <h4 class="mt-0 header-title">Name :</h4>
         <a href="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">{{ Auth::user()->name }}</a>
        <div class="pull-right">
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="ion-plus-circled"></i> Tambah Data</button>
          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</button>
        </div>
      </div>
      <div class="">
      <table id="datatable2" class="table table-bordered">
        <thead>
          <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">Day/Date</th>
            <th colspan="2"><center>Time</center></th>
            <th rowspan="2"><center>OT</center></th>
            <th rowspan="2"><center>Project NO</center></th>
            <th colspan="5"></th>
          </tr>
          <tr>
            <th>Start</th>
            <th>Finish</th>
            <th>Activity</th>
            <th>Location</th>
            <th>Check</th> 
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($act->activity as $row)
          @if(\Carbon\Carbon::parse($row->day_date)->format('l') == 'Saturday')
          <tr class="bg-warning">
            <td>{{$loop->iteration}}</td>
            <td>
              {{strftime("%A, %d %B %Y",strtotime($row->day_date))}}
            </td>
            @elseif(\Carbon\Carbon::parse($row->day_date)->format('l') == 'Sunday')
            <tr class="bg-danger">
              <td>{{$loop->iteration}}</td>
              <td>
                {{strftime("%A, %d %B %Y",strtotime($row->day_date))}}
              </td>
              @else 
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                  {{strftime("%A, %d %B %Y",strtotime($row->day_date))}}
                </td>
                @endif
                <td>{{$row->start}}</td>
                <td>{{$row->finish}}</td>
                <td>{{$row->ot}}</td>
                <td>{{$row->project_no}}</td>
                <td>{{$row->activity}}</td>
                <td>{{$row->location}}</td>
                <td>{{$row->cek}}</td>
                <td>{{date('d-m-Y', strtotime($row->created_at))}}</td>
                <td style="text-align: center;">
                  <div class="btn-group">
                    <a href="{{ route('overtime.edit', $row->id)}}" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Data"><i class="fa fa-edit"></i></a> &nbsp;  
                    <form action="{{ route('overtime.destroy', $row->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-sm" type="submit" onclick="return confirm('Yakin Mau Dhapus')" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data" ><i class="fa fa-trash"></i></button>
                </form>
                  </div>  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- end col -->
  </div> <!-- end row -->


  <!--  Modal content for the above example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title mt-0" id="myLargeModalLabel">Form Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form action="{{ route('overtime.store') }}" method="post" accept-charset="utf-8">
            @csrf
            <div class="row">
              <div class="col-6">
                <label>Tanggal:</label>
                <input type="text" name="day_date" class="form-control" placeholder="mm/dd/yyyy" id="mdate" required="">

              </div>
              <div class="col-3">
                <label>Masuk:</label>
                <div class="input-group">
                  <input class="form-control" name="start">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <label>Pulang:</label>
                <div class="input-group">
                  <input class="form-control" name="finish">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
            </div>          

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label></label>
                  <textarea class="form-control" name="activity" rows="3" placeholder="Activity"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label></label>
                  <textarea class="form-control" name="location" rows="3" placeholder="Location"></textarea>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-default" style="background-color: #009688; color: #fff; border-color: #328d39;"><i class="fa fa-paper-plane"></i>  Simpan</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
@endsection
