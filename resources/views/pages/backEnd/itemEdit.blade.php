@extends('partials.backEnd.master')
@section('heading', 'Edit Item')
@section('content')

<div class="row">
  <div class="col-sm-12">
    <form action="{{ route('item.update', $item->id)}}" method="POST" enctype="multipart/form-data" accept="image/*">
    {{csrf_field()}}
      <div class="row">
        <div class="col-lg-6">
          <div class="card-box">
            <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
            <div class="form-group m-b-20">
              <label>Product Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" value="{{$item->name}}" placeholder="Enter Product Name">
            </div>
            <div class="form-group m-b-20">
              <label>Product Description <span class="text-danger">*</span></label>
              <textarea class="form-control" name="description" rows="5" placeholder="Enter Description">{{$item->description}}</textarea>
            </div>

            <div class="form-group m-b-20">
              <label>Select one category <span class="text-danger">*</span></label>
              <select class="selectpicker" name="category_id" data-style="btn-white" tabindex="-98">
                <option value="">--- Choose one from below --- </option>
                @foreach($categories as $category)
                  @php
                    ($item->category_id == $category->id) ? $select = 'selected' : $select = '';
                  @endphp

                    <option value="{{$category->id}}" {{$select}}>{{$category->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group m-b-20">
              <label>Price <span class="text-danger">*</span></label>
              <input type="number" name="price" value="{{$item->price}}" class="form-control" value="">
            </div>
            <div class="form-group m-b-20">
              <label>Total Stocks <span class="text-danger">*</span></label>
              <input type="number" name="stock" value="{{$item->stock}}" class="form-control" value="">
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Item Image</b></h5>
            <div class="table-box m-b-30">
              <p style="text-align:center;">
                <img src="<?php echo asset("$item->image")?>" alt="Image" id="default-item" style="width: 250px; height: 250px;" />
              </p>
              </div>

              <!-- Remove Image Button -->
              <!-- <div class="table-detail table-actions-bar">
                <p style="text-align:center;">
                  <a href="javascript:void(0);" class="btn btn-danger"> <i class="md md-delete"></i></a>
                </p>
              </div> -->
            </div>
            <div class="text-center m-t-30">
              <label class="btn btn-purple btn-md w-md waves-effect waves-light">
                  <input type="file" name="item_image" id="item_image" style="display:none"; onchange="document.getElementById('default-item').src = window.URL.createObjectURL(this.files[0])">
                  <span><i class="ion-upload m-r-5"></i>Upload</span>
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <hr />
          <div class="text-center p-20">
            <button type="submit" class="btn w-sm btn-default waves-effect waves-light">Add New Item</button>
            <button type="reset" class="btn w-sm btn-danger waves-effect waves-light">Reset Form</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection

@section('page_scripts')
    
@endsection