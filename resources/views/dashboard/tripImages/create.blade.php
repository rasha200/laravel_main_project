@extends('layouts.dashboard_master')
@section("add image to trip", "Crate Guides")

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add image</h4>
            <form action="{{ route('tripimages.store' , $tripid) }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <input type="hidden" value="{{$tripid}}" name="tripid">
                <div class="form-group">
                    
                    <input type="file" class="form-control" id="image" name="image[]" multiple/>
                </div>
             
                <button type="submit" class="btn btn-outline-success">Add images</button>

                <a href="{{route('trips.index')}}" class="btn btn-light">Cancel</a>
            </form>
           
        </div>
    </div>
@endsection
