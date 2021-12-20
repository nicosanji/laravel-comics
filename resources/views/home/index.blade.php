{{-- Estendiamo il layout a questa pagina --}}
@extends("layouts.default")

{{-- Sostituiamo uno yield con una semplice stringa --}}
@section('page_title', 'Homepage DC COMICS')


{{-- Sostituiamo uno yield con del html --}}
@section('content')
    <div class="container">
        <h1>Inserire qui il contenuto ...</h1>
    </div>
@endsection
