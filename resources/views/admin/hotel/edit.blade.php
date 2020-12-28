@extends('admin.index')
@section('title', 'Edit Hotel')
@section('contents')
<b><h1 class="text-center">Edit Hotel</h1></b>
<div class="container">
    <form action="{{ route('admin.hotels.update', $hotels->id) }}" method="POST" enctype="multipart/form-data">
        {{-- @method('POST') --}}
        @csrf
        <div class="form-group">
            <label>Hotel's Name</label><br>
            <input class="form-control" name="name" value="{{ $hotels->name }}" placeholder="Insert your hotel's local"/>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Hotel's Local</label><br>
            <input class="form-control" name="local" value="{{ $hotels->local }}" placeholder="Insert your hotel's local"/>
            @if ($errors->has('local'))
                <div class="alert alert-danger">
                    {{ $errors->first('local') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Hotel's Description</label><br>
            <input class="form-control" name="description" value="{{ $hotels->description }}" placeholder="Insert your hotel's description"/>
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
            <label>Hotel's Breakfast</label><br>
            <input type="radio"  name="breakfast" value="1">
            <label for="male">Free</label><br>
            <input type="radio" name="breakfast" value="0">
            <label for="female">Not Free</label><br>
            @if ($errors->has('breakfast'))
                <div class="alert alert-danger">
                    {{ $errors->first('breakfast') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Hotel's Wifi</label><br>
            <input type="radio"  name="wifi" value="1">
            <label for="male">Free</label><br>
            <input type="radio" name="wifi" value="0">
            <label for="female">Not Free</label><br>
            @if ($errors->has('wifi'))
                <div class="alert alert-danger">
                    {{ $errors->first('wifi') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Hotel's Carpark</label><br>
            <input type="radio"  name="car_park" value="1">
            <label for="male">Free</label><br>
            <input type="radio" name="car_park" value="0">
            <label for="female">Not Free</label><br>
            @if ($errors->has('car_park'))
                <div class="alert alert-danger">
                    {{ $errors->first('car_park') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="avatar">Image</label> <input id="image" name="image" placeholder="image" type="file">
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
        <a href="{{ route('admin.hotels.index') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
