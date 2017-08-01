@extends('partials.backEnd.master')
@section('heading', 'Category')
@section('content')

<div class="row">
    <div class="col-sm-12 margin-tb">
        <div class="pull-right">
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Category</button>
        </div>
    </div>
</div><br>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr class="info">
                  <th>SL No. </th>
                  <th>Category Name</th>
                  <th>Category Description</th>
                  <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                  <tr>
                      <td>{{$loop->index + 1}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->description}}</td>
                      <td>
                          <button class="btn btn-warning btn-detail open_modal" value="{{$category->id}}">Edit</button>
                          <button class="btn btn-danger btn-delete delete-category" value="{{$category->id}}">Delete</button>
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
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="categoryModalLabel">Category Form</h4>
      </div>
      <div class="modal-body">
        <form id="catForm" name="catForm" class="form-horizontal" novalidate="">
            <div class="form-group">
              <label for="inputName" class="col-sm-3 control-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="name" placeholder="Category  Name" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDetail" class="col-sm-3 control-label">Description</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="description" name="description" placeholder="Category Description" value="">
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">Close</span></button>
        <button type="button" class="btn btn-success" id="btn-save" value="add">Save Changes</button>
        <input type="hidden" id="category_id" name="category_id" value="0">
      </div>
    </div>
  </div>
</div>

@endsection

@section('page_scripts')
    <script src="{{asset('js/ajaxJS/categoryJS.js')}}"></script>
@endsection