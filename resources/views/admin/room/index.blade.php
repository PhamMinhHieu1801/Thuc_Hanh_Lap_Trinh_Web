@extends('admin.index')
@section('title', 'Hotel Detail')
@section('contents')
<div class="row d-flex justify-content-around">
    <div class="ml-auto my-2">
        <a href="{{ route('admin.rooms.create', $id)}}" class="btn btn-success mx-2 ">New Room</a>
    </div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Hotel's id</th>
            <th scope="col">Rooms Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach($rooms as $room)
        <tbody>
          <tr>
            <th scope="row">{{$room->id}}</th>
            <th>{{$room->hotel_id}}</th>
            <td>{{$room->name}}</td>
            <td>{{$room->price}}</td>
            <td>
                <form action="{{ route('admin.rooms.destroy', $room->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
</div>
</div>
@endsection
