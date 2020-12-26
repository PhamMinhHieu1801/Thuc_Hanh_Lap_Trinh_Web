@extends('admin.index')
@section('title', 'Admin-User')
@section('contents')
<div class="row d-flex justify-content-around">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach($users as $user)
        <tbody>
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->role}}</td>
            <td>
                <form action="{{ route('admin.users.destroy', $user->id)}}" method="post">
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
    {{ $users->links() }}
</div>
@endsection
