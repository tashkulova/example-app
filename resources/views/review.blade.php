@extends('layouts.app')

@section('title') Details @endsection

@section('content')
<h1>Review</h1>

<div class="table-responsive mt-5">
<table class="table table-striped table-hover table-condensed">
    <thead>
        <tr>
            <th><strong>Ortskuerzel</strong></th>
            <th><strong>Stadt / Landkreis</strong></th>
            <th><strong>Bundesland</strong></th>
        </tr>
    </thead>
    <tbody>
         @foreach($kreis as $data)
            <tr>    
                <th>{{$data->abkuerzung}}</th>
                <th>{{$data->kreis}}</th>
                <th>{{$data->bundesland}}</th>
                       
            </tr>
         @endforeach
    </tbody>
</table>
</div>

<button type="back" class="view-btn" onclick="window.location.href='{{route('home')}}'">Back</button>
<button type="wiki" class="view-btn" onclick="window.location.href='https://de.wikipedia.org/wiki/{{$data->kreis}}'">Wikipedia</button>
<button type="map" class="view-btn" onclick="window.location.href='https://www.google.com/maps/place/{{$data->kreis}}'">Google Map</button>



@endsection