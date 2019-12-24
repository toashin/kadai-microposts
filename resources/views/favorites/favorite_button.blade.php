<!--もし、ユーザーが該当する投稿をお気に入り登録していた場合-->
@if (Auth::user()->is_favorites($micropost->id))
    {!! Form::open(['route' => ['users.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => 'btn btn-dark btn-sm']) !!}
    {!! Form::close() !!}
    
@else
    {!! Form::open(['route' => ['users.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => 'btn btn-success btn-sm']) !!}
    {!! Form::close() !!}    
@endif