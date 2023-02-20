@extends('app') @section('content')

<body>
    <h1 class="text-center mb-4">Tambah Materi</h1>
    <div class="container">
        <form action="add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Nama materi"
                />
            </div>

            <div class="form-group">
                <label for="url">Downloadable URL</label>
                <input
                    type="text"
                    class="form-control"
                    id="url"
                    name="url"
                    placeholder="Downloadable URL"
                />
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

@endsection
