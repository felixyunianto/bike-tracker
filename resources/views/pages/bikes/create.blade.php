@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('garage.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="bike_name">Nama Sepeda</label>
                <input type="text" class="form-control @error('bike_name') is-invalid @enderror" name="bike_name" id="bike_name" placeholder="Nama Sepeda" value="{{ old('bike_name') }}"/>
                @error('bike_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bike_color">Warna Sepeda</label>
                <input type="text" class="form-control @error('bike_color') is-invalid @enderror" name="bike_color" id="bike_color" placeholder="Warna Sepeda" value="{{old('bike_color')}}"/>
                @error('bike_color')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="bike_type">Tipe Sepeda</label>
                <input type="text" class="form-control @error('bike_type') is-invalid @enderror" name="bike_type" id="bike_type" placeholder="Tipe Sepeda" value="{{ old('bike_type') }}"/>
                @error('bike_type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Simpan</button>
            </div>
        </form>
    </div>
@endsection