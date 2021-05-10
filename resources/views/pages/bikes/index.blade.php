@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css">

@endsection
@section('content')

    <div class="my-3">
        <a href="{{ route('garage.create') }}" class="btn btn-primary btn-block btn-sm">Tambah</a>
    </div>
    <div class="table-responsive">
        <table id="garage-table" class="table table-stripped table-hover display nowrap" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Sepeda</th>
                    <th>Warna Sepeda</th>
                    <th>Tipe Sepeda</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($bikes as $bike)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $bike->bike_name }}</td>
                        <td>{{ $bike->bike_color }}</td>
                        <td>{{ $bike->bike_type }}</td>
                        <td>
                            @if ($bike->bike_status == false)
                                Tidak dipinjam
                            @else
                                Di Pinjam
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('garage.destroy', $bike->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="btn btn-primary btn-sm btn-borrow" data-id="{{ $bike->id }}"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-bicycle"></i> Lend
                                </button>
                                <a href="{{ route('garage.edit', $bike->id) }}" class="btn btn-warning btn-sm"> <i
                                        class="fas fa-edit"></i> Ubah</a>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                    Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" id="form-borrow" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        @csrf
                        <div class="form-group">
                            <label for="">Borrow's Name</label>
                            <input type="text" class="form-control" name="borrower_name" placeholder="Enter Borrower's Name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#garage-table').DataTable({})

            $('#garage-table').on('click', '.btn-borrow', function() {
                $('#form-borrow').attr('action', `/borrow/${$(this).data('id')}`);
            });
        })

    </script>
@endsection
