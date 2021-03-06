<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Omed\Laravel\ORM\Tests\Fixtures\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TestAnnotation.
 *
 * @ORM\Entity
 */
class TestAnnotation
{
    /**
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Id
     *
     * @var string
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return TestAnnotation
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return TestAnnotation
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
