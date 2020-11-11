@extends('layouts.main')

@section('content')
    <a href="{{ route('cars') }}">HOME</a>
    <div class="card">
        <div class="card-header">
            <h3>Edit car</h3>
        </div>

        <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">

            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label>name</label>
                    <input class="form-control" type="text" name="name" value="{{ $car->name }}" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>make</label>
                    <input class="form-control" type="text" name="make" value="{{ $car->make }}" placeholder="Enter make">
                </div>
                <div class="form-group">
                    <label>model</label>
                    <input class="form-control" type="text" name="model" value="{{ $car->model }}"
                        placeholder="Enter model">
                </div>
                <div class="form-group">
                    <label>lincense_number</label>
                    <input class="form-control" type="number" name="lincense_number" value="{{ $car->lincense_number }}"
                        placeholder="Enter lincense_number">
                </div>
                <div class="form-group">
                    <label>weight</label>
                    <input class="form-control" type="number" name="weight" value="{{ $car->weight }}"
                        placeholder="Enter weight">
                </div>
                <div class="form-group">
                    <label>year</label>
                    <input class="form-control" type="number" name="year" value="{{ $car->year }}"
                        placeholder="Enter year">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>

    </div>
@endsection
