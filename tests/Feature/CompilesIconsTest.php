<?php

declare(strict_types=1);

test('it compiles a single icon anonymous component', function ($icon, $path) {
    expect(svg($icon)->toHtml())
        ->toBe(file_get_contents($path))
        ->toContain('class="tallboicon '.$icon.'"');
})->with('icons');

test('it can add classes to icons', function ($icon) {
    expect(svg($icon, 'text-red-500')->toHtml())
        ->toStartWith('<svg class="text-red-500" xmlns="http://www.w3.org/2000/svg"');
})->with('icons');

test('it can add properties to icons', function ($icon) {
    expect(svg($icon, ['src' => $icon])->toHtml())
        ->toStartWith('<svg src="'.$icon.'" xmlns="http://www.w3.org/2000/svg"');
})->with('icons');
