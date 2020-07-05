<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    public static function simpan($data)
    {
        $newarticle = DB::table('articles')->insert($data);
        return $newArticle;
    }

    public static function getData()
    {
        $data = DB::table('articles')->get();
        return $data;
    }

    public static function getDataById($id)
    {
        $data = DB::table('articles')->where('id', $id)->get();
        return $data;
    }

    public static function updateData($data, $id)
    {
        $update = DB::table('articles')->where('id', $id)->update($data);
    }

    public static function hapus($id)
    {
        $data = DB::table('articles')->where('id', $id)->delete();
        return $data;
    }
}
