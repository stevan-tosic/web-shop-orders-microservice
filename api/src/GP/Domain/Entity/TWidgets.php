<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TWidgets
 *
 * @ORM\Table(name="t_widgets", indexes={@ORM\Index(name="desktop_template_id_index", columns={"desktop_template_id"}), @ORM\Index(name="mobile_template_id_index", columns={"mobile_template_id"}), @ORM\Index(name="t_widgets_parent_id", columns={"parent_id"}), @ORM\Index(name="widget_page_version", columns={"page_version_id"}), @ORM\Index(name="widget_sub_type_id_index", columns={"widget_sub_type_id"}), @ORM\Index(name="widget_type_id_index", columns={"widget_type_id"})})
 * @ORM\Entity
 */
class TWidgets
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
     * @var int
     *
     * @ORM\Column(name="page_version_id", type="integer", nullable=false)
     */
    private $pageVersionId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_dynamic", type="boolean", nullable=true)
     */
    private $isDynamic;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=false)
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=false)
     */
    private $lastChangeUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var int
     *
     * @ORM\Column(name="widget_type_id", type="integer", nullable=false)
     */
    private $widgetTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_template_id", type="integer", nullable=true)
     */
    private $widgetTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_sub_type_id", type="integer", nullable=true)
     */
    private $widgetSubTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="desktop_template_id", type="integer", nullable=true)
     */
    private $desktopTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobile_template_id", type="integer", nullable=true)
     */
    private $mobileTemplateId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_desktop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_mobile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnMobile = true;


}
