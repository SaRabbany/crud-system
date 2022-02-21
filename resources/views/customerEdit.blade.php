@extends('layout')
 @section('content')
    <section>
        <div class="container">
            <h2 class="">Edit the customer data</h2>
            <form action="{{url('customerUpdate/'.$customer->id)}}" method="POST" >
                @csrf
                @method('PUT')
                <input type="text" value="{{$customer->first}}" name="first" class="form-control" id="floatingInput" placeholder="your name">
                <label for="floatingInput">first name</label>
                <input type="text" name="last" value="{{$customer->last}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">last name</label>
                <input type="email" name="email" value="{{$customer->email}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                <input type="number" name="phone" value="{{$customer->phone}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone</label>
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="message" value="" id="exampleFormControlTextarea1" rows="3">{{$customer->message}}</textarea>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>




        </div>

    </section>


 @endsection

