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

    public function getAll(): mixed
    {
        return $this->entity->paginate(15);
    }

    public function getComics(int $id): mixed
    {
        return $this->entity->findOrFail($id);
    }

    public function createNewComics(array $data): mixed
    {
        return $this->entity->create($data);
    }

    public function updateComics(string $identify, array $data)
    {
        $comics = $this->getComics($identify);

        return $comics->update($data);
    }

    public function deleteComics(int $id): mixed
    {
        $comics = $this->getComics($id);

        return $comics->delete();
    }

    /**
     * @param string $string
     * @return array
     */
    public function searchComics(string $string): mixed
    {
        return $this->entity::where('title', 'LIKE', "%{$string}%")
                        ->orWhere('id', 'LIKE', "%{$string}%")
                        ->paginate();

    }
}