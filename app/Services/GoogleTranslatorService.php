<?php

namespace App\Services;

use App\Interfaces\TranslatorInterface;

class GoogleTranslatorService implements TranslatorInterface
{
  public function translate(string $from_text, string $source_language, string $target_language) : string
  {
    return 'Hola Mundo';
  }
}
