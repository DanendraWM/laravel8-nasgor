<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class menu extends Model
{
    public function InsertData($data)
    {
        return DB::table('menus')->insert($data);
    }
    public function SelectData()
    {
        return DB::table('menus')->get();
    }
}
