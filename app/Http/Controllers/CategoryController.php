<?php

namespace App\Http\Controllers;

use App\Models\Category; // Pastikan Anda mengimpor model Category
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar kategori beserta artikel terkait.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil semua kategori dengan artikel terkait menggunakan eager loading
        $categories = Category::with('posts')->get();

        // Mengembalikan view category.index dengan data kategori
        return view('category.index', compact('categories'));
    }

    // Tambahkan metode lain sesuai kebutuhan, seperti show, create, store, dll.
}
