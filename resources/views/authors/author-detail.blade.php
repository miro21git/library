@extends('layout')


@section('content')

    <author-detail></author-detail>

@endsection

@section('js')

<script>

    window.app.$store.commit('authorDetail/set', ['msg', '{{$msg ?? ''}}'], {root:true});

    window.app.$store.commit('authorDetail/set', ['id', '{{$author->id ?? ''}}'], {root:true});
    window.app.$store.commit('authorDetail/set', ['name', '{{$author->name ?? ''}}'], {root:true});
    window.app.$store.commit('authorDetail/set', ['surname', '{{$author->surname ?? ''}}'], {root:true});

</script>

@endsection
