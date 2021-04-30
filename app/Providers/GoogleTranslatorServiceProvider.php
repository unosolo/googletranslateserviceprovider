<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GoogleTranslatorServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind(
        'App\Interfaces\TranslatorInterface',
        'App\Providers\GoogleTranslatorServiceProvider'
    );
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}
