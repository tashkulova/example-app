@extends('layouts.app')

@section('title') Home @endsection

@section('content')

<form action="{{route('review')}}" method="post">
  @csrf
  <div class="searchPlate"> 
    <img src="/images/kfz-kennzeichen.png" alt="Eurokennzeichen"> 
      <div class="seachtInputArea">
        <input type="text" name="abkuerzung" maxlength="3" value="" size="3">
      </div> 
  </div>

  <button type="check" class="view-btn">Prüfen</button>

</form>

@endsection
    
@section('aside')
@parent
<p>Extra Text for Home </p>
@endsection
    