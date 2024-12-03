<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
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

// #[ORM\Entity()]
// class Product
// {
//     #[ORM\Id]
//     #[ORM\GeneratedValue]
//     #[ORM\Column(type: 'integer')]
//     private $id;

//     #[ORM\Column(type: 'string', length: 255)]
//     private $name;

//     #[ORM\Column(type: 'float')]
//     private $price;

//     #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'products')]
//     #[ORM\JoinColumn(nullable: false)]
//     private $category;

//     // Getters et setters...
// }
