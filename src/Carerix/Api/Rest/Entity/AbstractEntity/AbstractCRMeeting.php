<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttachmentData;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREditionArticle;
use Carerix\Api\Rest\Entity\CREmailTemplate;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRFetchSpecification;
use Carerix\Api\Rest\Entity\CRInvoice;
use Carerix\Api\Rest\Entity\CRInvoiceLine;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRLead;
use Carerix\Api\Rest\Entity\CRMatch;
use Carerix\Api\Rest\Entity\CRMonthHourJobView;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRObjectImport;
use Carerix\Api\Rest\Entity\CROpportunity;
use Carerix\Api\Rest\Entity\CRPublication;
use Carerix\Api\Rest\Entity\CRResource;
use Carerix\Api\Rest\Entity\CRStatusInfo;
use Carerix\Api\Rest\Entity\CRTalentPool;
use Carerix\Api\Rest\Entity\CRTemplateReference;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoNotes;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRWeekHourJobView;
use Carerix\Api\Rest\Entity\CRWeekHourView;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:48 +0000
 * @method AbstractCRMeeting setLabel() setLabel(string $value)
 * @method string getLabel getLabel()
 * @method AbstractCRMeeting setStartTime() setStartTime(string $value)
 * @method string getStartTime getStartTime()
 * @method AbstractCRMeeting setIsAllDay() setIsAllDay(integer $value)
 * @method integer getIsAllDay getIsAllDay()
 * @method AbstractCRMeeting setRecurrenceWeekly() setRecurrenceWeekly(integer $value)
 * @method integer getRecurrenceWeekly getRecurrenceWeekly()
 * @method AbstractCRMeeting setRecurrenceMonthly() setRecurrenceMonthly(integer $value)
 * @method integer getRecurrenceMonthly getRecurrenceMonthly()
 * @method AbstractCRMeeting setRecurrenceRate() setRecurrenceRate(integer $value)
 * @method integer getRecurrenceRate getRecurrenceRate()
 * @method AbstractCRMeeting setRecurrenceDays() setRecurrenceDays(NSArray|array $value)
 * @method NSArray|array getRecurrenceDays getRecurrenceDays()
 * @method AbstractCRMeeting setRecurrenceDay() setRecurrenceDay(integer $value)
 * @method integer getRecurrenceDay getRecurrenceDay()
 * @method AbstractCRMeeting setRecurrenceMonthDay() setRecurrenceMonthDay(integer $value)
 * @method integer getRecurrenceMonthDay getRecurrenceMonthDay()
 * @method AbstractCRMeeting setIsAbsoluteMonthDay() setIsAbsoluteMonthDay(integer $value)
 * @method integer getIsAbsoluteMonthDay getIsAbsoluteMonthDay()
 * @method AbstractCRMeeting setIsRelativeMonthDay() setIsRelativeMonthDay(integer $value)
 * @method integer getIsRelativeMonthDay getIsRelativeMonthDay()
 * @method AbstractCRMeeting setIsRangeNumberOfTimes() setIsRangeNumberOfTimes(integer $value)
 * @method integer getIsRangeNumberOfTimes getIsRangeNumberOfTimes()
 * @method AbstractCRMeeting setIsRangeEndDate() setIsRangeEndDate(integer $value)
 * @method integer getIsRangeEndDate getIsRangeEndDate()
 * @method AbstractCRMeeting setRecurrenceNumberOfTimes() setRecurrenceNumberOfTimes(integer $value)
 * @method integer getRecurrenceNumberOfTimes getRecurrenceNumberOfTimes()
 * @method AbstractCRMeeting setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCRMeeting setTodoTypeKey() setTodoTypeKey(integer $value)
 * @method integer getTodoTypeKey getTodoTypeKey()
 * @method AbstractCRMeeting setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRMeeting setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRMeeting setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRMeeting setStatus() setStatus(integer $value)
 * @method integer getStatus getStatus()
 * @method AbstractCRMeeting setDeadline() setDeadline(string $value)
 * @method string getDeadline getDeadline()
 * @method AbstractCRMeeting setSubject() setSubject(string $value)
 * @method string getSubject getSubject()
 * @method AbstractCRMeeting setTodoID() setTodoID(integer $value)
 * @method integer getTodoID getTodoID()
 * @method AbstractCRMeeting setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRMeeting setEndTime() setEndTime(string $value)
 * @method string getEndTime getEndTime()
 * @method AbstractCRMeeting setReminderMinutes() setReminderMinutes(integer $value)
 * @method integer getReminderMinutes getReminderMinutes()
 * @method AbstractCRMeeting setRepeatRate() setRepeatRate(integer $value)
 * @method integer getRepeatRate getRepeatRate()
 * @method AbstractCRMeeting setFromObjectKeyPath() setFromObjectKeyPath(string $value)
 * @method string getFromObjectKeyPath getFromObjectKeyPath()
 * @method AbstractCRMeeting setToObjectKeyPath() setToObjectKeyPath(string $value)
 * @method string getToObjectKeyPath getToObjectKeyPath()
 * @method AbstractCRMeeting setUniqueID() setUniqueID(string $value)
 * @method string getUniqueID getUniqueID()
 * @method AbstractCRMeeting setLocation() setLocation(string $value)
 * @method string getLocation getLocation()
 * @method AbstractCRMeeting setAttendees() setAttendees(string $value)
 * @method string getAttendees getAttendees()
 * @method AbstractCRMeeting setToAddress() setToAddress(string $value)
 * @method string getToAddress getToAddress()
 * @method AbstractCRMeeting setCcAddress() setCcAddress(string $value)
 * @method string getCcAddress getCcAddress()
 * @method AbstractCRMeeting setFromAddress() setFromAddress(string $value)
 * @method string getFromAddress getFromAddress()
 * @method AbstractCRMeeting setOwnerKeyPath() setOwnerKeyPath(string $value)
 * @method string getOwnerKeyPath getOwnerKeyPath()
 * @method AbstractCRMeeting setIsHTML() setIsHTML(integer $value)
 * @method integer getIsHTML getIsHTML()
 * @method AbstractCRMeeting setBccAddress() setBccAddress(string $value)
 * @method string getBccAddress getBccAddress()
 * @method AbstractCRMeeting setExpiryDate() setExpiryDate(string $value)
 * @method string getExpiryDate getExpiryDate()
 * @method AbstractCRMeeting setPriority() setPriority(integer $value)
 * @method integer getPriority getPriority()
 * @method AbstractCRMeeting setReminderDate() setReminderDate(string $value)
 * @method string getReminderDate getReminderDate()
 * @method AbstractCRMeeting setReplyToAddress() setReplyToAddress(string $value)
 * @method string getReplyToAddress getReplyToAddress()
 * @method AbstractCRMeeting setRecurrence() setRecurrence(integer $value)
 * @method integer getRecurrence getRecurrence()
 * @method AbstractCRMeeting setAttachmentCount() setAttachmentCount(integer $value)
 * @method integer getAttachmentCount getAttachmentCount()
 * @method AbstractCRMeeting setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCRMeeting setOtherRelationships() setOtherRelationships(NSDictionary|array $value)
 * @method NSDictionary|array getOtherRelationships getOtherRelationships()
 * @method AbstractCRMeeting setRemind() setRemind(integer $value)
 * @method integer getRemind getRemind()
 * @method AbstractCRMeeting setOtherInfo() setOtherInfo(NSDictionary|array $value)
 * @method NSDictionary|array getOtherInfo getOtherInfo()
 * @method AbstractCRMeeting setHoursRealized() setHoursRealized(integer $value)
 * @method integer getHoursRealized getHoursRealized()
 * @method AbstractCRMeeting setDateString() setDateString(string $value)
 * @method string getDateString getDateString()
 * @method AbstractCRMeeting setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRMeeting setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRMeeting setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRMeeting setMonthString() setMonthString(string $value)
 * @method string getMonthString getMonthString()
 * @method AbstractCRMeeting setIsTemplateVisible() setIsTemplateVisible(integer $value)
 * @method integer getIsTemplateVisible getIsTemplateVisible()
 * @method AbstractCRMeeting setToMatch() setToMatch(array|CRMatch $value)
 * @method CRMatch getToMatch getToMatch($index = null)
 * @method AbstractCRMeeting setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRMeeting setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRMeeting setOwner() setOwner(array|CRUser $value)
 * @method CRUser getOwner getOwner($index = null)
 * @method AbstractCRMeeting setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRMeeting setToVacancy() setToVacancy(array|CRVacancy $value)
 * @method CRVacancy getToVacancy getToVacancy($index = null)
 * @method AbstractCRMeeting setToEmployee() setToEmployee(array|CREmployee $value)
 * @method CREmployee getToEmployee getToEmployee($index = null)
 * @method AbstractCRMeeting setToContact() setToContact(array|CRUser $value)
 * @method CRUser getToContact getToContact($index = null)
 * @method AbstractCRMeeting setToStatusInfo() setToStatusInfo(array|CRStatusInfo $value)
 * @method CRStatusInfo getToStatusInfo getToStatusInfo($index = null)
 * @method AbstractCRMeeting setToEmailTemplate() setToEmailTemplate(array|CREmailTemplate $value)
 * @method CREmailTemplate getToEmailTemplate getToEmailTemplate($index = null)
 * @method AbstractCRMeeting setToActivityTypeNode() setToActivityTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToActivityTypeNode getToActivityTypeNode($index = null)
 * @method AbstractCRMeeting setToPreviousToDo() setToPreviousToDo(array|CRToDo $value)
 * @method CRToDo getToPreviousToDo getToPreviousToDo($index = null)
 * @method AbstractCRMeeting setToTemplateReference() setToTemplateReference(array|CRTemplateReference $value)
 * @method CRTemplateReference getToTemplateReference getToTemplateReference($index = null)
 * @method AbstractCRMeeting setToFetchSpecification() setToFetchSpecification(array|CRFetchSpecification $value)
 * @method CRFetchSpecification getToFetchSpecification getToFetchSpecification($index = null)
 * @method AbstractCRMeeting setToPublication() setToPublication(array|CRPublication $value)
 * @method CRPublication getToPublication getToPublication($index = null)
 * @method AbstractCRMeeting setToJob() setToJob(array|CRJob $value)
 * @method CRJob getToJob getToJob($index = null)
 * @method AbstractCRMeeting setToWeekHourView() setToWeekHourView(array|CRWeekHourView $value)
 * @method CRWeekHourView getToWeekHourView getToWeekHourView($index = null)
 * @method AbstractCRMeeting setToRecruiter() setToRecruiter(array|CRUser $value)
 * @method CRUser getToRecruiter getToRecruiter($index = null)
 * @method AbstractCRMeeting setToResultNode() setToResultNode(array|CRDataNode $value)
 * @method CRDataNode getToResultNode getToResultNode($index = null)
 * @method AbstractCRMeeting setToStatusNode() setToStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToStatusNode getToStatusNode($index = null)
 * @method AbstractCRMeeting setToFolderNode() setToFolderNode(array|CRDataNode $value)
 * @method CRDataNode getToFolderNode getToFolderNode($index = null)
 * @method AbstractCRMeeting setToRepeatUnitNode() setToRepeatUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToRepeatUnitNode getToRepeatUnitNode($index = null)
 * @method AbstractCRMeeting setToWeekHourJobView() setToWeekHourJobView(array|CRWeekHourJobView $value)
 * @method CRWeekHourJobView getToWeekHourJobView getToWeekHourJobView($index = null)
 * @method AbstractCRMeeting setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCRMeeting setNextToDos() setNextToDos(array|Collection $values)
 * @method Collection|CRToDo getNextToDos getNextToDos()
 * @method AbstractCRMeeting setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRMeeting setToNotes() setToNotes(array|CRToDoNotes $value)
 * @method CRToDoNotes getToNotes getToNotes($index = null)
 * @method AbstractCRMeeting setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRMeeting setToInvoice() setToInvoice(array|CRInvoice $value)
 * @method CRInvoice getToInvoice getToInvoice($index = null)
 * @method AbstractCRMeeting setToInvoiceLine() setToInvoiceLine(array|CRInvoiceLine $value)
 * @method CRInvoiceLine getToInvoiceLine getToInvoiceLine($index = null)
 * @method AbstractCRMeeting setEditionArticles() setEditionArticles(array|Collection $values)
 * @method Collection|CREditionArticle getEditionArticles getEditionArticles()
 * @method AbstractCRMeeting setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRMeeting setInvoiceLines() setInvoiceLines(array|Collection $values)
 * @method Collection|CRInvoiceLine getInvoiceLines getInvoiceLines()
 * @method AbstractCRMeeting setResources() setResources(array|Collection $values)
 * @method Collection|CRResource getResources getResources()
 * @method AbstractCRMeeting setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCRMeeting setToTransferData() setToTransferData(array|CRAttachmentData $value)
 * @method CRAttachmentData getToTransferData getToTransferData($index = null)
 * @method AbstractCRMeeting setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRMeeting setToObjectImport() setToObjectImport(array|CRObjectImport $value)
 * @method CRObjectImport getToObjectImport getToObjectImport($index = null)
 * @method AbstractCRMeeting setToLead() setToLead(array|CRLead $value)
 * @method CRLead getToLead getToLead($index = null)
 * @method AbstractCRMeeting setToOpportunity() setToOpportunity(array|CROpportunity $value)
 * @method CROpportunity getToOpportunity getToOpportunity($index = null)
 * @method AbstractCRMeeting setToMonthHourView() setToMonthHourView(array|CRMonthHourView $value)
 * @method CRMonthHourView getToMonthHourView getToMonthHourView($index = null)
 * @method AbstractCRMeeting setToMonthHourJobView() setToMonthHourJobView(array|CRMonthHourJobView $value)
 * @method CRMonthHourJobView getToMonthHourJobView getToMonthHourJobView($index = null)
 * @method AbstractCRMeeting setToTalentPool() setToTalentPool(array|CRTalentPool $value)
 * @method CRTalentPool getToTalentPool getToTalentPool($index = null)
 */
abstract class AbstractCRMeeting extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRMeeting';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $label;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startTime;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isAllDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceWeekly;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceMonthly;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceRate;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null
     */
    public $recurrenceDays;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceMonthDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isAbsoluteMonthDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isRelativeMonthDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isRangeNumberOfTimes;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isRangeEndDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrenceNumberOfTimes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $notes;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $todoTypeKey;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $modificationDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $deleted;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $status;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $deadline;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000
     */
    public $subject;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $todoID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     * @isUnique 1
     */
    public $importID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $endTime;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $reminderMinutes;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $repeatRate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fromObjectKeyPath;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $toObjectKeyPath;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $uniqueID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1024
     */
    public $location;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10000
     */
    public $attendees;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $toAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $ccAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $fromAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $ownerKeyPath;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isHTML;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $bccAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $expiryDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $priority;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $reminderDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $replyToAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $recurrence;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $attachmentCount;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isConfidential;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherRelationships;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $remind;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $otherInfo;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hoursRealized;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 8
     */
    public $dateString;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $externalIdentifier;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfo;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $additionalInfoPartial;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 6
     */
    public $monthString;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTemplateVisible;

    /**
     * @cx_field true
     * @access private
     * @var CRMatch
     * @OneToOne (targetEntity="CRMatch")
     * @mandatory 0
     * @destination_entity CRMatch
     * @to_many 0
     * @name toMatch
     */
    public $toMatch;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name createdBy
     */
    public $createdBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name modifiedBy
     */
    public $modifiedBy;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name owner
     */
    public $owner;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     * @inverseName _todos
     */
    public $toCompany;

    /**
     * @cx_field true
     * @access private
     * @var CRVacancy
     * @OneToOne (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 0
     * @name toVacancy
     * @inverseName _todos
     */
    public $toVacancy;

    /**
     * @cx_field true
     * @access private
     * @var CREmployee
     * @OneToOne (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 0
     * @name toEmployee
     * @inverseName _todos
     */
    public $toEmployee;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toContact
     * @inverseName _todos
     */
    public $toContact;

    /**
     * @cx_field true
     * @access private
     * @var CRStatusInfo
     * @OneToOne (targetEntity="CRStatusInfo")
     * @mandatory 0
     * @destination_entity CRStatusInfo
     * @to_many 0
     * @name toStatusInfo
     */
    public $toStatusInfo;

    /**
     * @cx_field true
     * @access private
     * @var CREmailTemplate
     * @OneToOne (targetEntity="CREmailTemplate")
     * @mandatory 0
     * @destination_entity CREmailTemplate
     * @to_many 0
     * @name toEmailTemplate
     */
    public $toEmailTemplate;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toActivityTypeNode
     * @default 1
     * @nodeType ${label}-type
     */
    public $toActivityTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRToDo
     * @OneToOne (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 0
     * @name toPreviousToDo
     */
    public $toPreviousToDo;

    /**
     * @cx_field true
     * @access private
     * @var CRTemplateReference
     * @OneToOne (targetEntity="CRTemplateReference")
     * @mandatory 0
     * @destination_entity CRTemplateReference
     * @to_many 0
     * @name toTemplateReference
     */
    public $toTemplateReference;

    /**
     * @cx_field true
     * @access private
     * @var CRFetchSpecification
     * @OneToOne (targetEntity="CRFetchSpecification")
     * @mandatory 0
     * @destination_entity CRFetchSpecification
     * @to_many 0
     * @name toFetchSpecification
     */
    public $toFetchSpecification;

    /**
     * @cx_field true
     * @access private
     * @var CRPublication
     * @OneToOne (targetEntity="CRPublication")
     * @mandatory 0
     * @destination_entity CRPublication
     * @to_many 0
     * @name toPublication
     */
    public $toPublication;

    /**
     * @cx_field true
     * @access private
     * @var CRJob
     * @OneToOne (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 0
     * @name toJob
     * @inverseName _todos
     */
    public $toJob;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourView
     * @OneToOne (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 0
     * @name toWeekHourView
     */
    public $toWeekHourView;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toRecruiter
     */
    public $toRecruiter;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toResultNode
     * @default 1
     * @nodeType ${label}-resultaat
     */
    public $toResultNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toStatusNode
     * @default 1
     * @nodeType ${label}-status
     */
    public $toStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFolderNode
     */
    public $toFolderNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toRepeatUnitNode
     * @default 0
     * @nodeType Herhalings-eenheid
     */
    public $toRepeatUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRWeekHourJobView
     * @OneToOne (targetEntity="CRWeekHourJobView")
     * @mandatory 0
     * @destination_entity CRWeekHourJobView
     * @to_many 0
     * @name toWeekHourJobView
     */
    public $toWeekHourJobView;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toToDo
     */
    public $toDoUsers;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name nextToDos
     */
    public $nextToDos;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttributeChange")
     * @mandatory 0
     * @destination_entity CRAttributeChange
     * @to_many 1
     * @name attributeChanges
     */
    public $attributeChanges;

    /**
     * @cx_field true
     * @access private
     * @var CRToDoNotes
     * @OneToOne (targetEntity="CRToDoNotes")
     * @mandatory 0
     * @destination_entity CRToDoNotes
     * @to_many 0
     * @name toNotes
     */
    public $toNotes;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     * @default 0
     * @nodeType Systeemtaal
     */
    public $toLanguageNode;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoice
     * @OneToOne (targetEntity="CRInvoice")
     * @mandatory 0
     * @destination_entity CRInvoice
     * @to_many 0
     * @name toInvoice
     */
    public $toInvoice;

    /**
     * @cx_field true
     * @access private
     * @var CRInvoiceLine
     * @OneToOne (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 0
     * @name toInvoiceLine
     */
    public $toInvoiceLine;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREditionArticle")
     * @mandatory 0
     * @destination_entity CREditionArticle
     * @to_many 1
     * @name editionArticles
     */
    public $editionArticles;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductNode
     * @default 1
     * @nodeType Product
     */
    public $toProductNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRInvoiceLine")
     * @mandatory 0
     * @destination_entity CRInvoiceLine
     * @to_many 1
     * @name invoiceLines
     */
    public $invoiceLines;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRResource")
     * @mandatory 0
     * @destination_entity CRResource
     * @to_many 1
     * @name resources
     */
    public $resources;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toConfidentialUserRole
     */
    public $toConfidentialUserRole;

    /**
     * @cx_field true
     * @access private
     * @var CRAttachmentData
     * @OneToOne (targetEntity="CRAttachmentData")
     * @mandatory 0
     * @destination_entity CRAttachmentData
     * @to_many 0
     * @name toTransferData
     */
    public $toTransferData;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRAttachment")
     * @mandatory 0
     * @destination_entity CRAttachment
     * @to_many 1
     * @name attachments
     */
    public $attachments;

    /**
     * @cx_field true
     * @access private
     * @var CRObjectImport
     * @OneToOne (targetEntity="CRObjectImport")
     * @mandatory 0
     * @destination_entity CRObjectImport
     * @to_many 0
     * @name toObjectImport
     */
    public $toObjectImport;

    /**
     * @cx_field true
     * @access private
     * @var CRLead
     * @OneToOne (targetEntity="CRLead")
     * @mandatory 0
     * @destination_entity CRLead
     * @to_many 0
     * @name toLead
     * @inverseName _todos
     */
    public $toLead;

    /**
     * @cx_field true
     * @access private
     * @var CROpportunity
     * @OneToOne (targetEntity="CROpportunity")
     * @mandatory 0
     * @destination_entity CROpportunity
     * @to_many 0
     * @name toOpportunity
     * @inverseName _todos
     */
    public $toOpportunity;

    /**
     * @cx_field true
     * @access private
     * @var CRMonthHourView
     * @OneToOne (targetEntity="CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 0
     * @name toMonthHourView
     */
    public $toMonthHourView;

    /**
     * @cx_field true
     * @access private
     * @var CRMonthHourJobView
     * @OneToOne (targetEntity="CRMonthHourJobView")
     * @mandatory 0
     * @destination_entity CRMonthHourJobView
     * @to_many 0
     * @name toMonthHourJobView
     */
    public $toMonthHourJobView;

    /**
     * @cx_field true
     * @access private
     * @var CRTalentPool
     * @OneToOne (targetEntity="CRTalentPool")
     * @mandatory 0
     * @destination_entity CRTalentPool
     * @to_many 0
     * @name toTalentPool
     * @inverseName _todos
     */
    public $toTalentPool;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("meetingID");
        $entityConfiguration->setName("CRMeeting");
    }
}
