@extends('layouts.helloapp')

@section('title', 'Hello#index Blade Template')

@section('content')
    <?php echo $msg ?> 
    <?php echo $id ?>

    @each('components.item', [['name' => 'hoge', 'mail' => 'hoge@mail.com'], ['name' => 'fuga', 'mail' => 'fuga@mail.com']], 'item')
@endsection