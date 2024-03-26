@extends('beranda')

@section('konten')
    <div class="container">
        <h1>Search Results</h1>
        @if ($cari->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode</th>
                        <th>Judul Dokumen</th>
                        <th>Pengupload</th>
                        <!-- Add more table headers as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cari as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                <a href="{{ $item->file }}">{{ $item->dok }}</a>
                            </td>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->pengupload }}</td>
                            <!-- Add more table cells for other columns -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $cari->links() }} <!-- Pagination links -->
        @else
            <p>No results found.</p>
        @endif
    </div>
@endsection
