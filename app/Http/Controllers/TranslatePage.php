<?php

namespace App\Http\Controllers;

use App\Interfaces\TranslatorInterface;
use App\Services\GoogleTranslatorService;
use Illuminate\Http\Request;

class TranslatePage extends Controller
{
  public function __invoke(Request $request, GoogleTranslatorService $translator)
  {
    $text = $request->query('t', '');
    $source_language = $request->query('src', '');
    $target_language = $request->query('trg', '');
    return view('pages.translate', [
      'from_text' => $text,
      'into_text' => $translator->translate($text, $source_language, $target_language),
      'source_language' => $source_language,
      'target_language' => $target_language,
    ]);
  }
}
