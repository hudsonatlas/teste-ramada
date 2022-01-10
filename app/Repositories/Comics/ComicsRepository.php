<?php

namespace App\Repositories\Comics;

use App\Models\Comics;

class ComicsRepository implements ComicsRepositoryContract
{
    protected $entity;

    public function __construct(Comics $comics)
    {
        $this->entity = $comics;
    }

    /**
     * get all the comics
     * @return mixed
     */
    public function getAll(): mixed
    {
        return $this->entity->paginate(15);
    }

    /**
     * get all the comics
     * 
     * @param int $id
     * @return mixed
     */
    public function getComics(int $id): mixed
    {
        return $this->entity->findOrFail($id);
    }

    /**
     * create a comics
     * 
     * @param array $data
     * @return bool
     */
    public function createNewComics(array $data): mixed
    {
        return $this->entity->create($data);
    }

    /**
     * update a comics
     *
     * @param string $identify
     * @param array $data
     * @return mixed
     */
    public function updateComics(string $identify, array $data): mixed
    {
        $comics = $this->getComics($identify);

        return $comics->update($data);
    }

    /**
     * delete a comics
     *
     * @param int $id
     * @return mixed
     */
    public function deleteComics(int $id): mixed
    {
        $comics = $this->getComics($id);

        return $comics->delete();
    }

    /**
     * searches the comics for a specific term
     * @param string $string
     * @return mixed
     */
    public function searchComics(string $string): mixed
    {
        return $this->entity::where('title', 'LIKE', "%{$string}%")
                        ->orWhere('id', 'LIKE', "%{$string}%")
                        ->paginate();

    }
}