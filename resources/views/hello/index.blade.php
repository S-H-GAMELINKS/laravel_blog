@extends('layouts.helloapp')

@section('title', 'Hello#index Blade Template')

@section('content')
    <?php echo $msg ?> 
    <?php echo $id ?>
@endsection