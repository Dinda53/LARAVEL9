<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function index()
    {
        
        return view('siswa.index',[
            'siswa' => Siswa::get(),
        ]);
    }
}
