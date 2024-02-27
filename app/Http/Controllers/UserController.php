<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function datatable(UserDataTable $dataTable)
    {
        $query = User::query()->where('column1', '=', 'some_value');
        return $dataTable->ajax();
    }
}
