@extends('layouts.main')
@section('content')
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6" style="max-width: 500px">
                    <div class="text-center text-white">
                        <h3 class="mb-3">Дәрігер қосу</h3>
                        <form action="{{ route('adddoctor') }}" method="POST">
                            @csrf
                            @error('dr_name')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-2">
                                <select name="dr_name" class="form-select" id="inputGroupSelect01">
                                    <option value={{ null }}>Аты</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('dr_position')
                                <p class="text-start text-danger w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-2">
                                <select name="dr_position" class="form-select" id="inputGroupSelect01">
                                    <option value={{ null }}>Маман</option>
                                    @foreach ($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-100"><button class="w-100 btn btn-primary" id="submitButton"
                                    type="submit">Қосу</button></div>
                        </form>
                        <h3 class="my-3">Маман қосу</h3>
                        <a href="{{ route('addposition') }}" class="btn btn-primary">Өту</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('head')
    <title>Дәрігер қосу</title>
@endsection
