@extends('layouts.main')
@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="w-100" style="max-width: 500px">
            <form method="POST">
                @csrf
                <div class="features-icons-item">
                    <div class="features-icons-icon d-flex m-4">
                        <div class="m-auto bg-primary d-flex justify-content-center" style="width: 72px; border-radius: 50%">
                            <i class="bi-lock m-auto text-light" style="font-size: 3rem;"></i>
                        </div>
                    </div>
                </div>
                @error('email')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <input value="{{ old('email') }}" name="email" type="email" class="form-control form-control-lg mb-2"
                    id="emailAddressBelow" type="email" placeholder="Почта" />
                @error('name')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <input value="{{ old('name') }}" name="name" type="text" class="form-control form-control-lg mb-2"
                    id="emailAddressBelow" type="email" placeholder="Атыңыз" />
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <input value="{{ old('password') }}" name="password" type="password"
                    class="form-control form-control-lg mb-2" id="emailAddressBelow" type="email" placeholder="Құпиясөз" />
                @error('password')
                    <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                @enderror
                <input value="{{ old('password') }}" name="password_confirmation" type="password"
                    class="form-control form-control-lg mb-2" id="emailAddressBelow" type="email"
                    placeholder="Құпиясөзді қайталау" />
                <button type="submit" class="btn btn-primary w-100">Тіркелу</button>
                <p class="mt-2 text-center">Аккаунт барма? <a href="{{ route('login') }}">Кіру</a></p>
            </form>
        </div>
    </div>
@endsection

@section('head')
    <title>Тіркелу</title>
@endsection
