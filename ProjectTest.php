<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class ProjectTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertDirectoryExists('..\Final-Project');
    }
}
