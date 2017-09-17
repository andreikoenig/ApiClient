<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends ClientController
{
    public function getAllAlbums() {
        $albums = $this->fetchAllAlbums();

        return view('albums.all-albums', ['albums' => $albums]);
    }
}

