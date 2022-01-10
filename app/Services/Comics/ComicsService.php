<?php

namespace App\Services\Comics;

use App\Repositories\Comics\ComicsRepository;
use App\Services\Comics\ComicsServiceContract;

class ComicsService implements ComicsServiceContract
{
    protected $repository;

    public function __construct(ComicsRepository $comicsRepository)
    {
        $this->repository = $comicsRepository;
    }

    /**
     * get all the comics
     * 
     * @return mixed
     */
    public function getAllComics()
    {
        return $this->repository->getAll();
    }

    /**
     * create a comics
     * 
     * @param array $data
     * @return mixed
     */
    public function createNewComics(array $data)
    {
        return $this->repository->createNewComics($data);
    }

    /**
     * get the comics for id
     * 
     * @param string $identify
     * @return mixed
     */
    public function getComics(string $identify)
    {
        return $this->repository->getComics($identify);
    }

    /**
     * update a comics
     *
     * @param string $identify
     * @param array $data
     * @return mixed
     */    
    public function updateComics(string $identify, array $data)
    {
        return $this->repository->updateComics($identify, $data);
    }

    /**
     * delete a comics
     * 
     * @param string $identify
     * @return mixed
     */
    public function deleteComics(string $identify)
    {
        return $this->repository->deleteComics($identify);
    }

    /**
     * searches the comics for a specific term
     * 
     * @param int $id
     * @return bool
     */
    public function searchComics(string $search)
    {
        return $this->repository->searchComics($search);
    }
}
