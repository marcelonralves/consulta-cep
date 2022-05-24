<?php

namespace App\Http\Controllers;

use App\Http\Requests\CepRequest;
use App\Services\ViaCepService;
use Illuminate\Http\JsonResponse;

class CepController extends Controller
{
    public function index(CepRequest $request): JsonResponse
    {
        $checkCEP = new ViaCepService($request->cep);

        return $checkCEP->getCep();
    }
}
