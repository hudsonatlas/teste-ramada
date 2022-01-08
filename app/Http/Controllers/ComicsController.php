<?php

namespace App\Http\Controllers;

use App\Services\Comics\ComicsService;
use Illuminate\Http\Request;
use App\Http\Requests\ComicsRequest;

class ComicsController extends Controller
{
    protected $comicsService;

    public function __construct(ComicsService $comicsService)
    {
        $this->comicsService = $comicsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\mixed
     */
    public function index()
    {
        $comics = $this->comicsService->getAllComics();

        return view('comics.index', compact('comics'))
            ->with('i', (request()->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicsRequest $request)
    {
        $this->comicsService->createNewComics($request->validated());

        return redirect()->route('comics.index')
            ->with('success', 'Quadrinhos criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $comics = $this->comicsService->getComics($id);

        if($comics) {
            return view('comics.show', compact('comics'));
        }

        $erroMessanger = 'Esse quadrinho não existe';

        return view('comics.error', compact('erroMessanger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $comics = $this->comicsService->getComics($id);

        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ComicsRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicsRequest $request, $id)
    {
        $this->comicsService->updateComics($id, $request->validated());

        return redirect()->route('comics.show', $id)
            ->with('success', 'Quadrinhos Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->comicsService->deleteComics($id);

        return redirect()->route('comics.index')
            ->with('success', 'Quadrinhos excluido com sucesso');
    }

    public function search(Request $request)
    {
        $comics = $this->comicsService->searchComics($request->search);
        return view('comics.search', compact('comics'));
    }
}
