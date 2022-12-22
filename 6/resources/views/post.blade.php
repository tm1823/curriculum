@extends('layouts.app')
@section('title', 'つぶやき一覧')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
               
                <form action="{{ action('PostController@create') }}" method="post" enctype="multipart/form-data">



                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                   
                    <div class="form-group row">
                        <label class="col-md-2" for="body">つぶやき</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="つぶやく">
                </form>
                <div>
                @foreach($users as $user)
                @foreach($posts as $post)
                    @if($user->id == $post->user_id)
                    <div>{{ $user->name }}</div>
                    <div>{{ $post->created_at }}</div>
                    <div>{{ $post->body }}</div>
                        @if(Auth::id() == $post->user_id)
                        <div><a href="{{ action('PostController@delete',['id'=>$post->id]) }}">削除</a></div>
                        @endif
                    @endif
                @endforeach
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection