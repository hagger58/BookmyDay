@extends('layouts.main')

@section('content')
  <h1>Contact</h1>

<div class="row">
    <div class="col-md-12">
        <h1>
            Stuur een bericht
        </h1>
        <form action="{{ url('contact') }}" method="POST" >
                {{ csrf_field() }}
            <div class="form-group">
                <label name="email">
                    Email:
                </label>
                <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label name="subject">
                    Onderwerp:
                </label>
                <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <label name="message">
                    Bericht:
                </label>
            </div>
            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10">
Schrijf uw bericht hier . . .
                </textarea>
            </div>
            <input type="submit" value="Stuur bericht">
        </form>
    </div>
</div>
@endsection
