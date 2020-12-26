@extends('admin.index')
@section('title', 'Add Rooms')
@section('contents')
<b><h1 class="text-center">New Rooms</h1></b>
<div class="container">
    <form action="{{ route('admin.rooms.store', $hotels->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Room's Name</label><br>
            <input class="form-control" name="name" value="{{ old('name') }}" placeholder="Insert your room's name"/>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Description</label><br>
            <input class="form-control" name="description" value="{{ old('description') }}" placeholder="Insert your hotel's description"/>
            @if ($errors->has('description'))
                <div class="alert alert-danger">
                    {{ $errors->first('description') }}
                </div>
            @endif
        </div>

        {{-- <div class="form-group">
            <label>Image</label><br>
            <input type="file" name="image" value="{{ old('image') }}">
            @if ($errors->has('image'))
                <div class="alert alert-danger">
                    {{ $errors->first('image') }}
                </div>
            @endif
        </div> --}}

        <div class="form-group">
            <label>Room's Price</label><br>
            <input class="form-control" name="price" value="{{ old('price') }}" placeholder="Insert your room's price"/>
            @if ($errors->has('price'))
                <div class="alert alert-danger">
                    {{ $errors->first('price') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Hotel</label><br>
            <input class="form-control" name="hotel_id" value="{{$hotels->id}}"/>
            @if ($errors->has('hotel_id'))
                <div class="alert alert-danger">
                    {{ $errors->first('hotel_id') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Types</label><br>
            <input class="form-control" name="type" value="{{ old('type') }}" placeholder="Insert your room's type"/>
            @if ($errors->has('type'))
                <div class="alert alert-danger">
                    {{ $errors->first('type') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Bed</label><br>
            <input class="form-control" name="bed" value="{{ old('bed') }}" placeholder="Insert your room's bed number"/>
            @if ($errors->has('bed'))
                <div class="alert alert-danger">
                    {{ $errors->first('bed') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Bath</label><br>
            <input class="form-control" name="bath" value="{{ old('bath') }}" placeholder="Insert your room's bath number"/>
            @if ($errors->has('bath'))
                <div class="alert alert-danger">
                    {{ $errors->first('bath') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's TV</label><br>
            <input class="form-control" name="TV" value="{{ old('TV') }}" placeholder="Insert your room's TV number"/>
            @if ($errors->has('TV'))
                <div class="alert alert-danger">
                    {{ $errors->first('TV') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Telephone Number</label><br>
            <input class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Insert your room's phone number"/>
            @if ($errors->has('phone'))
                <div class="alert alert-danger">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Room's Wardobe</label><br>
            <input class="form-control" name="wardobe" value="{{ old('wardobe') }}" placeholder="Insert your room's wardobe number"/>
            @if ($errors->has('wardobe'))
                <div class="alert alert-danger">
                    {{ $errors->first('wardobe') }}
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Add</button>
        <a href="{{ route('admin.rooms.index') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
