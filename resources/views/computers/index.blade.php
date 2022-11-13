@extends('layout')
 @section('title', 'Computers')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center ">
                   <h1> Computers </h1>
                </div>
                <div>
                @if(count ($computers)> 0)
                <ul>
                 @foreach ($computers as $computers)
                 <a href="{{route ('computers.show' , ['computer' => $computers['id']])}}">
                 <li>
                
                 <p>{{$computers['name']}} ({{ $computers['origin']}}) - <strong>{{ $computers['price']}}$</strong></p>
            
                 </li>
                 </a>
                 @endforeach
                 </ul>
                 @else
                 <p>There are no Computers to display</p>
                 @endif
                </div>
            </div>
@endsection
