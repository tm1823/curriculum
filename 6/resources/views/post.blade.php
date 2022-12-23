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
            <div class="card mb-2">
                
                    @foreach($users as $user)
                   
                    @foreach($posts as $post)
                    <div class="flex card mb-2 justify-between">
                    @if($user->id == $post->user_id)
                    <div class="flex flex-row justify-between w-full py-3">
                        <div class="flex flex-col boder-box mx-4 border-gray-200">{{ $user->name }}</div>
                        <div class="text-right">{{ $post->created_at }}</div>
                    </div>
                    <div class="flex flex-col boder-box mx-4 boder-b border-gray-200">{{ $post->body }}</div>
                    @if(Auth::id() == $post->user_id)
                    <div class="text-right"><a href="{{ action('PostController@delete',['id'=>$post->id]) }}">削除</a></div>
                    @endif
                    @endif
                    </div>
                    @endforeach
                    
                    @endforeach
                
            </div>
        </div>
    </div>
</div>
@endsection