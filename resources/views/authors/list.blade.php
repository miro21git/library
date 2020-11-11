@extends('layout')

@section('content')

    <author-list></author-list>

@endsection


@section('js')

    <script>
        window.app.$store.commit('authorList/set', ['authors', JSON.parse('{!! $authors ?? '{}' !!}')], {root:true});
    </script>

@endsection
