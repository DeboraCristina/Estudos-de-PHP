<?php

declare(strict_types=1);

require_once 'Lasagna.php';
require_once '../Teste.php';

/** @task_id 1 */
$lasagna = new Lasagna();
Teste::assertEquals(40, $lasagna->expectedCookTime());

/** @task_id 2 */
$lasagna = new Lasagna();
Teste::assertEquals(20, $lasagna->remainingCookTime(20));

/** @task_id 2 */
$lasagna = new Lasagna();
Teste::assertEquals(10, $lasagna->remainingCookTime(30));

/** @task_id 3 */
$lasagna = new Lasagna();
Teste::assertEquals(14, $lasagna->totalPreparationTime(7));

/** @task_id 4 */
$lasagna = new Lasagna();
Teste::assertEquals(21, $lasagna->totalElapsedTime(4, 13));

/** @task_id 5 */
$lasagna = new Lasagna();
Teste::assertEquals("Ding!", $lasagna->alarm());

$lasagna = new Lasagna();
Teste::assertFalse("Dong!", $lasagna->alarm());
