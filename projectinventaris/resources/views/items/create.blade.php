<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Barang</title>
</head>
<body>
    <h2>Formulir Tambah Barang Inventaris Kantor</h2>
    {{-- panggil kondisi bawaan laravel jika data berhasil
    disimpan muncul pesan succes --}}
    @if (session('succes'))
      <div>{{ session('succes') }}</div>
    @endif 
    {{-- formulir mengarah ke route store milik item --}}
    <form action="{{ route('items.store') }}" method="POST">
    @csrf {{-- wajib ada di form laravel --}}

    <label>kode barang</label>
    <input type="text" name="code" required placeholder="contoh: inv001">
     <br>

    <label>Nama Barang</label>
    <input type="text" name="item_name" required placeholder="contoh: laptop" >
    <br>

       <label>Kategori:</label>
     <input type="text" name="category" required placeholder="contoh: elektronik" >
    <br>

    <label>stok</label>
    <input type="number" name="stok" required value="1" >
     <br>
 
    <label>Kondisi</label>
    <select name="condition" >
        <option value="baik">Baik</option>
        <option value="rusak ringan">Rusak Ringan</option>
        <option value="rusak parah">Rusak Parah</option>
    </select>
<br>

 <label>Lokasi Ruangan</label>
     <input type="text" name="room_location" placeholder="contoh: Ruang IT Lt 3" >
    <br>

    <button type="submit"> Simpan Barang</button>
     
</form>
</body>
</html>