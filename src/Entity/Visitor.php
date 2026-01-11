<?php

namespace App\Entity;

use App\Repository\VisitorRepository;
use Doctrine\ORM\Mapping as ORM;
use Marbobley\EntitiesVisitorBundle\Model\VisitorInformation;

#[ORM\Entity(repositoryClass: VisitorRepository::class)]
class Visitor extends VisitorInformation
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
