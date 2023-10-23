<?php

namespace App\Providers;
use App\Http\Controllers\ContentController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;

class DaftarPasien extends Model
{
    //
    protected $table='daftar_pasien';
    public $timestamp = false;
}
