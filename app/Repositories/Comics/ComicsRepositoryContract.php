<?php

namespace App\Repositories\Comics;

/**
 * Interface ComicsRepository
 * @package App\Repositories
 */
interface ComicsRepositoryContract
{
    /**
     * @return armixedray
     */
    public function getAll(): mixed;

    /**
     * @param int $id
     * @return array
     */
    public function getComics(int $id): mixed;

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function createNewComics(array $data): mixed;

     /**
     * @param string $identify
     * @param array $data
     * 
     * @return bool
     */
    public function updateComics(string $identify, array $data);

    /**
     * @param int $id
     * @return bool
     */
    public function deleteComics(int $id): mixed;

    /**
     * @param string $string
     * @param array $searchFields
     * @param int $limit
     * @param array $orderBy
     * @return array
     */
    public function searchComics(string $string): mixed;
}