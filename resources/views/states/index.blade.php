@extends('layouts.master')

@section('content')
    <h1>States</h1>
    @if(count($states) > 1)
        @foreach($states as $state)
            <div class="well">
                <ul>
                    <li>
                        <h3><a href="/states/{{$state->id}}">{{$state->name}}</a></h3>
                        <small>This State is Located in <span style="color:green; font-weight:bold">{{$country->name}}</span></small>
                    </li>
                </ul>
	        </div>
        @endforeach
    @endif
@endsection