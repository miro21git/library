@extends('layout')

@section('content')

    <book-detail></book-detail>

@endsection


@section('js')

    <script>
        window.app.$store.commit('bookDetail/set', ['book', JSON.parse('{!! $book ?? '{}' !!}')], {root:true});
        window.app.$store.commit('bookDetail/set', ['authors', JSON.parse('{!! $authors !!}')], {root:true});
    </script>

@endsection
