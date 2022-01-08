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

    public function getAllComics()
    {
        return $this->repository->getAll();
    }

    public function createNewComics(array $data)
    {
        return $this->repository->createNewComics($data);
    }

    public function getComics(string $identify)
    {
        return $this->repository->getComics($identify);
    }

    public function updateComics(string $identify, array $data)
    {
        return $this->repository->updateComics($identify, $data);
    }

    public function deleteComics(string $identify)
    {
        return $this->repository->deleteComics($identify);
    }

    public function searchComics(string $search)
    {
        return $this->repository->searchComics($search);
    }
}
