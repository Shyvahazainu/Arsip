<link rel="stylesheet" href="../css/upload.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

@extends('beranda')
@section('konten')
    <div class="up-load">
        <div class="form-up">

            <form action="{{ route('uploading') }}" method="post" enctype="multipart/form-data" class="upload-file">
                @csrf <!-- Add CSRF token for security -->

                <div class="upl-file">
                    <label for="file" class="form-label">Choose a file</label>
                    <div class="file-input-container">
                        <input class="form-control" type="file" id="file" name="file"
                            onchange="updateLabel(this)">
                        <label class="file-input-label" for="file"><i class="fas fa-upload"></i> <span
                                id="file-name">Browse</span></label>
                    </div>
                </div>
                <label for="nama">Nama Pengupload</label><br>
                <input class="nama-up" type="text" placeholder="{{ Auth::user()->name }}"
                    aria-label="Disabled input example" disabled>

                <label for="dok">Judul Dokumen</label> <br>

                <textarea name="dokumen" id="dok" style="height: 72px; width: 520px;" onclick="this.value=''">Enter text here...</textarea> <br>


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



                <label for="jenis_file">Jenis File</label>
                <input type="text" id="jenis_file" name="jenis_file">

                <input type="submit" value="Submit" id="up-submit" class="up-submit">
            </form>
        </div>

    </div>
@endsection

<script src="../js/upload.js"></script>
