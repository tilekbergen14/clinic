@extends('layouts.main')
@section('content')
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6" style="max-width: 500px">
                    <div class="text-center text-white">
                        <h1 class="mb-3">Дәрігерге жазылу!</h1>
                        <form action="{{ route('meeting') }}" method="POST">
                            @csrf
                            @error('doctor_id')
                                <p class="text-start text-light w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-2">
                                <select name="doctor_id" class="form-select" id="inputGroupSelect01">
                                    <option value={{ null }}>Дәрігерді таңдау</option>
                                    @foreach ($doctors as $doctor)
                                        <option value={{ $doctor->id }}>{{ $doctor->user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('date')
                                <p class="text-start text-light w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <input name="date" type="date" class="mb-2 form-control" id="emailAddress" type="email"
                                placeholder="Почта" />
                            @error('time')
                                <p class="text-start text-light w-100 m-0" style="font-size: 14px">{{ $message }}</p>
                            @enderror
                            <div class="input-group mb-2">
                                <select name="time" class="form-select" id="inputGroupSelect01">
                                    <option value={{ null }}>Уақыт</option>
                                    <option value="8">8:00</option>
                                    <option value="9">9:00</option>
                                    <option value="10">10:00</option>
                                    <option value="11">11:00</option>
                                    <option value="12">12:00</option>
                                    <option value="13">13:00</option>
                                    <option value="14">14:00</option>
                                    <option value="15">15:00</option>
                                    <option value="16">16:00</option>
                                    <option value="17">17:00</option>
                                </select>
                            </div>
                            <div class="w-100"><button class="w-100 btn btn-primary" id="submitButton"
                                    type="submit">Жіберу</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="mt-4 bg-light">
        <div class="container">
            <h3>Жазылымдар</h3>
            <table class="text-dark table rounded border">
                <thead>
                    <tr>
                        <th scope="col">Дәрігер</th>
                        <th scope="col">Уақыт</th>
                        <th scope="col" style="text-align: end"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->meetings as $meeting)
                        <tr>
                            <td scope="row" style="vertical-align:middle">
                                {{ $meeting->doctor->user->name }}
                            </td>
                            <td scope="row" style="width: 250px; vertical-align:middle">
                                {{ $meeting->date }}
                                ,
                                {{ $meeting->time }} : 00</td>
                            <td scope="row" style="width: max-content">
                                <div class="d-flex justify-content-end">
                                    <form method="POST" action={{ route('deletemeeting') }}>
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="id" value="{{ $meeting->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Өшіру</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="border mb-4"></div>
            <form action="{{ route('logout') }}">
                <button class="btn btn-danger w-100">Log out</button>
            </form>
        </div>
    </section>
@endsection

@section('head')
    <title>Жеке деректер</title>
@endsection
