<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FullTest extends TestCase
{

	public function testExistsGitignore(): void
    {
        $this->assertTrue(
            file_exists('.gitignore')
        );
    }
	
	public function testExistsDotenv(): void
    {
        $this->assertTrue(
            file_exists('.env')
        );
    }
}
