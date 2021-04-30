<?php

it('has translatepage page', function () {
    $response = $this->get('/translate');

    $response->assertStatus(200);
});
