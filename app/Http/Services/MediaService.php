<?php
namespace App\Http\Services;


use App\Models\Media;

class MediaService extends BaseService
{
    public function model()
    {
        return Media::class;
    }
}
