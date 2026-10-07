@extends('admin.layout')
@section('title', $portfolio->exists ? 'Edit portofolio' : 'Tambah portofolio')
@section('content')
<div class="page-heading"><div><a class="back-link" href="{{ route('admin.portfolios.index') }}">← Portofolio</a><h1>{{ $portfolio->exists ? 'Edit portofolio' : 'Tambah portofolio' }}</h1></div></div>
<form class="editor-panel" method="post" enctype="multipart/form-data" action="{{ $portfolio->exists ? route('admin.portfolios.update', $portfolio) : route('admin.portfolios.store') }}">@csrf @if($portfolio->exists) @method('PUT') @endif
    <div class="row g-4">
        <div class="col-lg-8">
            <div class="mb-4"><label class="form-label" for="title">Title <span aria-hidden="true">*</span></label><input class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title) }}" maxlength="180" required></div>
            <div class="mb-4"><label class="form-label" for="category">Category <span aria-hidden="true">*</span></label><input class="form-control" id="category" name="category" value="{{ old('category', $portfolio->category) }}" maxlength="100" required placeholder="Contoh: Website, Aplikasi Mobile"></div>
            <div><label class="form-label" for="content">Content <span aria-hidden="true">*</span></label><textarea class="form-control" id="content" name="content" rows="13" required maxlength="50000">{{ old('content', $portfolio->content) }}</textarea><div class="form-text">Teks dengan paragraf. Konten yang sama tampil pada website Indonesia dan Inggris.</div></div>
        </div>
        <div class="col-lg-4">
            <div class="mb-4"><label class="form-label" for="thumbnail">Thumbnail {{ $portfolio->exists ? '' : '*' }}</label>
                @if($portfolio->thumbnail)<img class="thumbnail-preview mb-3" src="{{ asset('storage/'.$portfolio->thumbnail) }}" alt="Thumbnail saat ini">@endif
                <input class="form-control" id="thumbnail" name="thumbnail" type="file" accept="image/jpeg,image/png,image/webp" @required(!$portfolio->exists)><div class="form-text">JPG, PNG, atau WebP, maksimal 2 MB. {{ $portfolio->exists ? 'Kosongkan untuk mempertahankan gambar saat ini.' : '' }}</div>
            </div>
            <div class="mb-4"><label class="form-label" for="status">Status</label><select class="form-select" id="status" name="status" required><option value="draft" @selected(old('status', $portfolio->status) === 'draft')>Draft</option><option value="published" @selected(old('status', $portfolio->status) === 'published')>Published</option></select></div>
            <div><label class="form-label" for="publish_at">Publish at</label><input class="form-control" id="publish_at" name="publish_at" type="datetime-local" value="{{ old('publish_at', $portfolio->publish_at?->format('Y-m-d\TH:i')) }}"><div class="form-text">Zona waktu WITA (UTC+8). Published dengan tanggal mendatang akan terjadwal. Kosongkan untuk publikasi sekarang. Draft tetap disembunyikan.</div></div>
        </div>
    </div>
    <div class="editor-actions"><button class="btn btn-primary" type="submit">Simpan portofolio</button><a class="btn btn-outline-secondary" href="{{ route('admin.portfolios.index') }}">Batal</a></div>
</form>
@endsection
