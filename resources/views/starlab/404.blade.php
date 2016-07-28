@extends('starlab/app')

@section('body')

<h3>OOP's...404 page</h3>
<p>Please check the URL</p>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home Page</a>


@stop