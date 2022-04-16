@extends('layouts.main')
@section('content')
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6" style="max-width: 500px">
                    <div class="text-center text-white">
                        <h3 class="my-3">Міндет қосу</h3>
                        <form action="{{ route('addposition') }}" method="POST">
                            @csrf
                            @error('position')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <input value="{{ old('position') }}" name="position" type="text" class="mb-2 form-control"
                                placeholder="Маман" />
                            <div class="w-100"><button class="w-100 btn btn-primary" id="submitButton"
                                    type="submit">Қосу</button></div>
                        </form>
                        <h3 class="my-3">Дәрігер қосу</h3>
                        <a href="{{ route('doctor') }}" class="btn btn-primary">Өту</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('head')
    <title>Дәрігер қосу</title>
@endsection
