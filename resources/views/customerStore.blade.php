@extends('layout')
 @section('content')
    <section>
        <div class="container">

            <form action="{{route('customerStore')}}" method="POST" >
                @csrf
                <input type="text" name="first" class="form-control" id="floatingInput" placeholder="your name">
                <label for="floatingInput">first name</label>
                <input type="text" name="last" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">last name</label>
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                <input type="number" name="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone</label>
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>




        </div>

    </section>


 @endsection

