@extends('admin.layout')
@section('title', 'Portofolio')
@section('content')
<div class="page-heading"><div><h1>Portofolio</h1><p>Kelola karya dan jadwal publikasi.</p></div><a class="btn btn-primary" href="{{ route('admin.portfolios.create') }}">+ Tambah portofolio</a></div>
<form class="filter-bar" method="get">
    <input class="form-control" type="search" name="q" value="{{ request('q') }}" aria-label="Cari portofolio" placeholder="Cari judul atau kategori" maxlength="100">
    <select class="form-select" name="status" aria-label="Filter status"><option value="">Semua status</option><option value="draft" @selected(request('status') === 'draft')>Draft</option><option value="published" @selected(request('status') === 'published')>Published</option></select>
    <button class="btn btn-outline-secondary" type="submit">Terapkan</button><a href="{{ route('admin.portfolios.index') }}">Reset</a>
</form>
<div class="table-responsive portfolio-table">
    <table class="table align-middle mb-0"><thead><tr><th scope="col">Thumbnail</th><th scope="col">Title</th><th scope="col">Category</th><th scope="col">Status</th><th scope="col">Publish at <span class="text-secondary">(WITA)</span></th><th scope="col">Aksi</th></tr></thead><tbody>
    @forelse($portfolios as $portfolio)
        <tr>
            <td><img class="table-thumb" src="{{ asset('storage/'.$portfolio->thumbnail) }}" alt="" loading="lazy"></td>
            <td><a class="portfolio-title" href="{{ route('admin.portfolios.edit', $portfolio) }}">{{ $portfolio->title }}</a></td>
            <td>{{ $portfolio->category }}</td>
            <td><span class="status-label {{ $portfolio->status }}">{{ $portfolio->status === 'draft' ? 'Draft' : ($portfolio->publish_at?->isFuture() ? 'Terjadwal' : 'Published') }}</span></td>
            <td class="text-nowrap">{{ $portfolio->publish_at?->format('d M Y H:i') ?? '—' }}</td>
            <td><div class="row-actions"><a href="{{ route('admin.portfolios.edit', $portfolio) }}">Edit</a><form method="post" action="{{ route('admin.portfolios.destroy', $portfolio) }}" onsubmit="return confirm('Hapus portofolio ini dari daftar dan website?')">@csrf @method('DELETE')<button class="delete-link" type="submit">Hapus</button></form></div></td>
        </tr>
    @empty
        <tr><td colspan="6" class="text-center py-5 text-secondary">{{ request()->hasAny(['q', 'status']) ? 'Tidak ada portofolio yang sesuai filter.' : 'Belum ada portofolio. Tambahkan karya pertama Anda.' }}</td></tr>
    @endforelse
    </tbody></table>
</div>
<div class="mt-4">{{ $portfolios->links('pagination::bootstrap-5') }}</div>
@endsection
