<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "email" => $this->email,
            "foto" => $this->foto,
            "nohp" => $this->nohp,
            "branch" => $this->branch,
            "jenis_kelamin" => $this->jenis_kelamin,
            "tgl_lahir" => $this->tgl_lahir,
            "tempat_tinggal" => $this->tempat_tinggal,
            "kampus" => $this->kampus,
            "jurusan" => $this->jurusan,
            "semester" => $this->semester,
            "hobi" => $this->hobi,
            "instagram" => $this->instagram,
            "status" => $this->status,
            "point" => $this->challenges->sum('point')
        ];
    }
}
