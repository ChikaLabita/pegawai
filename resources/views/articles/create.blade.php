@extends('layouts.app')

@section('content')
<div class="container">
    <!--untuk mengunggah berkas-->
    <form method="post" action="{{route('articles.store')}}" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
	<label for="title">Title: </label>
	<input type="text" class="form-control" required="required" name="title"></br>
    <label for="content">Content: </label>
    <textarea type="text" class="form-control" required="required" name="content"></textarea></br>
    <label for="image">Feature Image: </label>
    <!--untuk input form-> file -->
    <input type="file" class="form-control" required="required" name="image"></br>
    <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
    </div>
    </form>
</div>
@endsection