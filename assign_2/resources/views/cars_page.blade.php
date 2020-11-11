@extends('layouts.main')


@section('content')
    <table class="table table-dark table-hover">
        <thead>
            <th>ID</th>
            <th>name</th>
            <th>model</th>
            <th>make</th>
            <th>lincense_number</th>
            <th>weight</th>
            <th>registration year</th>
            <th>age</th>
            <th>actions</th>
        </thead>
        <tbody>
            <form action="{{ route('cars.create') }}" method="post">
                @csrf
                <tr>
                    <td>#</td>
                    <td><input type="text" name="name" value="{{ request()->name }}" class="form-control"></td>
                    <td><input type="text" name="model" value="{{ request()->model }}" class="form-control"></td>
                    <td><input type="text" name="make" value="{{ request()->make }}" class="form-control"></td>
                    <td><input type="number" name="lincense_number" value="{{ request()->lincense_number }}" class="form-control"></td>
                    <td><input type="number" name="weight" value="{{ request()->weight }}" class="form-control"></td>
                    <td><input type="number" name="year" value="{{ request()->year }}" class="form-control"></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-success w-100">add</button></td>
                </tr>
            </form>

            <?php foreach ($cars as $car): ?>
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->make }}</td>
                    <td>{{ $car->lincense_number }}</td>
                    <td>{{ $car->weight }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ now()->year - $car->year }}</td>
                    <td class="d-flex">
                        {{-- <a class="btn btn-primary mr-2">edit</a> --}}
                        <a href="{{ route('cars.edit', ['id' => $car->id]) }}" class="btn btn-primary mr-2">edit</a>

                        <form action="{{ route('cars.delete') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $car->id }}">
              
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
