<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    @include ('components.boostrap')
</head>
<body>
    <div class="mt-3 mx-3">
        <form action="{{ action([App\Http\Controllers\MahasiswaController::class, 'update'], [$mahasiswa->id]) }}"  method="post">
            @csrf
            @method('PUT')

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="Text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" placeholder="Masukkan Nama Anda">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa</label>
                <input type="Text" name="NIM" class="form-control" value="{{ $mahasiswa->NIM }}" placeholder="Masukkan NIM Anda">
            </div>

            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="Text" name="tanggal_lahir" class="form-control" value="{{ $mahasiswa->tanggal_lahir }}" placeholder="Masukkan Tanggal Lahir Anda">
            </div>
    
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                <input type="Text" name="tempat_lahir" class="form-control" value="{{ $mahasiswa->tempat_lahir }}" placeholder="Masukkan Tempat Lahir Anda">
            </div>
            
            <div class="mb-3 w-25">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" rows="3" name="alamat" value="{{ $mahasiswa->alamat }}" placeholder="Masukkan Alamat Anda">{{ $mahasiswa->alamat }}</textarea>
            </div>
            
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">Asal SMA/SMK</label>
                <input type="Text" name="asal" class="form-control" value="{{ $mahasiswa->asal }}" placeholder="Masukkan Asal SMA/SMK Anda">
            </div>
            <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label">ID Jurusan</label>
                <input type="Text" name="id_jurusan" class="form-control" value="{{ $mahasiswa->id_jurusan }}" placeholder="Masukkan ID Jurusan Anda">
            </div>
            
            <button class="btn btn-primary" type="submit" value="add">Submit</button>
            <button class="btn btn-danger" type="reset" value="clear">Clear</button>
    
        </form>
    </div>
</body>
</html>


{{-- <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="fullname"></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><input type="text" name="NIM"></td>
        </tr>
        <tr>
            <td>Nomor Induk Siswa Nasional</td>
            <td>:</td>
            <td><input type="text" name="NIDN"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center;"><input type="submit" value="Add">
            <input type="reset" value="Clear"></td>
        </tr>
    </table> --}}
