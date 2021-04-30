<?php
namespace App\Interfaces;


interface TranslatorInterface
{
  public function translate(string $text, string $source_language, string $target_language);
}
