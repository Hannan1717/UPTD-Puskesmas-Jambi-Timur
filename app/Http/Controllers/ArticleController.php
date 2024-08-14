<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DOMDocument;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all articles from the database
        $articles = Article::all();

        // Pass the articles to the view
        return view('pages.article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);
        $content = $request->content;

        // Gunakan libxml untuk menangani kesalahan
        libxml_use_internal_errors(true);

        $dom = new DOMDocument();
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $content = $dom->saveHTML();

        // Tangani kesalahan jika diperlukan
        $errors = libxml_get_errors();
        if (!empty($errors)) {
            foreach ($errors as $error) {
                // Log atau tampilkan kesalahan sesuai kebutuhan
                echo "LibXML Error: {$error->message}\n";
            }
            libxml_clear_errors();
        }

        Article::create([
            'creator_id' => Auth::id(),
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $content
        ]);

        return redirect()->route('article.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.article.show', compact('article'));
    }

    public function showGuest(string $slug)
    {
        $articles = Article::latest()->take(3)->get();

        foreach ($articles as $article) {
            $article->image = $this->extractImageFromHtml($article->content);
            $article->excerpt = $this->extractTextFromHtml($article->content);

            // Memformat tanggal publikasi artikel
            $article->formatted_date = Carbon::parse($article->created_at)
                ->locale('id')
                ->translatedFormat('l, j F Y | H:i');
        }

        $article = Article::with('user')->where('slug', $slug)->firstOrFail();
        $article->formatted_date = Carbon::parse($article->created_at)
            ->setTimezone('Asia/Jakarta') // Set timezone ke Asia/Jakarta
            ->locale('id')
            ->translatedFormat('l, j F Y | H:i');

        // Ambil nama user
        $username = $article->user->name ?? 'Unknown';
        return view('pages.guest.show', compact('article', 'username', 'articles'));
    }

    private function extractImageFromHtml($htmlContent)
    {
        $doc = new DOMDocument();
        @$doc->loadHTML($htmlContent);

        foreach ($doc->getElementsByTagName('img') as $img) {
            return $img->getAttribute('src');
        }

        return null; // Jika tidak ada gambar
    }

    private function extractTextFromHtml($htmlContent)
    {
        $doc = new DOMDocument();
        @$doc->loadHTML($htmlContent);

        $textContent = '';
        foreach ($doc->getElementsByTagName('p') as $paragraph) {
            $textContent .= $paragraph->textContent . ' ';
            break; // Hanya mengambil paragraf pertama
        }

        return trim($textContent);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('pages.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:255',
            'summary' => 'string',
            'content' => 'required',
        ]);

        $content = $request->content;

        // Gunakan libxml untuk menangani kesalahan
        libxml_use_internal_errors(true);

        $dom = new \DOMDocument();
        $dom->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            if (strpos($src, 'data:image') !== false) {
                list($type, $data) = explode(';', $src);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = "/upload/" . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }

        $content = $dom->saveHTML();

        // Tangani kesalahan jika diperlukan
        $errors = libxml_get_errors();
        if (!empty($errors)) {
            foreach ($errors as $error) {
                // Log atau tampilkan kesalahan sesuai kebutuhan
                echo "LibXML Error: {$error->message}\n";
            }
            libxml_clear_errors();
        }

        $article = Article::findOrFail($id);
        $article->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'content' => $content
        ]);

        return redirect()->route('article.index')->with('success', 'Article updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->delete();
        return redirect()->route('article.index');
    }
}
