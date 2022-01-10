<?php

namespace App\Services\Comics;

/**
 * Interface ComicsService
 * @package App\Service
 */
interface ComicsServiceContract
{
    /**
     * get all the comics
     * 
     * @return mixed
     */
    public function getAllComics();

    /**
     * create a comics
     * 
     * @param array $data
     * @return mixed
     */
    public function createNewComics(array $data);

    /**
     * get the comics for id
     * 
     * @param string $identify
     * @return mixed
     */
    public function getComics(string $identify);

    /**
     * update a comics
     *
     * @param string $identify
     * @param array $data
     * @return mixed
     */
    public function updateComics(string $identify, array $data);

    /**
     * delete a comics
     * 
     * @param string $identify
     * @return mixed
     */
    public function deleteComics(string $identify);

    /**
     * searches the comics for a specific term
     * 
     * @param int $id
     * @return bool
     */
    public function searchComics(string $search);
}