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
        # DATA
        $result = null;


        # CODE
        if ($source === null) {
            return $result;
        }        

        $result = file_exists($source);

        return $result;
    }



    /**
     * @see FileTest::testGetFiles()
     * 
     * 
     * 
     */
    public static function getFiles(?string $source): ?string
    {
        # DATA
        $result = null;


        # CODE
        if ($source === null || !self::fileExists($source)) {
            return $result;
        }

        $result = file_get_contents($source);
        
        return $result;
    }
}
