@extends('layouts.main')
@section('content')
    <header class="masthead">
        <div class="container position-relative">
        </div>
    </header>
    <div class="container py-4">
        <h5 class="my-4 text-primary">Дәрігерлер</h5>
        <table class="text-dark table rounded border">
            <thead>
                <tr>
                    <th scope="col">Аты</th>
                    <th scope="col">Міндеті</th>
                    <th scope="col" style="text-align: end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td scope="row" style="vertical-align:middle">{{ $doctor->user->name }}
                        </td>
                        <td scope="row" style="width: 250px; vertical-align:middle">{{ $doctor->position->name }}</td>
                        <td scope="row" style="width: max-content">
                            <div class="d-flex justify-content-end">
                                <form method="POST" action="{{ route('deletedoctor') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">Өшіру</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <form action="{{ route('doctor') }}" method="POST">
                @csrf
                <input type="hidden" name="id" />
                <button type="submit" class="btn btn-primary">Дәрігер қосу</button>
            </form>
        </div>
        <h5 class="my-4 text-primary">Жазылымдар</h5>
        <table class="text-dark table rounded border">
            <thead>
                <tr>
                    <th scope="col">Дәрігер</th>
                    <th scope="col">Пациент</th>
                    <th scope="col">Уақыт</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="vertical-align:middle">Мухамет Тилекберген
                    </td>
                    <td scope="row" style="width: 250px; vertical-align:middle">Терапепт</td>
                    <td scope="row" style="width: max-content">
                        2022/01/02
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
@endsection

@section('head')
    <title>Админ</title>
@endsection
