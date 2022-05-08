<form action="{{ route('login')  }}" method="POST">

    @csrf

    <label for="email">Email:
        <input type="email" name="email">
        @error('email') <div>{{ $message }}</div> @enderror
    </label>

    <label for="password">Password:
        <input type="password" name="password">
        @error('password') <div>{{ $message }}</div> @enderror
    </label>

    <input type="submit" value="Login">

</form>
