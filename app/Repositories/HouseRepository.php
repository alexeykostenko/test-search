<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\House;

class HouseRepository
{
    public function search(array $request)
    {
        return House::all();
    }
}
