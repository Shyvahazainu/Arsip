@extends('beranda')
<link rel="stylesheet" href="../css/tampilan-data.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

@section('konten')
    <div class="container-pydk">
        <div class="form-group"> <!--		Show Numbers Of Rows 		-->
            <div class="locus-dropdown">
                <select id="locus" name="locus">
                    <option value="" disabled selected>Select Locus</option>
                    @foreach ($total_locus_values as $locus)
                        <option value="{{ $locus }}">{{ $locus }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="tb_search">
            <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                class="form-control">
        </div>
        <table table id="table-penyidikan" class="table table-striped table-bordered table-sm" cellspacing="0"
            width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Bidang</th>
                    <th>Judul Dokumen</th>
                    <th>Jenis Pidana</th>
                    <th>Perkara</th>
                    <th>Locus Delicty</th>
                    <th>Penyidik</th>
                    <th>Tahun</th>
                    <th>Jenis File</th>
                    <th>Tanggal Ditambahkan</th>
                    <th>Pengupload</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($dataArsip->take(10) as $arsip)
                    <tr>
                        <td>{{ $arsip->id }}</td>
                        <td>{{ $arsip->bidang }}</td>
                        <td>{{ $arsip->dok }}</td>
                        <td>{{ $arsip->jenis_pidana }}</td>
                        <td>{{ $arsip->perkara }}</td>
                        <td>{{ $arsip->locus }}</td>
                        <td>{{ $arsip->penyidik }}</td>
                        <td>{{ $arsip->tahun }}</td>
                        <td>{{ $arsip->jenis_file }}</td>
                        <td>{{ $arsip->created_at }}</td>
                        <td>{{ $arsip->pengupload }}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            <div class="pagination-info mt-3">
                Showing {{ $dataArsip->firstItem() }} to {{ $dataArsip->lastItem() }} of {{ $dataArsip->total() }}
                results
            </div>
            {{ $dataArsip->links() }}
        </div>
    </div>
@endsection
