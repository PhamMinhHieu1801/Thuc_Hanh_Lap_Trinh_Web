@extends('admin.index')
@section('title', 'Edit Room')
@section('contents')
<b><h1 class="text-center">Edit Room</h1></b>
<div class="container">
    {{-- {{dd($rooms)}} --}}
    <form action="{{ route('admin.rooms.update', [$rooms->hotel_id, $rooms->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
       {{-- {{{ dd($rooms->hotel_id)}}} --}}
        <div class="form-group">
            <label>Room's Name</label><br>
            <input class="form-control" name="name" value="{{ $rooms->name }}" />
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Description</label><br>
            <input class="form-control" name="description" value="{{ $rooms->description }}" />
            @if ($errors->has('description'))
                <div class="alert alert-danger">
                    {{ $errors->first('description') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Price</label><br>
            <input class="form-control" name="price" value="{{ $rooms->price }}" />
            @if ($errors->has('price'))
                <div class="alert alert-danger">
                    {{ $errors->first('price') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's HotelId</label><br>
            <input class="form-control" name="hotel_id" value="{{ $rooms->hotel_id }}" />
        </div>

        <div class="form-group">
            <label>Room's Types</label><br>
            <input class="form-control" name="type" value="{{ $rooms->type }}" placeholder="Insert your room's type"/>
            @if ($errors->has('type'))
                <div class="alert alert-danger">
                    {{ $errors->first('type') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Bed</label><br>
            <input class="form-control" name="bed" value="{{ $rooms->bed }}" placeholder="Insert your room's bed number"/>
            @if ($errors->has('bed'))
                <div class="alert alert-danger">
                    {{ $errors->first('bed') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Bath</label><br>
            <input class="form-control" name="bath" value="{{ $rooms->bath }}" placeholder="Insert your room's bath number"/>
            @if ($errors->has('bath'))
                <div class="alert alert-danger">
                    {{ $errors->first('bath') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's TV</label><br>
            <input class="form-control" name="TV" value="{{ $rooms->TV }}" placeholder="Insert your room's TV number"/>
            @if ($errors->has('TV'))
                <div class="alert alert-danger">
                    {{ $errors->first('TV') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Telephone Number</label><br>
            <input class="form-control" name="phone" value="{{ $rooms->phone }}" placeholder="Insert your room's phone number"/>
            @if ($errors->has('phone'))
                <div class="alert alert-danger">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Wardobe</label><br>
            <input class="form-control" name="wardobe" value="{{ $rooms->wardobe }}" placeholder="Insert your room's wardobe number"/>
            @if ($errors->has('wardobe'))
                <div class="alert alert-danger">
                    {{ $errors->first('wardobe') }}
                </div>
            @endif
        </div>

        </div>

        <button type="submit" class="btn btn-success">Edit</button>
        <a href="{{ route('admin.list_room', $rooms->hotel_id) }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
