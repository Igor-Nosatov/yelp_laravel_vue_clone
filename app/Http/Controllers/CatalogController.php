<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\Catalog\CatalogInterface;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $catalogRepository;

    public function __construct(CatalogInterface $catalogRepository)
    {
        $this->catalogRepository = $catalogRepository;
    }
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

}
