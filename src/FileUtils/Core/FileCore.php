<?php

namespace Kucil\Utilities\FileUtils\Core;

use Kucil\Utilities\FileUtils\Contracts\FileInterface;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
abstract class FileCore implements FileInterface
{
    /**
     * @see FileTest::testFileExists()
     * 
     * 
     * 
     */
    public static function fileExists(?string $source = null): ?bool
    {
        if ($source === null) {
            return null;
        }        

        return file_exists($source);
    }



    /**
     * @see FileTest::testGetFiles()
     * 
     * 
     * 
     */
    public static function getFiles(?string $source): ?string
    {
        if ($source === null || !self::fileExists($source)) {
            return null;
        }

        return file_get_contents($source);
    }
}
