<?php

namespace App\Http\Controllers;

use App\Exports\MediaExport;
use App\Http\Requests\MediaRequest;
use App\Http\Services\MediaService;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * @var MediaService
     */
    private $mediaService;

    /**
     * MediaController constructor.
     * @param MediaService $mediaService
     */
    public function __construct(MediaService $mediaService)
    {
        $this->mediaService = $mediaService;
    }

    private $view = 'media.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = $this->mediaService->all();
        return view($this->view.'index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->view.'create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MediaRequest $request)
    {
        $storeData = $request->all();
        $storeData['file'] = Storage::putFile('medias', $request->file(['file']));
        $this->mediaService->create($storeData);
        return redirect()->route('media');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    /**
     * @param Media $media
     * @return mixed
     */
    public function export(Media $media) {
        (new MediaExport($media))->queue('media.xlsx');

        return back()->withSuccess('Export started!');
    }
}
