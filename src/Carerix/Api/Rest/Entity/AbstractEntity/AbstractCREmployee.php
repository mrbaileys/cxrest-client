<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmployeeDocument;
use Carerix\Api\Rest\Entity\CREmployeeEducation;
use Carerix\Api\Rest\Entity\CREmployeeLanguage;
use Carerix\Api\Rest\Entity\CREmployeeSkill;
use Carerix\Api\Rest\Entity\CREmployeeTraining;
use Carerix\Api\Rest\Entity\CRFinance;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRMatch;
use Carerix\Api\Rest\Entity\CRMedium;
use Carerix\Api\Rest\Entity\CRMonthHourView;
use Carerix\Api\Rest\Entity\CRTalentPoolMatch;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRWeekHour;
use Carerix\Api\Rest\Entity\CRWeekHourView;
use Carerix\Api\Rest\Entity\CRWorkHistory;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:24 +0000
 * @method AbstractCREmployee setMaxDistance() setMaxDistance(integer $value)
 * @method integer getMaxDistance getMaxDistance()
 * @method AbstractCREmployee setMinSalary() setMinSalary(float $value)
 * @method float getMinSalary getMinSalary()
 * @method AbstractCREmployee setEmployeeID() setEmployeeID(integer $value)
 * @method integer getEmployeeID getEmployeeID()
 * @method AbstractCREmployee setAvailableFromDate() setAvailableFromDate(string $value)
 * @method string getAvailableFromDate getAvailableFromDate()
 * @method AbstractCREmployee setMatchCountMO() setMatchCountMO(integer $value)
 * @method integer getMatchCountMO getMatchCountMO()
 * @method AbstractCREmployee setFriWorkMinutes() setFriWorkMinutes(float $value)
 * @method float getFriWorkMinutes getFriWorkMinutes()
 * @method AbstractCREmployee setMonWorkMinutes() setMonWorkMinutes(float $value)
 * @method float getMonWorkMinutes getMonWorkMinutes()
 * @method AbstractCREmployee setSatWorkMinutes() setSatWorkMinutes(float $value)
 * @method float getSatWorkMinutes getSatWorkMinutes()
 * @method AbstractCREmployee setSunWorkMinutes() setSunWorkMinutes(float $value)
 * @method float getSunWorkMinutes getSunWorkMinutes()
 * @method AbstractCREmployee setThuWorkMinutes() setThuWorkMinutes(float $value)
 * @method float getThuWorkMinutes getThuWorkMinutes()
 * @method AbstractCREmployee setTueWorkMinutes() setTueWorkMinutes(float $value)
 * @method float getTueWorkMinutes getTueWorkMinutes()
 * @method AbstractCREmployee setWedWorkMinutes() setWedWorkMinutes(float $value)
 * @method float getWedWorkMinutes getWedWorkMinutes()
 * @method AbstractCREmployee setDaysPerWeek() setDaysPerWeek(integer $value)
 * @method integer getDaysPerWeek getDaysPerWeek()
 * @method AbstractCREmployee setAvailableDate() setAvailableDate(string $value)
 * @method string getAvailableDate getAvailableDate()
 * @method AbstractCREmployee setDocumentBits() setDocumentBits(string $value)
 * @method string getDocumentBits getDocumentBits()
 * @method AbstractCREmployee setStartDate() setStartDate(string $value)
 * @method string getStartDate getStartDate()
 * @method AbstractCREmployee setMaxFte() setMaxFte(float $value)
 * @method float getMaxFte getMaxFte()
 * @method AbstractCREmployee setLearnDutyDays() setLearnDutyDays(float $value)
 * @method float getLearnDutyDays getLearnDutyDays()
 * @method AbstractCREmployee setHasCar() setHasCar(integer $value)
 * @method integer getHasCar getHasCar()
 * @method AbstractCREmployee setPhaseChainSystemKey() setPhaseChainSystemKey(integer $value)
 * @method integer getPhaseChainSystemKey getPhaseChainSystemKey()
 * @method AbstractCREmployee setPhaseSystemStartDate() setPhaseSystemStartDate(string $value)
 * @method string getPhaseSystemStartDate getPhaseSystemStartDate()
 * @method AbstractCREmployee setPhase1StartDate() setPhase1StartDate(string $value)
 * @method string getPhase1StartDate getPhase1StartDate()
 * @method AbstractCREmployee setPhase2StartDate() setPhase2StartDate(string $value)
 * @method string getPhase2StartDate getPhase2StartDate()
 * @method AbstractCREmployee setPhase3StartDate() setPhase3StartDate(string $value)
 * @method string getPhase3StartDate getPhase3StartDate()
 * @method AbstractCREmployee setPhase4StartDate() setPhase4StartDate(string $value)
 * @method string getPhase4StartDate getPhase4StartDate()
 * @method AbstractCREmployee setEmployeeInformation() setEmployeeInformation(string $value)
 * @method string getEmployeeInformation getEmployeeInformation()
 * @method AbstractCREmployee setIdentificationValidUntilDate() setIdentificationValidUntilDate(string $value)
 * @method string getIdentificationValidUntilDate getIdentificationValidUntilDate()
 * @method AbstractCREmployee setNotes() setNotes(string $value)
 * @method string getNotes getNotes()
 * @method AbstractCREmployee setWorkingPermitValidUntilDate() setWorkingPermitValidUntilDate(string $value)
 * @method string getWorkingPermitValidUntilDate getWorkingPermitValidUntilDate()
 * @method AbstractCREmployee setAmbition() setAmbition(string $value)
 * @method string getAmbition getAmbition()
 * @method AbstractCREmployee setContractEndDate() setContractEndDate(string $value)
 * @method string getContractEndDate getContractEndDate()
 * @method AbstractCREmployee setEducationInformation() setEducationInformation(string $value)
 * @method string getEducationInformation getEducationInformation()
 * @method AbstractCREmployee setLanguageNotes() setLanguageNotes(string $value)
 * @method string getLanguageNotes getLanguageNotes()
 * @method AbstractCREmployee setSkillNotes() setSkillNotes(string $value)
 * @method string getSkillNotes getSkillNotes()
 * @method AbstractCREmployee setTrainingNotes() setTrainingNotes(string $value)
 * @method string getTrainingNotes getTrainingNotes()
 * @method AbstractCREmployee setZiekengeldPercentage() setZiekengeldPercentage(float $value)
 * @method float getZiekengeldPercentage getZiekengeldPercentage()
 * @method AbstractCREmployee setWorkingPermitCode() setWorkingPermitCode(string $value)
 * @method string getWorkingPermitCode getWorkingPermitCode()
 * @method AbstractCREmployee setMedicalInsurancePolicyCode() setMedicalInsurancePolicyCode(string $value)
 * @method string getMedicalInsurancePolicyCode getMedicalInsurancePolicyCode()
 * @method AbstractCREmployee setIdentificationCode() setIdentificationCode(string $value)
 * @method string getIdentificationCode getIdentificationCode()
 * @method AbstractCREmployee setSpaarPolicyCode() setSpaarPolicyCode(string $value)
 * @method string getSpaarPolicyCode getSpaarPolicyCode()
 * @method AbstractCREmployee setSpaarOrganisation() setSpaarOrganisation(string $value)
 * @method string getSpaarOrganisation getSpaarOrganisation()
 * @method AbstractCREmployee setSpaarAccountName() setSpaarAccountName(string $value)
 * @method string getSpaarAccountName getSpaarAccountName()
 * @method AbstractCREmployee setSpaarAccount() setSpaarAccount(string $value)
 * @method string getSpaarAccount getSpaarAccount()
 * @method AbstractCREmployee setPremieAccountName() setPremieAccountName(string $value)
 * @method string getPremieAccountName getPremieAccountName()
 * @method AbstractCREmployee setPremieAccount() setPremieAccount(string $value)
 * @method string getPremieAccount getPremieAccount()
 * @method AbstractCREmployee setPhaseSystemFileNumber() setPhaseSystemFileNumber(string $value)
 * @method string getPhaseSystemFileNumber getPhaseSystemFileNumber()
 * @method AbstractCREmployee setPaymentAccountName() setPaymentAccountName(string $value)
 * @method string getPaymentAccountName getPaymentAccountName()
 * @method AbstractCREmployee setPaymentAccountOld() setPaymentAccountOld(string $value)
 * @method string getPaymentAccountOld getPaymentAccountOld()
 * @method AbstractCREmployee setContactInfo() setContactInfo(string $value)
 * @method string getContactInfo getContactInfo()
 * @method AbstractCREmployee setHolidayDays() setHolidayDays(float $value)
 * @method float getHolidayDays getHolidayDays()
 * @method AbstractCREmployee setHoursPerWeek() setHoursPerWeek(float $value)
 * @method float getHoursPerWeek getHoursPerWeek()
 * @method AbstractCREmployee setExperienceInformation() setExperienceInformation(string $value)
 * @method string getExperienceInformation getExperienceInformation()
 * @method AbstractCREmployee setBirthName() setBirthName(string $value)
 * @method string getBirthName getBirthName()
 * @method AbstractCREmployee setIdentificationCity() setIdentificationCity(string $value)
 * @method string getIdentificationCity getIdentificationCity()
 * @method AbstractCREmployee setIdentificationDate() setIdentificationDate(string $value)
 * @method string getIdentificationDate getIdentificationDate()
 * @method AbstractCREmployee setBirthCity() setBirthCity(string $value)
 * @method string getBirthCity getBirthCity()
 * @method AbstractCREmployee setHolidayCorrectionsString() setHolidayCorrectionsString(string $value)
 * @method string getHolidayCorrectionsString getHolidayCorrectionsString()
 * @method AbstractCREmployee setDriversLicenseCity() setDriversLicenseCity(string $value)
 * @method string getDriversLicenseCity getDriversLicenseCity()
 * @method AbstractCREmployee setDriversLicenseCode() setDriversLicenseCode(string $value)
 * @method string getDriversLicenseCode getDriversLicenseCode()
 * @method AbstractCREmployee setDriversLicenseValidUntilDate() setDriversLicenseValidUntilDate(string $value)
 * @method string getDriversLicenseValidUntilDate getDriversLicenseValidUntilDate()
 * @method AbstractCREmployee setCoordX() setCoordX(integer $value)
 * @method integer getCoordX getCoordX()
 * @method AbstractCREmployee setCoordY() setCoordY(integer $value)
 * @method integer getCoordY getCoordY()
 * @method AbstractCREmployee setCurrentSalary() setCurrentSalary(float $value)
 * @method float getCurrentSalary getCurrentSalary()
 * @method AbstractCREmployee setCurrentConditions() setCurrentConditions(string $value)
 * @method string getCurrentConditions getCurrentConditions()
 * @method AbstractCREmployee setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCREmployee setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCREmployee setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCREmployee setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCREmployee setHobbies() setHobbies(string $value)
 * @method string getHobbies getHobbies()
 * @method AbstractCREmployee setSisKaartNumber() setSisKaartNumber(string $value)
 * @method string getSisKaartNumber getSisKaartNumber()
 * @method AbstractCREmployee setChecklistBits() setChecklistBits(string $value)
 * @method string getChecklistBits getChecklistBits()
 * @method AbstractCREmployee setMinFte() setMinFte(float $value)
 * @method float getMinFte getMinFte()
 * @method AbstractCREmployee setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCREmployee setIsConfidential() setIsConfidential(integer $value)
 * @method integer getIsConfidential getIsConfidential()
 * @method AbstractCREmployee setExperienceSinceDate() setExperienceSinceDate(string $value)
 * @method string getExperienceSinceDate getExperienceSinceDate()
 * @method AbstractCREmployee setAdminSyncDate() setAdminSyncDate(string $value)
 * @method string getAdminSyncDate getAdminSyncDate()
 * @method AbstractCREmployee setBonusNotes() setBonusNotes(string $value)
 * @method string getBonusNotes getBonusNotes()
 * @method AbstractCREmployee setStudyNotes() setStudyNotes(string $value)
 * @method string getStudyNotes getStudyNotes()
 * @method AbstractCREmployee setPartnerBirthCity() setPartnerBirthCity(string $value)
 * @method string getPartnerBirthCity getPartnerBirthCity()
 * @method AbstractCREmployee setPartnerBirthDate() setPartnerBirthDate(string $value)
 * @method string getPartnerBirthDate getPartnerBirthDate()
 * @method AbstractCREmployee setPartnerFirstName() setPartnerFirstName(string $value)
 * @method string getPartnerFirstName getPartnerFirstName()
 * @method AbstractCREmployee setPartnerFullFirstNames() setPartnerFullFirstNames(string $value)
 * @method string getPartnerFullFirstNames getPartnerFullFirstNames()
 * @method AbstractCREmployee setPartnerInitials() setPartnerInitials(string $value)
 * @method string getPartnerInitials getPartnerInitials()
 * @method AbstractCREmployee setPartnerLastName() setPartnerLastName(string $value)
 * @method string getPartnerLastName getPartnerLastName()
 * @method AbstractCREmployee setPartnerLastNamePrefix() setPartnerLastNamePrefix(string $value)
 * @method string getPartnerLastNamePrefix getPartnerLastNamePrefix()
 * @method AbstractCREmployee setCostCenter() setCostCenter(string $value)
 * @method string getCostCenter getCostCenter()
 * @method AbstractCREmployee setCostUnit() setCostUnit(string $value)
 * @method string getCostUnit getCostUnit()
 * @method AbstractCREmployee setMaritalStatus() setMaritalStatus(NSDictionary|array $value)
 * @method NSDictionary|array getMaritalStatus getMaritalStatus()
 * @method AbstractCREmployee setChildren() setChildren(NSArray|array $value)
 * @method NSArray|array getChildren getChildren()
 * @method AbstractCREmployee setCostPrice() setCostPrice(float $value)
 * @method float getCostPrice getCostPrice()
 * @method AbstractCREmployee setSellingPrice() setSellingPrice(float $value)
 * @method float getSellingPrice getSellingPrice()
 * @method AbstractCREmployee setReviewInfo() setReviewInfo(string $value)
 * @method string getReviewInfo getReviewInfo()
 * @method AbstractCREmployee setPurchaseRate() setPurchaseRate(float $value)
 * @method float getPurchaseRate getPurchaseRate()
 * @method AbstractCREmployee setSalesFactor() setSalesFactor(float $value)
 * @method float getSalesFactor getSalesFactor()
 * @method AbstractCREmployee setPartnerPersonalNumber() setPartnerPersonalNumber(string $value)
 * @method string getPartnerPersonalNumber getPartnerPersonalNumber()
 * @method AbstractCREmployee setPaymentBicCode() setPaymentBicCode(string $value)
 * @method string getPaymentBicCode getPaymentBicCode()
 * @method AbstractCREmployee setPaymentIbanCode() setPaymentIbanCode(string $value)
 * @method string getPaymentIbanCode getPaymentIbanCode()
 * @method AbstractCREmployee setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCREmployee setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCREmployee setFlags() setFlags(integer $value)
 * @method integer getFlags getFlags()
 * @method AbstractCREmployee setPaymentAccount() setPaymentAccount(string $value)
 * @method string getPaymentAccount getPaymentAccount()
 * @method AbstractCREmployee setExternalInfo() setExternalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getExternalInfo getExternalInfo()
 * @method AbstractCREmployee setTimesheetTypeKey() setTimesheetTypeKey(integer $value)
 * @method integer getTimesheetTypeKey getTimesheetTypeKey()
 * @method AbstractCREmployee setPrivacyApprovalDate() setPrivacyApprovalDate(string $value)
 * @method string getPrivacyApprovalDate getPrivacyApprovalDate()
 * @method AbstractCREmployee setConsentExpiryDate() setConsentExpiryDate(string $value)
 * @method string getConsentExpiryDate getConsentExpiryDate()
 * @method AbstractCREmployee setMatches() setMatches(array|Collection $values)
 * @method Collection|CRMatch getMatches getMatches()
 * @method AbstractCREmployee setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCREmployee setWorkHistories() setWorkHistories(array|Collection $values)
 * @method Collection|CRWorkHistory getWorkHistories getWorkHistories()
 * @method AbstractCREmployee setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCREmployee setToMedium() setToMedium(array|CRMedium $value)
 * @method CRMedium getToMedium getToMedium($index = null)
 * @method AbstractCREmployee setToExperienceNode() setToExperienceNode(array|CRDataNode $value)
 * @method CRDataNode getToExperienceNode getToExperienceNode($index = null)
 * @method AbstractCREmployee setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCREmployee setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCREmployee setToProductType1Node() setToProductType1Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType1Node getToProductType1Node($index = null)
 * @method AbstractCREmployee setToLevel1Function1() setToLevel1Function1(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function1 getToLevel1Function1($index = null)
 * @method AbstractCREmployee setToLevel1Function2() setToLevel1Function2(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function2 getToLevel1Function2($index = null)
 * @method AbstractCREmployee setToLevel1Function3() setToLevel1Function3(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function3 getToLevel1Function3($index = null)
 * @method AbstractCREmployee setToLevel1Function4() setToLevel1Function4(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function4 getToLevel1Function4($index = null)
 * @method AbstractCREmployee setToLevel1Function5() setToLevel1Function5(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function5 getToLevel1Function5($index = null)
 * @method AbstractCREmployee setToLevel1Function6() setToLevel1Function6(array|CRDataNode $value)
 * @method CRDataNode getToLevel1Function6 getToLevel1Function6($index = null)
 * @method AbstractCREmployee setToLevel2Function1() setToLevel2Function1(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function1 getToLevel2Function1($index = null)
 * @method AbstractCREmployee setToLevel2Function2() setToLevel2Function2(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function2 getToLevel2Function2($index = null)
 * @method AbstractCREmployee setToLevel2Function3() setToLevel2Function3(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function3 getToLevel2Function3($index = null)
 * @method AbstractCREmployee setToLevel2Function4() setToLevel2Function4(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function4 getToLevel2Function4($index = null)
 * @method AbstractCREmployee setToLevel2Function5() setToLevel2Function5(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function5 getToLevel2Function5($index = null)
 * @method AbstractCREmployee setToLevel2Function6() setToLevel2Function6(array|CRDataNode $value)
 * @method CRDataNode getToLevel2Function6 getToLevel2Function6($index = null)
 * @method AbstractCREmployee setEducations() setEducations(array|Collection $values)
 * @method Collection|CREmployeeEducation getEducations getEducations()
 * @method AbstractCREmployee setAllWeekHours() setAllWeekHours(array|Collection $values)
 * @method Collection|CRWeekHour getAllWeekHours getAllWeekHours()
 * @method AbstractCREmployee setLanguages() setLanguages(array|Collection $values)
 * @method Collection|CREmployeeLanguage getLanguages getLanguages()
 * @method AbstractCREmployee setSkills() setSkills(array|Collection $values)
 * @method Collection|CREmployeeSkill getSkills getSkills()
 * @method AbstractCREmployee setTrainings() setTrainings(array|Collection $values)
 * @method Collection|CREmployeeTraining getTrainings getTrainings()
 * @method AbstractCREmployee setToFunction1Level1Node() setToFunction1Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction1Level1Node getToFunction1Level1Node($index = null)
 * @method AbstractCREmployee setToFunction1Level2Node() setToFunction1Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction1Level2Node getToFunction1Level2Node($index = null)
 * @method AbstractCREmployee setToDriverLicenceNode() setToDriverLicenceNode(array|CRDataNode $value)
 * @method CRDataNode getToDriverLicenceNode getToDriverLicenceNode($index = null)
 * @method AbstractCREmployee setToAvailableWithinNode() setToAvailableWithinNode(array|CRDataNode $value)
 * @method CRDataNode getToAvailableWithinNode getToAvailableWithinNode($index = null)
 * @method AbstractCREmployee setToMeansOfTransportNode() setToMeansOfTransportNode(array|CRDataNode $value)
 * @method CRDataNode getToMeansOfTransportNode getToMeansOfTransportNode($index = null)
 * @method AbstractCREmployee setToCategoryNode() setToCategoryNode(array|CRDataNode $value)
 * @method CRDataNode getToCategoryNode getToCategoryNode($index = null)
 * @method AbstractCREmployee setToSalaryScaleLevel1Node() setToSalaryScaleLevel1Node(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleLevel1Node getToSalaryScaleLevel1Node($index = null)
 * @method AbstractCREmployee setToSalaryScaleLevel2Node() setToSalaryScaleLevel2Node(array|CRDataNode $value)
 * @method CRDataNode getToSalaryScaleLevel2Node getToSalaryScaleLevel2Node($index = null)
 * @method AbstractCREmployee setToBrancheLevel1() setToBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel1 getToBrancheLevel1($index = null)
 * @method AbstractCREmployee setToBrancheLevel2() setToBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToBrancheLevel2 getToBrancheLevel2($index = null)
 * @method AbstractCREmployee setToFunction2Level1Node() setToFunction2Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction2Level1Node getToFunction2Level1Node($index = null)
 * @method AbstractCREmployee setToFunction2Level2Node() setToFunction2Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction2Level2Node getToFunction2Level2Node($index = null)
 * @method AbstractCREmployee setToFunction3Level1Node() setToFunction3Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction3Level1Node getToFunction3Level1Node($index = null)
 * @method AbstractCREmployee setToFunction3Level2Node() setToFunction3Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToFunction3Level2Node getToFunction3Level2Node($index = null)
 * @method AbstractCREmployee setToMinSalaryCurrencyNode() setToMinSalaryCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToMinSalaryCurrencyNode getToMinSalaryCurrencyNode($index = null)
 * @method AbstractCREmployee setToContractTypeNode() setToContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToContractTypeNode getToContractTypeNode($index = null)
 * @method AbstractCREmployee setWeekHourViews() setWeekHourViews(array|Collection $values)
 * @method Collection|CRWeekHourView getWeekHourViews getWeekHourViews()
 * @method AbstractCREmployee set_todos() set_todos(array|Collection $values)
 * @method Collection|CRToDo get_todos get_todos()
 * @method AbstractCREmployee setToWorkUnitNode() setToWorkUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkUnitNode getToWorkUnitNode($index = null)
 * @method AbstractCREmployee setFinances() setFinances(array|Collection $values)
 * @method Collection|CRFinance getFinances getFinances()
 * @method AbstractCREmployee setToIdentificationTypeNode() setToIdentificationTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToIdentificationTypeNode getToIdentificationTypeNode($index = null)
 * @method AbstractCREmployee setToMaritalStatusNode() setToMaritalStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToMaritalStatusNode getToMaritalStatusNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceCompanyNode() setToMedicalInsuranceCompanyNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceCompanyNode getToMedicalInsuranceCompanyNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceTypeNode() setToMedicalInsuranceTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceTypeNode getToMedicalInsuranceTypeNode($index = null)
 * @method AbstractCREmployee setToNationalityNode() setToNationalityNode(array|CRDataNode $value)
 * @method CRDataNode getToNationalityNode getToNationalityNode($index = null)
 * @method AbstractCREmployee setToOptional1Node() setToOptional1Node(array|CRDataNode $value)
 * @method CRDataNode getToOptional1Node getToOptional1Node($index = null)
 * @method AbstractCREmployee setToPaymentModeNode() setToPaymentModeNode(array|CRDataNode $value)
 * @method CRDataNode getToPaymentModeNode getToPaymentModeNode($index = null)
 * @method AbstractCREmployee setToPrefBranche1Level1Node() setToPrefBranche1Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche1Level1Node getToPrefBranche1Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche1Level2Node() setToPrefBranche1Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche1Level2Node getToPrefBranche1Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche2Level1Node() setToPrefBranche2Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche2Level1Node getToPrefBranche2Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche2Level2Node() setToPrefBranche2Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche2Level2Node getToPrefBranche2Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche3Level1Node() setToPrefBranche3Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche3Level1Node getToPrefBranche3Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche3Level2Node() setToPrefBranche3Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche3Level2Node getToPrefBranche3Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche4Level1Node() setToPrefBranche4Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche4Level1Node getToPrefBranche4Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche4Level2Node() setToPrefBranche4Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche4Level2Node getToPrefBranche4Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche5Level1Node() setToPrefBranche5Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche5Level1Node getToPrefBranche5Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche5Level2Node() setToPrefBranche5Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche5Level2Node getToPrefBranche5Level2Node($index = null)
 * @method AbstractCREmployee setToPrefBranche6Level1Node() setToPrefBranche6Level1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche6Level1Node getToPrefBranche6Level1Node($index = null)
 * @method AbstractCREmployee setToPrefBranche6Level2Node() setToPrefBranche6Level2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefBranche6Level2Node getToPrefBranche6Level2Node($index = null)
 * @method AbstractCREmployee setToPrefContractTypeNode() setToPrefContractTypeNode(array|CRDataNode $value)
 * @method CRDataNode getToPrefContractTypeNode getToPrefContractTypeNode($index = null)
 * @method AbstractCREmployee setToPrefRegion1Node() setToPrefRegion1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion1Node getToPrefRegion1Node($index = null)
 * @method AbstractCREmployee setToPrefRegion2Node() setToPrefRegion2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion2Node getToPrefRegion2Node($index = null)
 * @method AbstractCREmployee setToPrefRegion3Node() setToPrefRegion3Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion3Node getToPrefRegion3Node($index = null)
 * @method AbstractCREmployee setToPrefRegion4Node() setToPrefRegion4Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion4Node getToPrefRegion4Node($index = null)
 * @method AbstractCREmployee setToPrefRegion5Node() setToPrefRegion5Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion5Node getToPrefRegion5Node($index = null)
 * @method AbstractCREmployee setToPrefRegion6Node() setToPrefRegion6Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefRegion6Node getToPrefRegion6Node($index = null)
 * @method AbstractCREmployee setToWorkLevelNode() setToWorkLevelNode(array|CRDataNode $value)
 * @method CRDataNode getToWorkLevelNode getToWorkLevelNode($index = null)
 * @method AbstractCREmployee setToPrefCountry1Node() setToPrefCountry1Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry1Node getToPrefCountry1Node($index = null)
 * @method AbstractCREmployee setToPrefCountry2Node() setToPrefCountry2Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry2Node getToPrefCountry2Node($index = null)
 * @method AbstractCREmployee setToPrefCountry3Node() setToPrefCountry3Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry3Node getToPrefCountry3Node($index = null)
 * @method AbstractCREmployee setToPrefCountry4Node() setToPrefCountry4Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry4Node getToPrefCountry4Node($index = null)
 * @method AbstractCREmployee setToPrefCountry5Node() setToPrefCountry5Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry5Node getToPrefCountry5Node($index = null)
 * @method AbstractCREmployee setToPrefCountry6Node() setToPrefCountry6Node(array|CRDataNode $value)
 * @method CRDataNode getToPrefCountry6Node getToPrefCountry6Node($index = null)
 * @method AbstractCREmployee setToIdentificationCountryNode() setToIdentificationCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToIdentificationCountryNode getToIdentificationCountryNode($index = null)
 * @method AbstractCREmployee setToBirthCountryNode() setToBirthCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToBirthCountryNode getToBirthCountryNode($index = null)
 * @method AbstractCREmployee setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCREmployee setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCREmployee setToCurrentSalaryCurrencyNode() setToCurrentSalaryCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrentSalaryCurrencyNode getToCurrentSalaryCurrencyNode($index = null)
 * @method AbstractCREmployee setToCurrentSalaryPeriodNode() setToCurrentSalaryPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToCurrentSalaryPeriodNode getToCurrentSalaryPeriodNode($index = null)
 * @method AbstractCREmployee setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCREmployee setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCREmployee setToMinSalaryUnitNode() setToMinSalaryUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToMinSalaryUnitNode getToMinSalaryUnitNode($index = null)
 * @method AbstractCREmployee setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCREmployee setToConfidentialUserRole() setToConfidentialUserRole(array|CRUserRole $value)
 * @method CRUserRole getToConfidentialUserRole getToConfidentialUserRole($index = null)
 * @method AbstractCREmployee setDocuments() setDocuments(array|Collection $values)
 * @method Collection|CREmployeeDocument getDocuments getDocuments()
 * @method AbstractCREmployee setToPartnerGenderNode() setToPartnerGenderNode(array|CRDataNode $value)
 * @method CRDataNode getToPartnerGenderNode getToPartnerGenderNode($index = null)
 * @method AbstractCREmployee setToCostPriceUnitNode() setToCostPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceUnitNode getToCostPriceUnitNode($index = null)
 * @method AbstractCREmployee setToCostPriceCurrencyNode() setToCostPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToCostPriceCurrencyNode getToCostPriceCurrencyNode($index = null)
 * @method AbstractCREmployee setToSellingPriceUnitNode() setToSellingPriceUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceUnitNode getToSellingPriceUnitNode($index = null)
 * @method AbstractCREmployee setToSellingPriceCurrencyNode() setToSellingPriceCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToSellingPriceCurrencyNode getToSellingPriceCurrencyNode($index = null)
 * @method AbstractCREmployee setToMedicalInsuranceAgencyNode() setToMedicalInsuranceAgencyNode(array|CRDataNode $value)
 * @method CRDataNode getToMedicalInsuranceAgencyNode getToMedicalInsuranceAgencyNode($index = null)
 * @method AbstractCREmployee setToPurchaseRateCurrencyNode() setToPurchaseRateCurrencyNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateCurrencyNode getToPurchaseRateCurrencyNode($index = null)
 * @method AbstractCREmployee setToPurchaseRateUnitNode() setToPurchaseRateUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToPurchaseRateUnitNode getToPurchaseRateUnitNode($index = null)
 * @method AbstractCREmployee setToProductTypeNode1() setToProductTypeNode1(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode1 getToProductTypeNode1($index = null)
 * @method AbstractCREmployee setToProductTypeNode2() setToProductTypeNode2(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode2 getToProductTypeNode2($index = null)
 * @method AbstractCREmployee setToProductTypeNode3() setToProductTypeNode3(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode3 getToProductTypeNode3($index = null)
 * @method AbstractCREmployee setToProductTypeNode4() setToProductTypeNode4(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode4 getToProductTypeNode4($index = null)
 * @method AbstractCREmployee setToProductTypeNode5() setToProductTypeNode5(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode5 getToProductTypeNode5($index = null)
 * @method AbstractCREmployee setToProductTypeNode6() setToProductTypeNode6(array|CRDataNode $value)
 * @method CRDataNode getToProductTypeNode6 getToProductTypeNode6($index = null)
 * @method AbstractCREmployee setToProductType2Node() setToProductType2Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType2Node getToProductType2Node($index = null)
 * @method AbstractCREmployee setToProductType3Node() setToProductType3Node(array|CRDataNode $value)
 * @method CRDataNode getToProductType3Node getToProductType3Node($index = null)
 * @method AbstractCREmployee setToCurrentWorkHistory() setToCurrentWorkHistory(array|CRWorkHistory $value)
 * @method CRWorkHistory getToCurrentWorkHistory getToCurrentWorkHistory($index = null)
 * @method AbstractCREmployee setToCurrentBrancheLevel1() setToCurrentBrancheLevel1(array|CRDataNode $value)
 * @method CRDataNode getToCurrentBrancheLevel1 getToCurrentBrancheLevel1($index = null)
 * @method AbstractCREmployee setToCurrentBrancheLevel2() setToCurrentBrancheLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentBrancheLevel2 getToCurrentBrancheLevel2($index = null)
 * @method AbstractCREmployee setToCurrentFunctionLevel2() setToCurrentFunctionLevel2(array|CRDataNode $value)
 * @method CRDataNode getToCurrentFunctionLevel2 getToCurrentFunctionLevel2($index = null)
 * @method AbstractCREmployee setToFreelanceCompany() setToFreelanceCompany(array|CRCompany $value)
 * @method CRCompany getToFreelanceCompany getToFreelanceCompany($index = null)
 * @method AbstractCREmployee setMonthHourViews() setMonthHourViews(array|Collection $values)
 * @method Collection|CRMonthHourView getMonthHourViews getMonthHourViews()
 * @method AbstractCREmployee setToCurrentFunctionLevel1() setToCurrentFunctionLevel1(array|CRDataNode $value)
 * @method CRDataNode getToCurrentFunctionLevel1 getToCurrentFunctionLevel1($index = null)
 * @method AbstractCREmployee setTalentPoolMatches() setTalentPoolMatches(array|Collection $values)
 * @method Collection|CRTalentPoolMatch getTalentPoolMatches getTalentPoolMatches()
 * @method AbstractCREmployee setToConsentStageNode() setToConsentStageNode(array|CRDataNode $value)
 * @method CRDataNode getToConsentStageNode getToConsentStageNode($index = null)
 * @method AbstractCREmployee setToConsentPeriodNode() setToConsentPeriodNode(array|CRDataNode $value)
 * @method CRDataNode getToConsentPeriodNode getToConsentPeriodNode($index = null)
 */
abstract class AbstractCREmployee extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CREmployee';

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $maxDistance;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $minSalary;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $employeeID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $availableFromDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $matchCountMO;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $friWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $monWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $satWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sunWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $thuWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $tueWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $wedWorkMinutes;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $daysPerWeek;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $availableDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class PRBitVector
     * @allows_null 1
     * @width 64
     */
    public $documentBits;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $startDate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $maxFte;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $learnDutyDays;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasCar;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $phaseChainSystemKey;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phaseSystemStartDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase1StartDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase2StartDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase3StartDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $phase4StartDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $employeeInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $identificationValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $notes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $workingPermitValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $ambition;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $contractEndDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $educationInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $languageNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $skillNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $trainingNotes;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $ziekengeldPercentage;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $workingPermitCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $medicalInsurancePolicyCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $identificationCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $spaarPolicyCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $spaarOrganisation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $spaarAccountName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $spaarAccount;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $premieAccountName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 15
     */
    public $premieAccount;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phaseSystemFileNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $paymentAccountName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentAccountOld;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 80
     */
    public $contactInfo;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $holidayDays;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $hoursPerWeek;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $experienceInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $birthName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $identificationCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $identificationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $birthCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $holidayCorrectionsString;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $driversLicenseCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $driversLicenseCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $driversLicenseValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordX;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $coordY;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $currentSalary;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $currentConditions;

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
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $hobbies;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $sisKaartNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class PRBitVector
     * @allows_null 1
     * @width 64
     */
    public $checklistBits;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $minFte;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $sourceInfo;

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
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $experienceSinceDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $adminSyncDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $bonusNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $studyNotes;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $partnerBirthCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $partnerBirthDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerFirstName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $partnerFullFirstNames;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $partnerInitials;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $partnerLastName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerLastNamePrefix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $costCenter;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $costUnit;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $maritalStatus;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $children;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $costPrice;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $sellingPrice;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $reviewInfo;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $purchaseRate;

    /**
     * @cx_field true
     * @access private
     * @var float
     * @value_class NSDecimalNumber
     * @allows_null 1
     */
    public $salesFactor;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $partnerPersonalNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentBicCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentIbanCode;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $flags;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $paymentAccount;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $externalInfo;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $timesheetTypeKey;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $privacyApprovalDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $consentExpiryDate;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMatch")
     * @mandatory 0
     * @destination_entity CRMatch
     * @to_many 1
     * @name matches
     */
    public $matches;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 1
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWorkHistory")
     * @mandatory 0
     * @destination_entity CRWorkHistory
     * @to_many 1
     * @name workHistories
     */
    public $workHistories;

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
     * @var CRMedium
     * @OneToOne (targetEntity="CRMedium")
     * @mandatory 0
     * @destination_entity CRMedium
     * @to_many 0
     * @name toMedium
     */
    public $toMedium;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toExperienceNode
     * @default 1
     * @nodeType Ervaring
     */
    public $toExperienceNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRJob")
     * @mandatory 0
     * @destination_entity CRJob
     * @to_many 1
     * @name jobs
     */
    public $jobs;

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
     * @nodeType Productgroep
     */
    public $toProductNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductType1Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function1
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function2
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function3
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function3;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function4
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function4;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function5
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function5;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel1Function6
     * @default 0
     * @nodeType Functie0
     */
    public $toLevel1Function6;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function1
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function2
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function3
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function3;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function4
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function4;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function5
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function5;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLevel2Function6
     * @default 0
     * @nodeType Functie1
     */
    public $toLevel2Function6;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeEducation")
     * @mandatory 0
     * @destination_entity CREmployeeEducation
     * @to_many 1
     * @name educations
     */
    public $educations;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHour")
     * @mandatory 0
     * @destination_entity CRWeekHour
     * @to_many 1
     * @name allWeekHours
     */
    public $allWeekHours;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeLanguage")
     * @mandatory 0
     * @destination_entity CREmployeeLanguage
     * @to_many 1
     * @name languages
     */
    public $languages;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeSkill")
     * @mandatory 0
     * @destination_entity CREmployeeSkill
     * @to_many 1
     * @name skills
     */
    public $skills;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeTraining")
     * @mandatory 0
     * @destination_entity CREmployeeTraining
     * @to_many 1
     * @name trainings
     */
    public $trainings;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction1Level1Node
     * @default 1
     * @nodeType Functie0
     */
    public $toFunction1Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction1Level2Node
     * @default 1
     * @nodeType Functie1
     */
    public $toFunction1Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toDriverLicenceNode
     * @default 1
     * @nodeType Rijbewijs
     */
    public $toDriverLicenceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAvailableWithinNode
     * @default 1
     * @nodeType Opzegtermijn
     */
    public $toAvailableWithinNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMeansOfTransportNode
     * @default 1
     * @nodeType Woon-werkvervoer
     */
    public $toMeansOfTransportNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCategoryNode
     * @default 1
     * @nodeType Kandidaat-categorie
     */
    public $toCategoryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleLevel1Node
     * @default 1
     * @nodeType Salarisschaal0
     */
    public $toSalaryScaleLevel1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalaryScaleLevel2Node
     * @default 0
     * @nodeType Salarisschaal1
     */
    public $toSalaryScaleLevel2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel1
     * @default 1
     * @nodeType Branche0
     */
    public $toBrancheLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBrancheLevel2
     * @default 1
     * @nodeType Branche1
     */
    public $toBrancheLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction2Level1Node
     * @default 0
     * @nodeType Functie0
     */
    public $toFunction2Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction2Level2Node
     * @default 0
     * @nodeType Functie1
     */
    public $toFunction2Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction3Level1Node
     * @default 0
     * @nodeType Functie0
     */
    public $toFunction3Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunction3Level2Node
     * @default 0
     * @nodeType Functie1
     */
    public $toFunction3Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMinSalaryCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toMinSalaryCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toContractTypeNode
     * @default 1
     * @nodeType Kandidaat-Contract-type
     */
    public $toContractTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRWeekHourView")
     * @mandatory 0
     * @destination_entity CRWeekHourView
     * @to_many 1
     * @name weekHourViews
     */
    public $weekHourViews;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name _todos
     * @inverseName toEmployee
     */
    public $_todos;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkUnitNode
     * @default 1
     * @nodeType Werktijden-eenheid
     */
    public $toWorkUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRFinance")
     * @mandatory 0
     * @destination_entity CRFinance
     * @to_many 1
     * @name finances
     */
    public $finances;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toIdentificationTypeNode
     * @default 1
     * @nodeType Identiteitsbewijs
     */
    public $toIdentificationTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMaritalStatusNode
     * @default 1
     * @nodeType Burgelijke-staat
     */
    public $toMaritalStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceCompanyNode
     * @default 1
     * @nodeType Zorgverzekeraar0
     */
    public $toMedicalInsuranceCompanyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceTypeNode
     * @default 1
     * @nodeType Zorgverzekeraar-type
     */
    public $toMedicalInsuranceTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toNationalityNode
     * @default 1
     * @nodeType Nationaliteit
     */
    public $toNationalityNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toOptional1Node
     * @default 1
     * @nodeType Optioneel1
     */
    public $toOptional1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPaymentModeNode
     * @default 1
     * @nodeType Betaalwijze
     */
    public $toPaymentModeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche1Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche1Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche1Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche1Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche2Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche2Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche2Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche2Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche3Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche3Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche3Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche3Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche4Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche4Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche4Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche4Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche5Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche5Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche5Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche5Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche6Level1Node
     * @default 1
     * @nodeType Branche0
     */
    public $toPrefBranche6Level1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefBranche6Level2Node
     * @default 1
     * @nodeType Branche1
     */
    public $toPrefBranche6Level2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefContractTypeNode
     * @default 1
     * @nodeType Dienstverband
     */
    public $toPrefContractTypeNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion1Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion2Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion3Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion3Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion4Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion4Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion5Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion5Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefRegion6Node
     * @default 0
     * @nodeType Regio
     */
    public $toPrefRegion6Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toWorkLevelNode
     * @default 1
     * @nodeType Functieniveau
     */
    public $toWorkLevelNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry1Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry1Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry2Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry3Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry3Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry4Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry4Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry5Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry5Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPrefCountry6Node
     * @default 1
     * @nodeType Land
     */
    public $toPrefCountry6Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toIdentificationCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toIdentificationCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toBirthCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toBirthCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toEmployee
     */
    public $toDoUsers;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentSalaryCurrencyNode
     * @default 1
     * @nodeType Valuta
     */
    public $toCurrentSalaryCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentSalaryPeriodNode
     * @default 1
     * @nodeType Salarisperiode
     */
    public $toCurrentSalaryPeriodNode;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMinSalaryUnitNode
     * @default 1
     * @nodeType Inkooptarief-eenheid
     */
    public $toMinSalaryUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     * @default 1
     * @nodeType Bron-Kandidaat
     */
    public $toSourceNode;

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
     * @var Collection
     * @OneToMany (targetEntity="CREmployeeDocument")
     * @mandatory 0
     * @destination_entity CREmployeeDocument
     * @to_many 1
     * @name documents
     */
    public $documents;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPartnerGenderNode
     */
    public $toPartnerGenderNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceUnitNode
     */
    public $toCostPriceUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCostPriceCurrencyNode
     */
    public $toCostPriceCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceUnitNode
     */
    public $toSellingPriceUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSellingPriceCurrencyNode
     */
    public $toSellingPriceCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toMedicalInsuranceAgencyNode
     * @default 0
     * @nodeType Zorgverzekeraar1
     */
    public $toMedicalInsuranceAgencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateCurrencyNode
     */
    public $toPurchaseRateCurrencyNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toPurchaseRateUnitNode
     */
    public $toPurchaseRateUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode1
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode2
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode3
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode3;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode4
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode4;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode5
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode5;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductTypeNode6
     * @default 1
     * @nodeType Product
     */
    public $toProductTypeNode6;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductType2Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType2Node;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProductType3Node
     * @default 1
     * @nodeType Product
     */
    public $toProductType3Node;

    /**
     * @cx_field true
     * @access private
     * @var CRWorkHistory
     * @OneToOne (targetEntity="CRWorkHistory")
     * @mandatory 0
     * @destination_entity CRWorkHistory
     * @to_many 0
     * @name toCurrentWorkHistory
     */
    public $toCurrentWorkHistory;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentBrancheLevel1
     */
    public $toCurrentBrancheLevel1;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentBrancheLevel2
     */
    public $toCurrentBrancheLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentFunctionLevel2
     */
    public $toCurrentFunctionLevel2;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toFreelanceCompany
     */
    public $toFreelanceCompany;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRMonthHourView")
     * @mandatory 0
     * @destination_entity CRMonthHourView
     * @to_many 1
     * @name monthHourViews
     */
    public $monthHourViews;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCurrentFunctionLevel1
     */
    public $toCurrentFunctionLevel1;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolMatch")
     * @mandatory 0
     * @destination_entity CRTalentPoolMatch
     * @to_many 1
     * @name talentPoolMatches
     */
    public $talentPoolMatches;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toConsentStageNode
     * @default 1
     * @nodeType Consent-stage
     */
    public $toConsentStageNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toConsentPeriodNode
     * @default 1
     * @nodeType Consent-period
     */
    public $toConsentPeriodNode;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("employeeID");
        $entityConfiguration->setName("CREmployee");
    }
}
