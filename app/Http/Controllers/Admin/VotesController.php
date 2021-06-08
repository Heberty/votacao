<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Http\Requests\VoteRequest;

class VotesController extends Controller
{
    public function index()
    {
        $votes = Vote::paginate(10);

        return view('admin.votes.index', compact('votes'));
    }

    public function create()
    {
        return view('admin.votes.create');
    }

    public function store(VoteRequest $request)
    {
        try {
            $vote = new Vote($request->all());

            $vote->save();

            return redirect()->route('admin.votes.index')->with('success', 'Opção cadastrada com sucesso!');

        } catch(\Exception $e) {
            logger()->error($e->getMessage());

            return redirect()->back()->with('error', 'Erro ao cadastrar opção!');
        }
    }

    public function edit(Vote $vote)
    {
        return view('admin.votes.edit', compact('vote'));
    }

    public function update(VoteRequest $request, Vote $vote)
    {
        try {

            $vote->update($request->all());
    
            $vote->save();
    
            return redirect()->route('admin.votes.index')->with('success', 'Opção atualizada!');
        } catch(\Exception $e) {
            logger()->error($e->getMessage());

            return redrect()->back()->with('error', 'Erro ao atualizar a opção');
        }
    }

    public function destroy(Vote $vote)
    {
        try {
            $vote->delete();

            return redirect()->route('admin.votes.index')->with('success', 'Opção deletada com sucesso!');
        } catch(\Exception $e) {
            logger()->error($e->getMessage());

            return redirect()->back()->with('error', 'Erro ao deletar a opção');
        }
    }
}
