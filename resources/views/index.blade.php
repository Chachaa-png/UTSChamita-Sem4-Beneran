<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @include('components.boostrap')
</head>
    <body>
        <div style="text-align: center;">
            <a href="/"><button type="button" class="btn btn-primary mx-auto" style ="width:90%; margin:10px;">Kembali</button></a>
        </div>
        <table style="width:90%; margin:auto;" class="table table-striped table-hover">
            <thead>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Asal SMA/SMK</th>
                <th>Id Jurusan</th>
                <th class="text-center">Aksi</th>
            </thead>
            @foreach ($mahasiswa as $nomor => $m)
            <tr>
                <td>{{$nomor + 1}}</td>
                <td>{{$m->nama}}</td>
                <td>{{$m->NIM}}</td>
                <td>{{$m->tanggal_lahir}}</td>
                <td>{{$m->tempat_lahir}}</td>
                <td>{{$m->alamat}}</td>
                <td>{{$m->asal}}</td>
                <td>{{$m->id_jurusan}}</td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                    <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'destroy'], [$m->id]) }}" method="post">
                    @csrf
                    @method('DELETE') 
                        <button class="btn btn-danger">Hapus</button>
                    </form>

                    <a href="{{ action([App\Http\Controllers\MahasiswaController::class, 'edit'], [$m->id]) }}" method="post">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </table>
    </body>
</html>