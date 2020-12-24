<?php
namespace App\Items;


use TightenCo\Jigsaw\Collection\Collection;
use TightenCo\Jigsaw\Collection\CollectionItem;

class PostItem extends CollectionItem
{
    public function getAllParts($actualPage): Collection
    {
        return $this->collection->filter(function ($post) use($actualPage) {
            return $post->section === $actualPage->section;
        });
    }
}