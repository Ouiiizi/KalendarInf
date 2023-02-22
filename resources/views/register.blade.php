

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reg.css">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<center><h4>Register to विजी's calendar</h4></center>
<div class="container mt-4">
    <hr>
    <center> <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </form>
        </form>
    </center>
</div>
<style>
    .fancy {
        background-color: transparent;
        border: 2px solid #000;
        border-radius: 0;
        box-sizing: border-box;
        color: #000;
        cursor: pointer;
        display: inline-block;
        float: right;
        font-weight: 700;
        letter-spacing: 0.05em;
        margin: 0;
        outline: none;
        overflow: visible;
        padding: 1.25em 2em;
        position: relative;
        text-align: center;
        text-decoration: none;
        text-transform: none;
        transition: all 0.3s ease-in-out;
        user-select: none;
        font-size: 12px;
        align-items: center;
        margin-right:926px;
        margin-top: 17px;
    }

    .fancy .text {
        font-size: 1.125em;
        line-height: 1.33333em;
        padding-left: 2em;
        display: block;
        text-align: left;
        transition: all 0.3s ease-in-out;
        text-transform: uppercase;
        text-decoration: none;
        color: black;
    }

    .fancy:hover {
        color: white;
        background: black;
    }

    .fancy:hover::before {
        width: 0.9375rem;
        background: white;
    }

    .fancy:hover .text {
        color: white;
        padding-left: 1.5em;
    }

    .fancy:hover .top-key {
        left: -2px;
        width: 0px;
    }

    .fancy:hover .bottom-key-1,
    .fancy:hover .bottom-key-2 {
        right: 0;
        width: 0;
    }

    .fancy2 {
        background-color: transparent;
        border: 2px solid #000;
        border-radius: 0;
        box-sizing: border-box;
        color: #000;
        cursor: pointer;
        display: inline-block;
        float: right;
        font-weight: 700;
        letter-spacing: 0.05em;
        /*margin: 0;*/
        outline: none;
        overflow: visible;
        padding: 1.25em 2em;
        position: relative;
        text-align: center;
        text-decoration: none;
        text-transform: none;
        transition: all 0.3s ease-in-out;
        user-select: none;
        font-size: 12px;
        align-items: center;
        margin-right: 15px;
        margin-top: 17px;
        margin-bottom: 0%;
    }

    .fancy2 .text {
        font-size: 12px;
        line-height: 1.33333em;
        margin-left: 11px;
        display: block;
        text-align: left;
        transition: all 0.3s ease-in-out;
        text-transform: uppercase;
        text-decoration: none;
        color: black;
        margin-top:0px;
    }

    .fancy2:hover {
        color: white;
        background: black;
    }

    .fancy2:hover::before {
        width: 0.9375rem;
        background: white;
    }

    .fancy2:hover .text {
        color: white;
        padding-left: 1.5em;
    }

    .fancy2:hover .top-key {
        left: -2px;
        width: 0px;
    }

    .fancy2:hover .bottom-key-1,
    .fancy2:hover .bottom-key-2 {
        right: 0;
        width: 0;
    }
    button {
        margin-top: 15px;
        --color: #3992e6;
        position: relative;
        z-index: 1;
    }

    button ::before {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: transparent;
        top: -7px;
        left: -7px;
        z-index: -5;
        border-top: 3px solid var(--color);
        border-left: 3px solid var(--color);
        transition: 0.5s;
    }

    button::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 30px;
        background: transparent;
        bottom: -7px;
        right: -7px;
        z-index: -5;
        border-right: 3px solid var(--color);
        border-bottom: 3px solid var(--color);
        transition: 0.5s;
    }

    button:hover::before {
        width: 100%;
        height: 100%;
    }

    button:hover::after {
        width: 100%;
        height: 100%;
    }
    button {
        padding: 0.7em 2em;
        font-size: 16px;
        background: #222222;
        color: #fff;
        border: none;
        cursor: pointer;
        font-family: inherit;
    }

</style> {{--Buttons--}}
<style>

    .inputtext {
        line-height: 45px;
        border: 2px solid transparent;
        border-bottom-color: #777;
        padding: .2rem 0;
        outline: none;
        background-color: transparent;
        color: #0d0c22;
        transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
        margin-top: 225px;

    }

    .inputtext:focus, input:hover {
        outline: none;
        padding: .2rem 1rem;
        border-radius: 1rem;
        border-color: black;
    }

    .inputtext::placeholder {
        color: black;
    }

    .inputtext:focus::placeholder {
        opacity: 10;
        transition: opacity .3s;
    }

    .inputpas1 {
        line-height: 45px;
        border: 2px solid transparent;
        border-bottom-color: #777;
        padding: .2rem 0;
        outline: none;
        background-color: transparent;
        color: #0d0c22;
        transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
        margin-top: 13px;

    }

    .inputpas1:focus, input:hover {
        outline: none;
        padding: .2rem 1rem;
        border-radius: 1rem;
        border-color: black;
    }

    .inputpas1::placeholder {
        color: black;
    }

    .inputpas1:focus::placeholder {
        opacity: 0;
        transition: opacity .3s;
    }

    .inputpas2 {
        line-height: 45px;
        border: 2px solid transparent;
        border-bottom-color: #777;
        padding: .2rem 0;
        outline: none;
        background-color: transparent;
        color: #0d0c22;
        transition: .3s cubic-bezier(0.645, 0.045, 0.355, 1);
        margin-top: 13px;

    }

    .inputpas2:focus, input:hover {
        outline: none;
        padding: .2rem 1rem;
        border-radius: 1rem;
        border-color: black;
    }

    .inputpas2::placeholder {
        color: black;
    }

    .inputpas2:focus::placeholder {
        opacity: 0;
        transition: opacity .3s;
    }

</style> {{--Inputs--}}
<style>
    * {
        background-color:#777777;
    }

    div{
        margin: 20px;
        border: 3px white;
        padding: 27px;
        width: 250px;
    }

</style>
</body>
</html>
