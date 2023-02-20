@extends('app') @section('content')

<body>
    <h1 class="text-center mb-4">Tambah Event</h1>
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
                <label for="desc">Deskripsi</label>
                <input
                    type="text"
                    class="form-control"
                    id="desc"
                    name="desc"
                    placeholder="Deskripsi"
                />
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>

@endsection
