<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $query = Portfolio::query()->latest();
        if ($search = mb_substr(trim((string) $request->query('q')), 0, 100)) {
            $query->where(fn ($query) => $query->where('title', 'like', '%'.$search.'%')->orWhere('category', 'like', '%'.$search.'%'));
        }
        if (in_array($request->query('status'), ['draft', 'published'])) {
            $query->where('status', $request->query('status'));
        }

        return view('admin.portfolios.index', ['portfolios' => $query->paginate(12)->withQueryString()]);
    }

    public function create()
    {
        return view('admin.portfolios.form', ['portfolio' => new Portfolio(['status' => 'draft'])]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['thumbnail'] = $request->file('thumbnail')->store('portfolios', 'public');
        Portfolio::create($data);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portofolio berhasil ditambahkan.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.form', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $this->validated($request, $portfolio);
        unset($data['thumbnail']);
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('portfolios', 'public');
        }
        $portfolio->update($data);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portofolio berhasil diperbarui.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portofolio dihapus dari daftar. Data dan thumbnail tetap tersimpan.');
    }

    private function validated(Request $request, ?Portfolio $portfolio = null): array
    {
        $data = $request->validate([
            'thumbnail' => [$portfolio ? 'nullable' : 'required', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'title' => ['required', 'string', 'max:180'],
            'category' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:50000'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'publish_at' => ['nullable', 'date_format:Y-m-d\TH:i'],
        ], [
            'required' => ':attribute wajib diisi.', 'max' => ':attribute melebihi batas yang diizinkan.',
            'image' => 'Thumbnail harus berupa gambar.', 'mimes' => 'Thumbnail harus JPG, PNG, atau WebP.',
            'date_format' => 'Waktu publikasi tidak valid.',
        ]);
        if ($data['status'] === 'published' && empty($data['publish_at'])) {
            $data['publish_at'] = now();
        }

        return $data;
    }
}
