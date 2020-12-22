<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningSteps
 *
 * @ORM\Table(name="t_dunning_steps", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"}), @ORM\UniqueConstraint(name="t_dunning_steps_label_uindex", columns={"label"})}, indexes={@ORM\Index(name="cancellation_status_id", columns={"cancellation_status_id"}), @ORM\Index(name="email_attachment_file_name_translation_id", columns={"email_attachment_file_name_translation_id"}), @ORM\Index(name="email_subject_translation_id", columns={"email_subject_translation_id"}), @ORM\Index(name="email_text_translation_id", columns={"email_text_translation_id"}), @ORM\Index(name="email_title_translation_id", columns={"email_title_translation_id"}), @ORM\Index(name="pdf_post_table_text_translation_id", columns={"pdf_post_table_text_translation_id"}), @ORM\Index(name="pdf_pre_table_text_translation_id", columns={"pdf_pre_table_text_translation_id"}), @ORM\Index(name="pdf_title_translation_id", columns={"pdf_title_translation_id"}), @ORM\Index(name="sender_translation_id", columns={"sender_translation_id"}), @ORM\Index(name="target_billing_status_id", columns={"target_billing_status_id"})})
 * @ORM\Entity
 */
class TDunningSteps
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_status_days", type="integer", nullable=true)
     */
    private $billingStatusDays = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="deactivate_lines", type="boolean", nullable=true)
     */
    private $deactivateLines = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="auto_run", type="boolean", nullable=true)
     */
    private $autoRun = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="belong_to_dunning", type="boolean", nullable=true, options={"default"="1"})
     */
    private $belongToDunning = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_email_with_attachment", type="boolean", nullable=true)
     */
    private $isEmailWithAttachment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false)
     */
    private $priority = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=32, nullable=true)
     */
    private $label;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_using_receipts", type="boolean", nullable=true)
     */
    private $isUsingReceipts = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_adding_articles", type="boolean", nullable=true)
     */
    private $isAddingArticles = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_removing_articles", type="boolean", nullable=true)
     */
    private $isRemovingArticles = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="order_related", type="boolean", nullable=true)
     */
    private $orderRelated = '0';

    /**
     * @var \TBillingStatus
     *
     * @ORM\ManyToOne(targetEntity="TBillingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_billing_status_id", referencedColumnName="ID")
     * })
     */
    private $targetBillingStatus;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sender_translation_id", referencedColumnName="id")
     * })
     */
    private $senderTranslation;

    /**
     * @var \TCancellationStatus
     *
     * @ORM\ManyToOne(targetEntity="TCancellationStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cancellation_status_id", referencedColumnName="id")
     * })
     */
    private $cancellationStatus;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_subject_translation_id", referencedColumnName="id")
     * })
     */
    private $emailSubjectTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_title_translation_id", referencedColumnName="id")
     * })
     */
    private $emailTitleTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_text_translation_id", referencedColumnName="id")
     * })
     */
    private $emailTextTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="email_attachment_file_name_translation_id", referencedColumnName="id")
     * })
     */
    private $emailAttachmentFileNameTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdf_pre_table_text_translation_id", referencedColumnName="id")
     * })
     */
    private $pdfPreTableTextTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdf_post_table_text_translation_id", referencedColumnName="id")
     * })
     */
    private $pdfPostTableTextTranslation;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdf_title_translation_id", referencedColumnName="id")
     * })
     */
    private $pdfTitleTranslation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TBillingStatus", inversedBy="step")
     * @ORM\JoinTable(name="t_dunning_step_billing_status_affected",
     *   joinColumns={
     *     @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="billing_status_id", referencedColumnName="ID")
     *   }
     * )
     */
    private $billingStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TCorrespondenceTypes", inversedBy="step")
     * @ORM\JoinTable(name="t_dunning_step_to_correspondence_type",
     *   joinColumns={
     *     @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="correspondence_type_id", referencedColumnName="id")
     *   }
     * )
     */
    private $correspondenceType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TReceipts", inversedBy="step")
     * @ORM\JoinTable(name="t_dunning_step_to_receipt",
     *   joinColumns={
     *     @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="receipt_id", referencedColumnName="id")
     *   }
     * )
     */
    private $receipt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TDunningTypes", inversedBy="step")
     * @ORM\JoinTable(name="t_dunning_step_to_type",
     *   joinColumns={
     *     @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="dunning_type_id", referencedColumnName="id")
     *   }
     * )
     */
    private $dunningType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->billingStatus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->correspondenceType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->receipt = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dunningType = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
