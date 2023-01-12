<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
        return Customer::orderBy('name')
            ->where('is_active', 1)
            ->with('user')
            ->get()
            ->map->format();
    }

    public function findById($id)
    {
        return Customer::where("id", $id)
            ->where('is_active', 1)
            ->with('user')
            ->firstOrFail()->format();
    }
}
