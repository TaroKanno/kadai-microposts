@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete', 'class' => "form-group"]) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-default btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $micropost->id], 'class' => "form-group"]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-xs"]) !!}
    {!! Form::close() !!}
@endif

