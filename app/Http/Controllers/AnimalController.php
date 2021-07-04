<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnimalResource;
use App\Models\Animal;
use App\Repositories\AnimalRepository;
use App\Support\PaginationBuilder;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    protected $repository;
    protected $resource;
    private $perPage = 2;

    public function __construct()
    {
        $this->model = new Animal();
        $this->repository = new AnimalRepository();
//        $this->farm = new Farm();
    }

    public function index()
    {
        $title = 'herd management';//manejo de rebanho
        return view('animals.index', compact('title'));
    }

    public function create()
    {
        $title = 'New animal';
        $description = 'Cadastre o animal com os dados a baixo';
        return view('animals.create', compact('title', 'description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pagination()
    {
        dd('pagination');
        $pagination = new PaginationBuilder();
        return $pagination
            ->repository($this->repository)
            ->criteria([  new Where('farm_id', current_user()->farm_id)])
            ->resource(AnimalResource::class);
    }
}
