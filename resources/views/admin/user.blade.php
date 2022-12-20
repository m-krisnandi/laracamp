@extends('components.sidebar')
@extends('layouts.app')

@section('sidebar')
<h4>Data Users</h4>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Role</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($users as $user)
    <tr>
      <td>
        <div class="d-flex align-items-center">

        @if ($user->avatar)
            <img src="{{ $user->avatar }}" class="user-photo rounded-circle" alt="" style="max-width: 65px">
        @else
            <img src="https://ui-avatars.com/api/?name=admin" class="user-photo rounded-circle" alt="">
        @endif
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$user->name}}</p>
            <p class="text-muted mb-0">{{$user->email}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$user->role}}</p>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="3">No Users</td>
    </tr>
    @endforelse
  </tbody>
</table>


@endsection
