@extends('layouts.adminlte')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">ROOM LIST</h3>
      <!-- /.card-tools -->
      <div class="card-tools">
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->

          <a href="{{ route('room.create') }}" class="badge badge-primary mr-2">add</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="roomlist" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Номер</th>
                    <th>Тип номера</th>
                    <th>Номер</th>
                    <th>Статус</th>
                    <th>Действие</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $data->type_id }}</td>
                        <td>{{ $data->number }}</td>
                        <td>
                            @if ($data->status == 'v')
                                Доступно
                            @elseif ($data->status == 'o')
                                Занято
                            @elseif ($data->status == 'r')
                                Резервировано
                            @elseif ($data->status == 'os')
                                В ремонте
                            @endif
                            {{-- {{ $data->status }} --}}
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('room.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('room.delete', $data->id) }}" onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- /.card-footer -->
  </div>

  @section('js')
    <script>
        $(function () {
            $("#roomlist").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#roomlist_wrapper .col-md-6:eq(0)');
        });
    </script>
  @endsection
@endsection
