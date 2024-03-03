<style>
    /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        } */

    .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .background-image img {
        width: 100%;
        height: 100%;
        filter: blur(10px);
        /* Adjust the blur intensity as needed */
    }

    .login-container {
        background-color: rgba(255, 255, 255, 0.8);
        /* Semi-transparent white background */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        margin: 20px auto;
        text-align: center;
        backdrop-filter: blur(5px);
        /* Adjust the blur intensity as needed */
    }

    .login-container h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .form-group button {
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    .form-group button:hover {
        background-color: #45a049;
    }
</style>

<div class="background-image">
    <img src="{{ asset('img/pohon.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
</div>

<div class="login-container">
    <h2>Register</h2>

    @if (session('success'))
        <div class="alert alert-success">
            <div>{{session('success')}}</div>
        </div>
    @endif    
    @if (session('error'))
        <div class="alert alert-danger">
            <div>{{session('error')}}</div>
        </div>
    @endif    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open([
    'route' => 'register.action',
    'method' => 'POST',
    'enctype' => 'multipart/form-data',
    'id' => 'form',
    ]) !!}
        <div class="form-group">
            <label>Nama:</label>
            {!! Form::text("name", null, ["class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            <label>Email:</label>
            {!! Form::email("email", null, ["class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            {!! Form::password("password", ["class" => "form-control"]) !!}
        </div>
        <div class="form-group">
            <button type="submit">
                <i class="fas fa-sign-in-alt"></i> Register
            </button>
        </div>
    {!! Form::close() !!}
</div>
