@extends('layouts.app')

@section('title-block')
Contact page
@endsection

@section('content')
<h1>Contact page</h1>


<form action="{{ route('contact-form') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Input name</label>
    <input type="text" name="name" placeholder="input name" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Input email</label>
    <input type="text" name="email" placeholder="input email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="subject">Input subject</label>
    <input type="text" name="subject" placeholder="input subject" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">message</label>
    <textarea name="message" id="message" class="form-control" placeholder="Input message"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Send</button>
</form>
@endsection
