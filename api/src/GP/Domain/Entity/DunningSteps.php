<?php

namespace App\GP\Domain\Entity;



/**
 * DunningSteps
 */
class DunningSteps
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int|null
     */
    private $billingStatusDays = '0';

    /**
     * @var bool|null
     */
    private $deactivateLines = '0';

    /**
     * @var bool|null
     */
    private $autoRun = '0';

    /**
     * @var bool|null
     */
    private $active = '0';

    /**
     * @var bool|null
     */
    private $belongToDunning = true;

    /**
     * @var bool|null
     */
    private $isEmailWithAttachment = '0';

    /**
     * @var int
     */
    private $priority = '0';

    /**
     * @var string|null
     */
    private $label;

    /**
     * @var bool|null
     */
    private $isUsingReceipts = '0';

    /**
     * @var bool|null
     */
    private $isAddingArticles = '0';

    /**
     * @var bool|null
     */
    private $isRemovingArticles = '0';

    /**
     * @var bool|null
     */
    private $orderRelated = '0';

    private $targetBillingStatus;

    /**
     * @var \TI18n
     *
               *   @ORM\JoinColumn(name="sender_translation_id", referencedColumnName="id")
     * })
     */
    private $senderTranslation;

    private $cancellationStatus;

    private $emailSubjectTranslation;

    /**
     * @var \TI18n
     *
               *   @ORM\JoinColumn(name="email_title_translation_id", referencedColumnName="id")
     * })
     */
    private $emailTitleTranslation;

    private $emailTextTranslation;

    /**
     * @var \TI18n
     *
               *   @ORM\JoinColumn(name="email_attachment_file_name_translation_id", referencedColumnName="id")
     * })
     */
    private $emailAttachmentFileNameTranslation;

    private $pdfPreTableTextTranslation;

    private $pdfPostTableTextTranslation;

    private $pdfTitleTranslation;

    private $billingStatus;

    private $correspondenceType;

    private $receipt;

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
