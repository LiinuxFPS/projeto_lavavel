@extends('layouts.app')

@section('content')

    @component('_componentes.forms')  
    @endcomponent 
    
    @if($errors->any())
    <pre>{{ print_r($errors) }}</pre>
    @endif
@endsection    