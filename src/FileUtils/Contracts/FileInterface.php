<?php

namespace Kucil\Utilities\FileUtils\Contracts;

/**
 * @author  Menyong Menying <menyongmenying.main@gmail.com>
 * 
 * @version 0.0.1
 * 
 * 
 * 
 */
interface FileInterface
{
    /**
     * Meneruskan hasil pemeriksaan apakah filepath yang diberikan valid.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $source Nilai filepath yang akan diperiksa.
     *
     * @return ?bool           Hasil pemeriksaan apakah $source ada.
     * 
     * @see    FileTests::testFileExists()
     * 
     * 
     * 
     */
    public static function fileExists(?string $source): ?bool;



    /**
     * Meneruskan isi dari file.
     * 
     * NOTE:
     * Jika nilai yang diberikan dianggap tidak valid, maka akan meneruskan `null`.
     *
     * @param  ?string $source Nilai filepath yang akan diambil.
     *
     * @return ?bool           Nilai $source.
     * 
     * @see    FileTests::testGetFiles()
     * 
     * 
     * 
     */
    public static function getFiles(?string $source): ?string;
}