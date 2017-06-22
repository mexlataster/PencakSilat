<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class NormalImageGalleryController extends Controller
{
  public function index()
  {
    $images = ImageGallery::get();
    return view('normalgallery', compact('images'));
  }
}
