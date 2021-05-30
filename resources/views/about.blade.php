@extends('layouts.app')

@section('title') About @endsection

@section('content')
<h1 >KFZ Kennzeichen</h1>
</br>
<p>Im Rahmen des Projekts soll eine PHP-basierende Applikation mithilfe des Laravel Frameworks entwickelt. </br>
Die Applikation soll laut der Anforderungen folgende Eigenschaften besitzen:</br>
-	den Landkreis und das Bundesland mittels der Anfangsbuchstaben eines Autokennzeichens ausgeben.</br>
-	für weitere Informationen sollen Wikipedia und Google-Maps zur Verfügung stellen.</br>
-	Datenaustausch durch die Import- und Exportfunktionen im XML, CSV und Json-Format ermöglichen.</br>

</p>

<button type="back" class="view-btn" onclick="window.location.href='{{route('home')}}'">Back</button>
<button type="back" class="view-btn" onclick="window.location.href='{{route('data')}}'">KFZ-Liste</button>
@endsection