<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-warning">
                        <h5 class="mb-0">Edit Data Mata Kuliah</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Kode Mata Kuliah</label>
                                <input type="text" name="kode_mk" class="form-control" value="{{ $mk->kode_mk }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Mata Kuliah</label>
                                <input type="text" name="nama_mk" class="form-control" value="{{ $mk->nama_mk }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SKS</label>
                                <input type="number" name="sks" class="form-control" value="{{ $mk->sks }}" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>