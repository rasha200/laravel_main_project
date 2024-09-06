@extends('layouts.dashboard_master')

@section('headTitle', 'Bookings')

@section('content')
    <div class="card">
        <div class="card-body">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::get('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="inprogress" {{ $booking->status == 'inprogress' ? 'selected' : '' }}>inprogress
                        </option>
                        <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>completed</option>
                        <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>cancelled</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            <h1>{{ $booking->user->name }} Booking</h1>
            <p>
                <strong>Trip ID:</strong> {{ $booking->trip_id }}<br>
                <strong>Status:</strong> {{ $booking->status }}<br>
                <strong>Total Price:</strong> {{ $booking->trip->price }}
            </p>
        </div>
    </div>
@endsection
