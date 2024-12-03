<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;
// use Doctrine\Common\Collections\ArrayCollection;
// use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
// use Doctrine\Common\Collections\ArrayCollection;
// use Doctrine\Common\Collections\Collection;

// #[ORM\Entity()]
// class Category
// {
//     #[ORM\Id]
//     #[ORM\GeneratedValue]
//     #[ORM\Column(type: 'integer')]
//     private $id;

//     #[ORM\Column(type: 'string', length: 255)]
//     private $name;

//     #[ORM\OneToMany(mappedBy: 'category', targetEntity: Product::class)]
//     private $products;

//     public function __construct()
//     {
//         $this->products = new ArrayCollection();
//     }

//     // Getters et setters...
// }
