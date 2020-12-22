<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactformSubjects
 *
 * @ORM\Table(name="t_contactform_subjects")
 * @ORM\Entity
 */
class ContactformSubjects
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
     * @ORM\Column(name="subject_0", type="string", length=50, nullable=true)
     */
    private $subject0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject_1", type="string", length=50, nullable=true)
     */
    private $subject1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject_2", type="string", length=50, nullable=true)
     */
    private $subject2;


}
