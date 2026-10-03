<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:5|max:255',
            'body' => 'required|min:10',
            'img' => 'nullable|image|max:2048',
        ]);

        $img = null;
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $img,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo creato con successo!');
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        // Controllo di sicurezza: se l'utente loggato non è il proprietario, blocca l'accesso (403)
        if ($article->user_id !== Auth::id()) {
            abort(403, 'Non sei autorizzato a modificare questo articolo.');
        }

        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        // Controllo di sicurezza anche in fase di aggiornamento (fondamentale)
        if ($article->user_id !== Auth::id()) {
            abort(403, 'Non sei autorizzato a modificare questo articolo.');
        }

        $request->validate([
            'title' => 'required|min:5|max:255',
            'subtitle' => 'required|min:5|max:255',
            'body' => 'required|min:10',
            'img' => 'nullable|image|max:2048',
        ]);

        $img = $article->img;
        if ($request->hasFile('img')) {
            $img = $request->file('img')->store('img', 'public');
        }

        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $img,
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo modificato con successo!');
    }

    public function destroy(Article $article)
    {
        // Controllo di sicurezza anche per l'eliminazione (così non possono cancellare i post altrui)
        if ($article->user_id !== Auth::id()) {
            abort(403, 'Non sei autorizzato a eliminare questo articolo.');
        }

        $article->delete();

        return redirect()->route('article.index')->with('success', 'Articolo eliminato con successo!');
    }
}