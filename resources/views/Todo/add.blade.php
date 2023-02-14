@extends('master')

@section('content')

    <div class="container center">
       <form method="post" action="{{ url('/store_new_post') }}">
           @csrf
           @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <p>What is your Post??</p>
           <input type="text" value="" name="post" id="post">
          <button type="submit" class="btn">Post</button>
       </form>
        <a href="{{url('/todo')}}" class="btn">Back</a>
    </div>
@endsection
