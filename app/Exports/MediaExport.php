<?php

namespace App\Exports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;

class MediaExport implements FromCollection, ShouldQueue
{
    use Exportable;
    private $media;

    /**
     * MediaExport constructor.
     * @param $media
     */
    public function __construct($media)
    {
        $this->media = $media;
    }

    /**
    * @return Collection
    */
    public function collection()
    {
        $data = Storage::get($this->media->file);
        $collection = collect(json_decode($data));

        return $collection;
    }
}
