@extends('components.sidebar')
@extends('layouts.app')



@section('sidebar')
<h4>Data Transactions</h4>
<div class="container">
  <div class="row">
      <div class="col-8 offset-2">
          <div class="card bg-light">
              <div class="card-header">
                  My Camps
              </div>
              <div class="card-body">
                  @include('components.alert')
                  <table class="table">
                      <thead>
                          <th>User</th>
                          <th>Camp</th>
                          <th>Price</th>
                          <th>Register Data</th>
                          <th>Paid Status</th>
                      </thead>
                      <tbody>
                          @forelse ($checkouts as $checkout)
                              <tr>
                                  <td>{{ $checkout->User->name }}</td>
                                  <td>{{ $checkout->Camp->title }}</td>
                                  <td>{{ $checkout->Camp->price }}k</td>
                                  <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                  <td>
                                    <strong>{{$checkout->payment_status}}</strong>
                                  </td>
                              </tr>
                          @empty
                              <tr>
                                  <td colspan="3">No camps registered</td>
                              </tr>
                          @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>


@endsection
