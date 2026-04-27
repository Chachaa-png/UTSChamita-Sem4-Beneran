<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning">
                        <h5 class="mb-0">Edit Data Jurusan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="{{ $jurusan->jurusan }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode Jurusan</label>
                                <input type="text" name="kode_jurusan" class="form-control" value="{{ $jurusan['kode jurusan'] }}" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>