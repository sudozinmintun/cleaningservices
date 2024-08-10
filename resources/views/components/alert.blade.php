@if ($message = Session::get('success'))
    <div class="alert alert-primary" role="alert"
        style="background-color: green; color: white; font-size: 18px; text-align: center;">
        <center>
            {{ $message }}
        </center>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger d-flex align-items-center" role="alert"
        style="background-color: red;  font-size: 18px;">
        <center>
            {{ $message }}
        </center>
    </div>
@endif
