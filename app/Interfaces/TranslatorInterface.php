<?php
namespace App\Interfaces;


interface TranslatorInterface
{
  public function translate(string $from_text, string $source_language, string $target_language) :string;
}
