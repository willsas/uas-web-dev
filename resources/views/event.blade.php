@extends('app') @section('content')
<body>
    <div class="container">

        <a href="/event/add" type="button" class="btn btn-primary">
            Tambah +
        </a>
        
        <div class="row">
            <div class="list-group">
                @php $no = 1; @endphp @foreach ($data as $row)
                <a
                    href="#"
                    class="list-group-item list-group-item-action flex-column align-items-start active"
                >
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $row->name }}</h5>
                        <small>{{ $row->created_at->diffForHumans() }}</small>
                    </div>
                    <p class="mb-1">
                        {{ $row->desc }}
                    </p>
                </a>
                @endforeach
            </div>

        </div>
    </div>
</body>

@endsection
