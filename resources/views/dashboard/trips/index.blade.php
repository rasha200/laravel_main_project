{{--@extends("layouts.dashboard_master")--}}
{{--@section("headTitle", "One")--}}
{{--@section("content")--}}
{{--    <form action="{{ route('search_trips') }}" method="post" class="container mt-4">--}}
{{--        @csrf--}}
{{--        <div class="form-group">--}}
{{--            <label for="q" class="form-label">Search by trip name</label>--}}

{{--            <div class="input-group" style="margin-top: 10px">--}}

{{--                <input type="text" id="q" name="q" class="form-control" placeholder="Insert trip name" style="border: rgb(204, 204, 204) solid 1px">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button type="submit" class="btn btn-primary">Search</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    @if(session('static'))--}}
{{--        <div class="alert alert-info">--}}
{{--            {{ session('static') }}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div class="container">--}}
{{--        <div class="d-flex justify-content-between align-items-center mb-4">--}}
{{--            <h2 class="title-1">Trips</h2>--}}
{{--            <a href="{{ route('trips.create') }}">--}}
{{--                <button type="button" class="btn btn-primary">--}}
{{--                    <i class="zmdi zmdi-plus"></i> Add New trip--}}
{{--                </button>--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="card">--}}
{{--            <div class="card-body">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="table-responsive table--no-card m-b-40">--}}
{{--                            <table class="table table-bordered bg-white">--}}
{{--                                <thead class="thead-light">--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">ID</th>--}}
{{--                                    <th scope="col">Name</th>--}}
{{--                                    <th scope="col">Description</th>--}}
{{--                                    <th scope="col">Location</th>--}}
{{--                                    <th scope="col">Capacity</th>--}}
{{--                                    <th scope="col">Price</th>--}}
{{--                                    <th scope="col">Start_at</th>--}}
{{--                                    <th scope="col">End_at</th>--}}
{{--                                    <th scope="col">Category name</th>--}}

{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                @foreach($trips as $trip)--}}
{{--                                    <tr>--}}
{{--                                        <th scope="row">{{ $trip->id }}</th>--}}
{{--                                        <td>{{ $trip->name }}</td>--}}
{{--                                        <td>{{ $trip->description }}</td>--}}
{{--                                        <td>{{ $trip->location }}</td>--}}
{{--                                        <td>{{ $trip->capacity }}</td>--}}
{{--                                        <td>{{ $trip->price }}</td>--}}
{{--                                        <td>{{ $trip->start_at }}</td>--}}
{{--                                        <td>{{ $trip->end_at }}</td>--}}
{{--                                        <td>{{ $trip->category? $trip->category->name : 'not found'}}</td>--}}



{{--                                        <td>--}}
{{--                                            <a href="{{ route('trips.edit', $trip->id) }}">--}}
{{--                                                <button type="submit" class="btn btn-outline-info" ><i class="mdi mdi-table-edit"></i></button>--}}
{{--                                            </a>--}}
{{--                                            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" style="display:inline;">--}}
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
{{--                                                <button type="submit" class="btn btn-outline-danger"><i class="mdi mdi-delete"></i></button>--}}
{{--                                            </form>--}}
{{--                                            <a href="{{ route('tripimages.create' , $trip->id) }}">--}}
{{--                                                <button type="submit" class="btn btn-outline-success"><i class="mdi mdi-tooltip-image"></i></button>--}}
{{--                                            </a>--}}
{{--                                            <a  href="{{ route('tripguide.create' , $trip->id) }}">--}}
{{--                                                <button type="submit" class="btn btn-outline-primary"><i class="mdi mdi-account"></i></button>--}}
{{--                                            </a>--}}
{{--                                            <a  href="{{ route('trips.show' , $trip->id) }}">--}}
{{--                                                <button type="submit" class="btn btn-outline-info"><i class="mdi mdi-information-outline"></i></button>--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



{{--@endsection--}}
@extends('layouts.dashboard_master')
@section('headTitle', 'One')
@section('content')

    <div class="container card p-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="title-1">Trips</h2>
            <a href="{{ route('trips.create') }}">
                <button type="button" class="btn btn-primary">
                    <i class="zmdi zmdi-plus"></i> Add New trip
                </button>
            </a>
        </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-bordered bg-white">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Capacity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Start_at</th>
                                    <th scope="col">End_at</th>
                                    <th scope="col">Category name</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($trips as $trip)
                                    <tr>
                                        <th scope="row">{{ $trip->id }}</th>
                                        <td>{{ $trip->name }}</td>
                                        <td>{{ $trip->description }}</td>
                                        <td>{{ $trip->location }}</td>
                                        <td>{{ $trip->capacity }}</td>
                                        <td>{{ $trip->price }}</td>
                                        <td>{{ $trip->start_at }}</td>
                                        <td>{{ $trip->end_at }}</td>
                                        <td>{{ $trip->category ? $trip->category->name : 'not found' }}</td>



                                        <td>
                                            <a href="{{ route('trips.edit', $trip->id) }}"  title="edit">
                                                <button type="submit" class="btn btn-outline-info"><i
                                                        class="mdi mdi-table-edit"></i></button>
                                            </a>

                                            <a href="{{ route('tripimages.create', $trip->id) }}" title="add image">
                                                <button type="submit" class="btn btn-outline-success"><i
                                                        class="mdi mdi-tooltip-image" ></i></button>
                                            </a>
                                            <a href="{{ route('tripguide.create', $trip->id) }}" title="Add guide">
                                                <button type="submit" class="btn btn-outline-primary"><i
                                                        class="mdi mdi-account" ></i></button>
                                            </a>
                                            <a href="{{ route('trips.showadmin', $trip->id) }}" title="view">
                                                <button type="submit" class="btn btn-outline-info"><i
                                                        class="mdi mdi-information-outline" ></i></button>
                                            </a>

                                            <form action="{{ route('trips.destroy', $trip->id) }}" method="POST"
                                                  style="display:inline;" title="delete">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="mdi mdi-delete" ></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




@endsection
