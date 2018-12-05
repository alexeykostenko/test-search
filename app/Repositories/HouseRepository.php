<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\House;

class HouseRepository
{
    public function getFields()
    {
        return array_merge((new House)->getFillable(), ['price_min', 'price_max']);
    }

    public function search(array $searchParameters)
    {
        $query = House::query();

        foreach ($searchParameters as $column => $searchParameter) {
            if (!$searchParameter) {
                continue;
            }

            if ($column === 'name') {
                $query->where($column, 'like', '%' . $searchParameter . '%');
            } elseif ($column === 'price_min') {
                $query->where('price', '>=', $searchParameter);
            } elseif ($column === 'price_max') {
                $query->where('price', '<=', $searchParameter);
            } else {
                $query->where($column, $searchParameter);
            }
        }

        return $query->get();
    }
}
