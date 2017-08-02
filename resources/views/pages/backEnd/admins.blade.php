@extends('partials.backEnd.master')
@section('heading', 'Manage Admins')
@section('content')

<div class="row">
    <div class="col-sm-12 margin-tb">
        <div class="pull-right">
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Admin</button>
        </div>
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                  <th>SL No. </th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email ID</th>
                  <th>Privilege</th>
                  <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                  <tr>
                      <td>{{$loop->index + 1}}</td>
                      <td>{{$admin->firstName}}</td>
                      <td>{{$admin->lastName}}</td>
                      <td>{{$admin->email}}</td>
                      <td>{{$admin->type}}</td>
                      <td>
                          <button class="btn btn-warning btn-detail open_modal" value="{{$admin->id}}">
                            <i class="md md-edit"></i>
                          </button>
                          <button class="btn btn-danger btn-delete delete-admin" value="{{$admin->id}}">
                            <i class="md md-delete"></i>
                          </button>
                      </td>
                  </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>

<!-- Passing BASE URL to AJAX -->
<input id="url" type="hidden" value="{{ \Request::url() }}">

<!-- MODAL SECTION -->
<div class="modal fade" id="adminsModal" tabindex="-1" role="dialog" aria-labelledby="adminsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="adminsModalLabel">Admins Form</h4>
      </div>
      <div class="modal-body">
        <form id="adForm" name="adForm" class="form-horizontal" novalidate="">
            <div class="form-group">
              <label for="inputfirstName" class="col-sm-3 control-label">First Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputlastName" class="col-sm-3 control-label">Last Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-3 control-label">Email ID</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPwd" class="col-sm-3 control-label">Password</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputType" class="col-sm-3 control-label">Assign Privilege</label>
              <div class="col-sm-9">
                <div class="radio radio-info radio-inline">
                    <input type="radio" id="inlineRadio1" value="basic_admin" name="type" checked>
                    <label for="inlineRadio1"> Basic Admin </label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" id="inlineRadio2" value="super_admin" name="type">
                    <label for="inlineRadio2"> Super Admin </label>
                </div>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
        <button type="button" class="btn btn-success" id="btn-save" value="add">Save Changes</button>
        <input type="hidden" id="admin_id" name="admin_id" value="0">
      </div>
    </div>
  </div>
</div>

@endsection

@section('page_scripts')
    <script src="{{asset('js/ajaxJS/adminsJS.js')}}"></script>
@endsection