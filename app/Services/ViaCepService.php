<?php

namespace App\Services;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class ViaCepService
{
    public array $ceps;
    public array $cepsResponse;

    public function __construct(array $ceps)
    {
        $this->ceps = $ceps;
    }

    public function getCep(): JsonResponse
    {
        foreach ($this->ceps as $cep) {
            $response = Http::acceptJson()->get("https://viacep.com.br/ws/{$cep}/json");

            if ($response->failed()) {
                return response()->json(['message' => "O CEP {$cep} não foi encontrado"], 404);
            }

            $this->cepsResponse[] = $response->json();
        }
        return response()->json($this->cepsResponse);
    }
}
