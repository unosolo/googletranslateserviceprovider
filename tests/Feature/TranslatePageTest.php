<?php

it('has translate page', function () {
    $response = $this->get('/translate')->assertSee('Translation Page');

    $response->assertStatus(200);
});

it('shows requested text', function () {
  $response = $this->get('/translate?t=Hello World')->assertSee('Hello World');

  $response->assertStatus(200);
});

it('shows translated text', function () {
  $response = $this->get('/translate?t=Hello World')->assertSee('Hola Mundo');

  $response->assertStatus(200);
});
