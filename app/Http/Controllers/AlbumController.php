<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends ClientController
{
    public function getAllAlbums() {
        $albums = $this->fetchAllAlbums();

        return view('albums.all-albums', ['albums' => $albums]);
    }

    public function getAlbumId() {
        return view('albums.input-album');
    }

    public function getAnAlbum(Request $request) {
        $this->validate($request,['albumId' => 'required|numeric']);

        $albumId = $request->get('albumId');
        $album = $this->fetchAnAlbum($albumId);

        return view('albums.single-album', ['album' => $album]);
    }
}

