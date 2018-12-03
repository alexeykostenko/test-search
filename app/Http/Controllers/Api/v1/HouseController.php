<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Repositories\HouseRepository;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    private $houseRepository;

    public function __construct(HouseRepository $houseRepository)
    {
        $this->houseRepository = $houseRepository;
    }

    public function search(Request $request)
    {
        $houseRepositoryFields = $this->houseRepository->getFields();

        $response = [
            'status' => 'success',
            'houses' => $this->houseRepository->search($request->only($houseRepositoryFields))
        ];

        return $response;
    }
}
