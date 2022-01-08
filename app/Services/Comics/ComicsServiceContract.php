<?php

namespace App\Services\Comics;

/**
 * Interface ComicsService
 * @package App\Service
 */
interface ComicsServiceContract
{
    /**
     * @return mixed
     */
    public function getAllComics();

    /**
     * @param int $id
     * @return array
     */
    public function createNewComics(array $data);

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function getComics(string $identify);

    /**
     * @param int $id
     * @return bool
     */
    public function updateComics(string $identify, array $data);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteComics(string $identify);

    /**
     * @param int $id
     * @return bool
     */
    public function searchComics(string $search);
}