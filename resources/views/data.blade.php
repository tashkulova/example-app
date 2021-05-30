@extends('layouts.app')

@section('title') Kfz Kennzeichen Liste @endsection

@section('content')
<h1>Kfz Kennzeichen Liste</h1>

<form class="searchfield mt-5" action="{{route('datasort')}}"  method ="get" >
    <input type="text" name="search" class="view-btn" placeholder="Search Stadt or Landkreis">
</form>

<div class="table-responsive mt-4">
<table class="table table-striped table-hover table-condensed">
    <thead>
        <tr>
            <th><strong>Ortskuerzel</strong></th>
            <th><strong>Stadt / Landkreis</strong></th>
            <th><strong>Bundesland</strong></th>
        </tr>
    </thead>
    <tbody>
         @foreach($values as $data)
            <tr>    
                <th>{{$data->abkuerzung}}</th>
                <th>{{$data->kreis}}</th>
                <th>{{$data->bundesland}}</th>
                       
            </tr>
         @endforeach
    </tbody>
</table>
</div>


    <button type="back" class="view-btn" onclick="window.location.href='{{route('data')}}'">Cancel</button>
    <button input type="upload"  name="select-file" class="view-btn">Upload</button>
    <button type="download" class="view-btn">Download</button>





@endsection