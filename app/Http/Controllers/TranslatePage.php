<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslatePage extends Controller
{
  public function __invoke(Request $request)
  {
    $text = $request->query('t', '');
    $source_language = $request->query('src', '');
    $target_language = $request->query('trg', '');
    return view('pages.translate', [
      'text' => $text,
      'source_language' => $source_language,
      'target_language' => $target_language,
    ]);
  }
}
