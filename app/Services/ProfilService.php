<?php

namespace App\Services;

use App\Models\Profil;
use Illuminate\Support\Str;

class ProfilService extends Service
{
    public function search($params = [])
    {
        $profil = Profil::orderBy('id');

        $profil = $this->searchFilter($params, $profil, []);
        return $this->searchResponse($params, $profil);
    }

    public function find($value, $column = 'id')
    {
        return Profil::where($column, $value)->first();
    }

    public function store($params)
    {
        $params = $this->cleanDate($params, ['tanggal_lahir']);
        $params['uuid'] = Str::uuid();
        return Profil::create($params);
    }

    public function update($params, $id)
    {
        $params = $this->cleanDate($params, ['tanggal_lahir']);
        $profil = Profil::find($id);
        if (!empty($profil)) $profil->update($params);
        return $profil;
    }

    public function delete($id)
    {
        $profil = Profil::find($id);
        if (!empty($profil)) {
            try {
                $profil->delete();
                return true;
            } catch (\Throwable $e) {
                return ['error' => 'Delete user failed! This user currently being used'];
            }
        }
        return $profil;
    }

    public function dropdown_jenis_kelamin()
    {
        $result = ["L" => "Laki-Laki", "P" => "Perempuan"];
        return $result;
    }
}