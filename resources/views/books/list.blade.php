@extends('layout')

@section('content')

    <book-list></book-list>

@endsection



@section('js')

    <script>
        window.app.$store.commit('bookList/set', ['books', JSON.parse('{!! $books ?? '{}' !!}')], {root:true});
    </script>

@endsection
