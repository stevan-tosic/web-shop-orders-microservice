<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TWidgetValueTypes
 *
 * @ORM\Table(name="t_widget_value_types")
 * @ORM\Entity
 */
class TWidgetValueTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="validation", type="string", length=255, nullable=true)
     */
    private $validation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="form_field_template", type="string", length=255, nullable=true)
     */
    private $formFieldTemplate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entity_class", type="string", length=255, nullable=true)
     */
    private $entityClass;


}
