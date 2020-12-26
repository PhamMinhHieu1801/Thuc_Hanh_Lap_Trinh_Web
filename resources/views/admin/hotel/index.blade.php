@extends('admin.index')
@section('title', 'Admin-Hotel')
@section('contents')
<div class="row d-flex justify-content-around">
    <div class="ml-auto my-2">
        <a href="{{ route('admin.hotels.create')}}" class="btn btn-success mx-2 ">New Hotel</a>
    </div>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Hotel</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach($hotels as $hotel)
        <tbody>
          <tr>
            <th scope="row">{{$hotel->id}}</th>
            <td>{{$hotel->name}}</td>
            <td>{{$hotel->description}}</td>
            <td>
                {{-- {{dd($hotel->id)}} --}}
                <a href=" {{route('admin.list_room', $hotel->id )}}" class="btn btn-info">Detail</a>

            </td>
            <td>

                <a href="{{ route('admin.hotels.edit', [$hotel->id])}}" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ route('admin.hotels.destroy', $hotel->id)}}" method="post">
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
<div class="d-flex justify-content-center">
    {{ $hotels->links() }}
</div>
@endsection
