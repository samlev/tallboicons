<?php

declare(strict_types=1);

dataset('icons', array_merge(
    ...array_map(
        fn ($filename) => [
            basename($filename, '.svg') => [
                'tallboicon-'.basename($filename, '.svg'),
                realpath($filename),
            ],
        ],
        glob(__DIR__.'/../../resources/svg/*.svg')
    )
));
