@extends('layout')

@section('content')
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif


<section>
    <div class="viewData container mt-5">
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">email</th>
              <th scope="col">phone</th>
              <th scope="col">Message</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->first}}</td>
                <td>{{$customer->last}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->message}}</td>

                <td class="d-flex">
                    <li><a href="{{url('customerEdit/'.$customer->id)}}" class="btn btn-primary"> Edit</a></li>
                    <li><a href="" class="btn btn-info"> view</a></li>
                    <li>
                        <form action="{{route('customerDelete')}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="text" name="id" value="{{$customer->id}}" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </li>
                </td>
              </tr>

            @endforeach


          </tbody>
        </table>
    </div>
</section>

@endsection
