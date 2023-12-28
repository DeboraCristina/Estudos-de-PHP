<?php

declare(strict_types=1);

require_once 'HelloWorld.php';
require_once '../Teste.php';

Teste::assertEquals('Hello, World!', helloWorld());
