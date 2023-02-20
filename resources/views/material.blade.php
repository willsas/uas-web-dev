@extends('app') @section('content')
<body>
    <div class="container">
        <a href="/material/add" type="button" class="btn btn-primary">
            Tambah +
        </a>

        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Download</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->name }}</td>
                        <td>
                            <a href="{{ $row->url }}" class="link">
                                Download
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection
