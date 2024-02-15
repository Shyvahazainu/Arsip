<link rel="stylesheet" href="../css/upload.css">
@extends('beranda')
@section('konten')
    <div class="up-load">
        <div class="form-up">

            <form action="{{ route('uploading') }}" method="post" enctype="multipart/form-data">
                @csrf <!-- Add CSRF token for security -->

                <label for="nama">Nama Pengupload</label><br>
                <input class="nama-up" type="text" placeholder="{{ Auth::user()->name }}"
                    aria-label="Disabled input example" disabled> <br>

                <label for="dok">Judul Dokumen</label>

                <textarea name="dokumen" id="dok" style="height: 200px; width: 1100px;" onclick="this.value=''">Enter text here...</textarea>


                <label for="bidang">Bidang</label>
                <select name="bidang" id="bidang">
                    <option value="Pilih Bidang" disabled></option>
                    <option value="Penyidikan">Penyidikan</option>
                    <option value="Penuntutan">Penuntutan</option>
                    <option value="Eksekusi & Eksaminasi">Eksekusi & Eksaminasi</option>
                </select>


                <label for="perkara">Perkara</label>
                <input type="text" id="perkara" name="perkara">

                <label for="tahun">Tahun File</label>
                <input type="number" id="tahun" name="tahun">

                <label for="locus">Locus</label>
                <select id="locus" name="locus">
                    <option value="" disabled selected>Select Locus</option>
                    @foreach ($total_locus_values as $locus)
                        <option value="{{ $locus }}">{{ $locus }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="file" class="form-label">File Upload</label>
                    <input class="form-control" type="file" id="file" name="file">
                </div>

                <label for="jenis_file">Jenis File</label>
                <input type="text" id="jenis_file" name="jenis_file">

                <input type="submit" value="Submit" id="up-submit" class="up-submit">
            </form>
        </div>

    </div>
@endsection
