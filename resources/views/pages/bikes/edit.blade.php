@extends('layouts.app')
@section('content')
    <div class="container">
        {{ $bike->bike_name }}
        <form action="{{ route('garage.update', $bike->id) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="bike_name">Nama Sepeda</label>
                <input type="text" class="form-control @error('bike_name') is-invalid @enderror" name="bike_name" id="bike_name" placeholder="Nama Sepeda" value="{{ $bike->bike_name }}"/>
                @error('bike_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bike_color">Warna Sepeda</label>
                <input type="text" class="form-control @error('bike_color') is-invalid @enderror" name="bike_color" id="bike_color" placeholder="Warna Sepeda" value="{{ $bike->bike_color }}"/>
                @error('bike_color')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="bike_type">Tipe Sepeda</label>
                <input type="text" class="form-control @error('bike_type') is-invalid @enderror" name="bike_type" id="bike_type" placeholder="Tipe Sepeda" value="{{ $bike->bike_type }}"/>
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