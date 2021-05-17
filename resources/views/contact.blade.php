@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Contact us</h1>
                <form method="post" action="/contact">
                    @csrf 
                    <div class="mb-3">
                        <label for="subjectID" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subjectID" placeholder="Subject...">
                    </div>
                    <div class="mb-3">
                        <label for="emailID" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="emailID" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="messageID" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="messageID" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
