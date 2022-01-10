<?php

namespace App\Repositories\Comics;

/**
 * Interface ComicsRepository
 * @package App\Repositories
 */
interface ComicsRepositoryContract
{
    /**
     * get all the comics
     * @return mixed
     */
    public function getAll(): mixed;

    /**
     * get the comics for id
     * 
     * @param int $id
     * @return mixed
     */
    public function getComics(int $id): mixed;

    /**
     * create a comics
     * 
     * @param array $data
     * @return mixed
     */
    public function createNewComics(array $data): mixed;

    /**
     * update a comics
     *
     * @param string $identify
     * @param array $data
     * @return mixed
     */
    public function updateComics(string $identify, array $data): mixed;

    /**
     * delete a comics
     *
     * @param int $id
     * @return mixed
     */
    public function deleteComics(int $id): mixed;

    /**
     * searches the comics for a specific term
     * 
     * @param string $string
     * @return mixed
     */
    public function searchComics(string $string): mixed;
}