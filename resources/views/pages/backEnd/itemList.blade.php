@extends('partials.backEnd.master')
@section('heading', 'List all Items')
@section('content')

<div class="row">
  <div class="m-b-15">
    @foreach($items as $item)
      <div class="col-sm-6 col-lg-3 col-md-4 mobiles">
        <div class="product-list-box thumb">
          <a href="javascript:void(0);" class="image-popup" title="{{ $item->name }}">
            <img src="<?php echo asset("$item->image")?>" class="thumb-img" alt="work-thumbnail">
          </a>

          <div class="product-action">
            <a href="{{ route('item.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
            <form action="{{ route('item.destroy', $item->id)}}" method="POST" style="display: inline;">
              {{method_field('DELETE')}}
              {{csrf_field()}}
              <button type="submit" class="btn btn-danger btn-sm"><i class="md md-close"></i></button>
            </form> 
          </div>

          <div class="price-tag">
            $ {{ $item->price }}
          </div>
          <div class="detail">
            <h4 class="m-t-0"><a href="javascript:void(0);" class="text-dark">{{ $item->name }}</a> </h4>
            <h5 class="m-0"> <span class="text-muted"> Remaining Stock : <strong>{{ $item->stock }}</strong> pcs</span></h5>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div> <!-- End row -->

@endsection

@section('page_scripts')

@endsection