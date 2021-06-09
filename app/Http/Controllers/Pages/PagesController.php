<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Count;
use App\Http\Requests\CountRequest;

class PagesController extends Controller
{
    public function index()
    {
        $votes = Vote::get();
        
        return view('pages.index', compact('votes'));
    }

    public function vote(CountRequest $request)
    {
        try {
            $count = new Count($request->all());
            $count->save();
            $opcao = Vote::find($request->vote_id);
            $opcao->qtd++;
            $opcao->save();

            return redirect()->route('pages.index')->with('success', 'Voto computado com sucesso!');
        } catch(\Exception $e) {
            logger()->error($e->getMessage());

            return redirect()->back()->with('error', 'Corrija os erros para votar');
        }
    }
}
