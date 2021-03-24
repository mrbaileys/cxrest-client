<?php

namespace Carerix\Api\Rest\Entity\AbstractEntity;

use Carerix\Api\Rest\Collection;
use Carerix\Api\Rest\DataType\NSArray;
use Carerix\Api\Rest\DataType\NSDictionary;
use Carerix\Api\Rest\Entity\CRAgency;
use Carerix\Api\Rest\Entity\CRAttachment;
use Carerix\Api\Rest\Entity\CRAttributeChange;
use Carerix\Api\Rest\Entity\CRCompany;
use Carerix\Api\Rest\Entity\CRConfigProfile;
use Carerix\Api\Rest\Entity\CRDataNode;
use Carerix\Api\Rest\Entity\CREmailAddress;
use Carerix\Api\Rest\Entity\CREmployee;
use Carerix\Api\Rest\Entity\CRJob;
use Carerix\Api\Rest\Entity\CRLeadUser;
use Carerix\Api\Rest\Entity\CROpportunityUser;
use Carerix\Api\Rest\Entity\CRTalentPoolUser;
use Carerix\Api\Rest\Entity\CRToDo;
use Carerix\Api\Rest\Entity\CRToDoUser;
use Carerix\Api\Rest\Entity\CRUrl;
use Carerix\Api\Rest\Entity\CRUser;
use Carerix\Api\Rest\Entity\CRUserCompany;
use Carerix\Api\Rest\Entity\CRUserRole;
use Carerix\Api\Rest\Entity\CRUserStatus;
use Carerix\Api\Rest\Entity\CRVacancy;
use Carerix\Api\Rest\Entity\CRVacancyUser;

/**
 * THIS FILE WAS GENERATED AUTOMATICALLY USING REST API ENTITY DESCRIBE SERVICE. DO NOT MODIFY IT.
 * YOUR CHANGES WILL BE LOST. INSTEAD MODIFY CONCRETE IMPLEMENTATION OF THIS CLASS IF NECESSARY.
 * @version Fri, 04 Sep 2020 13:43:51 +0000
 * @method AbstractCRCandidate setPhoto() setPhoto(string $value)
 * @method string getPhoto getPhoto()
 * @method AbstractCRCandidate setCompanyInformation() setCompanyInformation(string $value)
 * @method string getCompanyInformation getCompanyInformation()
 * @method AbstractCRCandidate setVisitAddress() setVisitAddress(string $value)
 * @method string getVisitAddress getVisitAddress()
 * @method AbstractCRCandidate setAddress() setAddress(string $value)
 * @method string getAddress getAddress()
 * @method AbstractCRCandidate setContactID() setContactID(integer $value)
 * @method integer getContactID getContactID()
 * @method AbstractCRCandidate setEmailAddress() setEmailAddress(string $value)
 * @method string getEmailAddress getEmailAddress()
 * @method AbstractCRCandidate setHomeEmailAddress() setHomeEmailAddress(string $value)
 * @method string getHomeEmailAddress getHomeEmailAddress()
 * @method AbstractCRCandidate setBusinessEmailAddress() setBusinessEmailAddress(string $value)
 * @method string getBusinessEmailAddress getBusinessEmailAddress()
 * @method AbstractCRCandidate setPrivateEmailAddress() setPrivateEmailAddress(string $value)
 * @method string getPrivateEmailAddress getPrivateEmailAddress()
 * @method AbstractCRCandidate setBusinessOrPrivateEmailAddress() setBusinessOrPrivateEmailAddress(string $value)
 * @method string getBusinessOrPrivateEmailAddress getBusinessOrPrivateEmailAddress()
 * @method AbstractCRCandidate setPrivateOrBusinessEmailAddress() setPrivateOrBusinessEmailAddress(string $value)
 * @method string getPrivateOrBusinessEmailAddress getPrivateOrBusinessEmailAddress()
 * @method AbstractCRCandidate setBirthDay() setBirthDay(string $value)
 * @method string getBirthDay getBirthDay()
 * @method AbstractCRCandidate setHasPhoto() setHasPhoto(integer $value)
 * @method integer getHasPhoto getHasPhoto()
 * @method AbstractCRCandidate setSystemLanguage() setSystemLanguage(string $value)
 * @method string getSystemLanguage getSystemLanguage()
 * @method AbstractCRCandidate setModificationDate() setModificationDate(string $value)
 * @method string getModificationDate getModificationDate()
 * @method AbstractCRCandidate setCreationDate() setCreationDate(string $value)
 * @method string getCreationDate getCreationDate()
 * @method AbstractCRCandidate setFirstName() setFirstName(string $value)
 * @method string getFirstName getFirstName()
 * @method AbstractCRCandidate setInitials() setInitials(string $value)
 * @method string getInitials getInitials()
 * @method AbstractCRCandidate setLastName() setLastName(string $value)
 * @method string getLastName getLastName()
 * @method AbstractCRCandidate setPassword() setPassword(string $value)
 * @method string getPassword getPassword()
 * @method AbstractCRCandidate setUserName() setUserName(string $value)
 * @method string getUserName getUserName()
 * @method AbstractCRCandidate setWantsCookie() setWantsCookie(integer $value)
 * @method integer getWantsCookie getWantsCookie()
 * @method AbstractCRCandidate setUserID() setUserID(integer $value)
 * @method integer getUserID getUserID()
 * @method AbstractCRCandidate setLastNamePrefix() setLastNamePrefix(string $value)
 * @method string getLastNamePrefix getLastNamePrefix()
 * @method AbstractCRCandidate setCity() setCity(string $value)
 * @method string getCity getCity()
 * @method AbstractCRCandidate setDeleted() setDeleted(integer $value)
 * @method integer getDeleted getDeleted()
 * @method AbstractCRCandidate setBirthDate() setBirthDate(string $value)
 * @method string getBirthDate getBirthDate()
 * @method AbstractCRCandidate setHouseNumber() setHouseNumber(string $value)
 * @method string getHouseNumber getHouseNumber()
 * @method AbstractCRCandidate setJobTitle() setJobTitle(string $value)
 * @method string getJobTitle getJobTitle()
 * @method AbstractCRCandidate setPostalCode() setPostalCode(string $value)
 * @method string getPostalCode getPostalCode()
 * @method AbstractCRCandidate setStreet() setStreet(string $value)
 * @method string getStreet getStreet()
 * @method AbstractCRCandidate setIsNewUser() setIsNewUser(integer $value)
 * @method integer getIsNewUser getIsNewUser()
 * @method AbstractCRCandidate setAbbreviation() setAbbreviation(string $value)
 * @method string getAbbreviation getAbbreviation()
 * @method AbstractCRCandidate setImportID() setImportID(string $value)
 * @method string getImportID getImportID()
 * @method AbstractCRCandidate setHouseNumberSuffix() setHouseNumberSuffix(string $value)
 * @method string getHouseNumberSuffix getHouseNumberSuffix()
 * @method AbstractCRCandidate setSuffix() setSuffix(string $value)
 * @method string getSuffix getSuffix()
 * @method AbstractCRCandidate setFullAddress() setFullAddress(string $value)
 * @method string getFullAddress getFullAddress()
 * @method AbstractCRCandidate setExportID() setExportID(integer $value)
 * @method integer getExportID getExportID()
 * @method AbstractCRCandidate setVisitCity() setVisitCity(string $value)
 * @method string getVisitCity getVisitCity()
 * @method AbstractCRCandidate setVisitNumber() setVisitNumber(string $value)
 * @method string getVisitNumber getVisitNumber()
 * @method AbstractCRCandidate setVisitPostalCode() setVisitPostalCode(string $value)
 * @method string getVisitPostalCode getVisitPostalCode()
 * @method AbstractCRCandidate setVisitStreet() setVisitStreet(string $value)
 * @method string getVisitStreet getVisitStreet()
 * @method AbstractCRCandidate setVisitFullAddress() setVisitFullAddress(string $value)
 * @method string getVisitFullAddress getVisitFullAddress()
 * @method AbstractCRCandidate setVisitNumberSuffix() setVisitNumberSuffix(string $value)
 * @method string getVisitNumberSuffix getVisitNumberSuffix()
 * @method AbstractCRCandidate setSourceInfo() setSourceInfo(string $value)
 * @method string getSourceInfo getSourceInfo()
 * @method AbstractCRCandidate setIsLoginBlocked() setIsLoginBlocked(integer $value)
 * @method integer getIsLoginBlocked getIsLoginBlocked()
 * @method AbstractCRCandidate setForwardEmail() setForwardEmail(integer $value)
 * @method integer getForwardEmail getForwardEmail()
 * @method AbstractCRCandidate setExternalIdentifier() setExternalIdentifier(string $value)
 * @method string getExternalIdentifier getExternalIdentifier()
 * @method AbstractCRCandidate setTrialPeriodAmount() setTrialPeriodAmount(integer $value)
 * @method integer getTrialPeriodAmount getTrialPeriodAmount()
 * @method AbstractCRCandidate setConditionsInformation() setConditionsInformation(string $value)
 * @method string getConditionsInformation getConditionsInformation()
 * @method AbstractCRCandidate setFaxNumber() setFaxNumber(string $value)
 * @method string getFaxNumber getFaxNumber()
 * @method AbstractCRCandidate setFaxNumberBusiness() setFaxNumberBusiness(string $value)
 * @method string getFaxNumberBusiness getFaxNumberBusiness()
 * @method AbstractCRCandidate setInternalAddress() setInternalAddress(string $value)
 * @method string getInternalAddress getInternalAddress()
 * @method AbstractCRCandidate setLastContactDate() setLastContactDate(string $value)
 * @method string getLastContactDate getLastContactDate()
 * @method AbstractCRCandidate setMobileNumber() setMobileNumber(string $value)
 * @method string getMobileNumber getMobileNumber()
 * @method AbstractCRCandidate setMobileNumberBusiness() setMobileNumberBusiness(string $value)
 * @method string getMobileNumberBusiness getMobileNumberBusiness()
 * @method AbstractCRCandidate setOrganisationInformation() setOrganisationInformation(string $value)
 * @method string getOrganisationInformation getOrganisationInformation()
 * @method AbstractCRCandidate setPhoneNumber() setPhoneNumber(string $value)
 * @method string getPhoneNumber getPhoneNumber()
 * @method AbstractCRCandidate setPhoneNumberBusiness() setPhoneNumberBusiness(string $value)
 * @method string getPhoneNumberBusiness getPhoneNumberBusiness()
 * @method AbstractCRCandidate setTitle() setTitle(string $value)
 * @method string getTitle getTitle()
 * @method AbstractCRCandidate setUserInformation() setUserInformation(string $value)
 * @method string getUserInformation getUserInformation()
 * @method AbstractCRCandidate setIsTokenWorkActive() setIsTokenWorkActive(integer $value)
 * @method integer getIsTokenWorkActive getIsTokenWorkActive()
 * @method AbstractCRCandidate setTokenWork() setTokenWork(string $value)
 * @method string getTokenWork getTokenWork()
 * @method AbstractCRCandidate setTokenWorkValidUntilDate() setTokenWorkValidUntilDate(string $value)
 * @method string getTokenWorkValidUntilDate getTokenWorkValidUntilDate()
 * @method AbstractCRCandidate setTokenHome() setTokenHome(string $value)
 * @method string getTokenHome getTokenHome()
 * @method AbstractCRCandidate setIsTokenHomeActive() setIsTokenHomeActive(integer $value)
 * @method integer getIsTokenHomeActive getIsTokenHomeActive()
 * @method AbstractCRCandidate setTokenHomeValidUntilDate() setTokenHomeValidUntilDate(string $value)
 * @method string getTokenHomeValidUntilDate getTokenHomeValidUntilDate()
 * @method AbstractCRCandidate setTokenRoad() setTokenRoad(string $value)
 * @method string getTokenRoad getTokenRoad()
 * @method AbstractCRCandidate setIsTokenRoadActive() setIsTokenRoadActive(integer $value)
 * @method integer getIsTokenRoadActive getIsTokenRoadActive()
 * @method AbstractCRCandidate setTokenEmailAddress() setTokenEmailAddress(string $value)
 * @method string getTokenEmailAddress getTokenEmailAddress()
 * @method AbstractCRCandidate setIsTbaActive() setIsTbaActive(integer $value)
 * @method integer getIsTbaActive getIsTbaActive()
 * @method AbstractCRCandidate setPasswordValidUntilDate() setPasswordValidUntilDate(string $value)
 * @method string getPasswordValidUntilDate getPasswordValidUntilDate()
 * @method AbstractCRCandidate setOutOfOfficeDate() setOutOfOfficeDate(string $value)
 * @method string getOutOfOfficeDate getOutOfOfficeDate()
 * @method AbstractCRCandidate setMailboxURLString() setMailboxURLString(string $value)
 * @method string getMailboxURLString getMailboxURLString()
 * @method AbstractCRCandidate setMailboxDate() setMailboxDate(string $value)
 * @method string getMailboxDate getMailboxDate()
 * @method AbstractCRCandidate setMailboxFlags() setMailboxFlags(integer $value)
 * @method integer getMailboxFlags getMailboxFlags()
 * @method AbstractCRCandidate setOutOfOfficeText() setOutOfOfficeText(string $value)
 * @method string getOutOfOfficeText getOutOfOfficeText()
 * @method AbstractCRCandidate setTimeZoneName() setTimeZoneName(string $value)
 * @method string getTimeZoneName getTimeZoneName()
 * @method AbstractCRCandidate setIsActive() setIsActive(integer $value)
 * @method integer getIsActive getIsActive()
 * @method AbstractCRCandidate setHomeCity() setHomeCity(string $value)
 * @method string getHomeCity getHomeCity()
 * @method AbstractCRCandidate setHomeFullAddress() setHomeFullAddress(string $value)
 * @method string getHomeFullAddress getHomeFullAddress()
 * @method AbstractCRCandidate setHomeNumber() setHomeNumber(string $value)
 * @method string getHomeNumber getHomeNumber()
 * @method AbstractCRCandidate setHomeNumberSuffix() setHomeNumberSuffix(string $value)
 * @method string getHomeNumberSuffix getHomeNumberSuffix()
 * @method AbstractCRCandidate setHomePostalCode() setHomePostalCode(string $value)
 * @method string getHomePostalCode getHomePostalCode()
 * @method AbstractCRCandidate setHomeStreet() setHomeStreet(string $value)
 * @method string getHomeStreet getHomeStreet()
 * @method AbstractCRCandidate setAlternativeCity() setAlternativeCity(string $value)
 * @method string getAlternativeCity getAlternativeCity()
 * @method AbstractCRCandidate setAlternativeFullAddress() setAlternativeFullAddress(string $value)
 * @method string getAlternativeFullAddress getAlternativeFullAddress()
 * @method AbstractCRCandidate setAlternativeNumber() setAlternativeNumber(string $value)
 * @method string getAlternativeNumber getAlternativeNumber()
 * @method AbstractCRCandidate setAlternativeNumberSuffix() setAlternativeNumberSuffix(string $value)
 * @method string getAlternativeNumberSuffix getAlternativeNumberSuffix()
 * @method AbstractCRCandidate setAlternativePostalCode() setAlternativePostalCode(string $value)
 * @method string getAlternativePostalCode getAlternativePostalCode()
 * @method AbstractCRCandidate setAlternativeStreet() setAlternativeStreet(string $value)
 * @method string getAlternativeStreet getAlternativeStreet()
 * @method AbstractCRCandidate setIsEmailInConfidential() setIsEmailInConfidential(integer $value)
 * @method integer getIsEmailInConfidential getIsEmailInConfidential()
 * @method AbstractCRCandidate setMailboxSettings() setMailboxSettings(NSDictionary|array $value)
 * @method NSDictionary|array getMailboxSettings getMailboxSettings()
 * @method AbstractCRCandidate setUrl() setUrl(string $value)
 * @method string getUrl getUrl()
 * @method AbstractCRCandidate setIsEmailOutConfidential() setIsEmailOutConfidential(integer $value)
 * @method integer getIsEmailOutConfidential getIsEmailOutConfidential()
 * @method AbstractCRCandidate setFullFirstNames() setFullFirstNames(string $value)
 * @method string getFullFirstNames getFullFirstNames()
 * @method AbstractCRCandidate setUserBonuses() setUserBonuses(NSArray|array $value)
 * @method NSArray|array getUserBonuses getUserBonuses()
 * @method AbstractCRCandidate setSofiNumber() setSofiNumber(string $value)
 * @method string getSofiNumber getSofiNumber()
 * @method AbstractCRCandidate setGoals() setGoals(NSArray|array $value)
 * @method NSArray|array getGoals getGoals()
 * @method AbstractCRCandidate setPromoText() setPromoText(string $value)
 * @method string getPromoText getPromoText()
 * @method AbstractCRCandidate setState() setState(NSDictionary|array $value)
 * @method NSDictionary|array getState getState()
 * @method AbstractCRCandidate setAdditionalInfo() setAdditionalInfo(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfo getAdditionalInfo()
 * @method AbstractCRCandidate setAdditionalInfoPartial() setAdditionalInfoPartial(NSDictionary|array $value)
 * @method NSDictionary|array getAdditionalInfoPartial getAdditionalInfoPartial()
 * @method AbstractCRCandidate setPasswordHash() setPasswordHash(string $value)
 * @method string getPasswordHash getPasswordHash()
 * @method AbstractCRCandidate setPreviewDelay() setPreviewDelay(integer $value)
 * @method integer getPreviewDelay getPreviewDelay()
 * @method AbstractCRCandidate setEncryptedPassword() setEncryptedPassword(string $value)
 * @method string getEncryptedPassword getEncryptedPassword()
 * @method AbstractCRCandidate setEmailNotificationPopup() setEmailNotificationPopup(integer $value)
 * @method integer getEmailNotificationPopup getEmailNotificationPopup()
 * @method AbstractCRCandidate setVisitAddressUseCompanyVisitAddress() setVisitAddressUseCompanyVisitAddress(integer $value)
 * @method integer getVisitAddressUseCompanyVisitAddress getVisitAddressUseCompanyVisitAddress()
 * @method AbstractCRCandidate setAddressUseCompanyMailingAddress() setAddressUseCompanyMailingAddress(integer $value)
 * @method integer getAddressUseCompanyMailingAddress getAddressUseCompanyMailingAddress()
 * @method AbstractCRCandidate setMultiRoleUserID() setMultiRoleUserID(integer $value)
 * @method integer getMultiRoleUserID getMultiRoleUserID()
 * @method AbstractCRCandidate setRoleName() setRoleName(string $value)
 * @method string getRoleName getRoleName()
 * @method AbstractCRCandidate setIndicationColor() setIndicationColor(string $value)
 * @method string getIndicationColor getIndicationColor()
 * @method AbstractCRCandidate setIsMasterUser() setIsMasterUser(integer $value)
 * @method integer getIsMasterUser getIsMasterUser()
 * @method AbstractCRCandidate setIsOutOfOfficeForward() setIsOutOfOfficeForward(integer $value)
 * @method integer getIsOutOfOfficeForward getIsOutOfOfficeForward()
 * @method AbstractCRCandidate setOutOfOfficeForwardAddress() setOutOfOfficeForwardAddress(string $value)
 * @method string getOutOfOfficeForwardAddress getOutOfOfficeForwardAddress()
 * @method AbstractCRCandidate setAdditionalAgenciesIDs() setAdditionalAgenciesIDs(NSArray|array $value)
 * @method NSArray|array getAdditionalAgenciesIDs getAdditionalAgenciesIDs()
 * @method AbstractCRCandidate setLoginAttemptCount() setLoginAttemptCount(integer $value)
 * @method integer getLoginAttemptCount getLoginAttemptCount()
 * @method AbstractCRCandidate setLastLoginAttemptDate() setLastLoginAttemptDate(string $value)
 * @method string getLastLoginAttemptDate getLastLoginAttemptDate()
 * @method AbstractCRCandidate setMailboxOAuth2Settings() setMailboxOAuth2Settings(NSDictionary|array $value)
 * @method NSDictionary|array getMailboxOAuth2Settings getMailboxOAuth2Settings()
 * @method AbstractCRCandidate setHashKey() setHashKey(string $value)
 * @method string getHashKey getHashKey()
 * @method AbstractCRCandidate setHashDate() setHashDate(string $value)
 * @method string getHashDate getHashDate()
 * @method AbstractCRCandidate setGroups() setGroups(array|Collection $values)
 * @method Collection|CRDataNode getGroups getGroups()
 * @method AbstractCRCandidate setToDos() setToDos(array|Collection $values)
 * @method Collection|CRToDo getToDos getToDos()
 * @method AbstractCRCandidate setJobs() setJobs(array|Collection $values)
 * @method Collection|CRJob getJobs getJobs()
 * @method AbstractCRCandidate setToCompany() setToCompany(array|CRCompany $value)
 * @method CRCompany getToCompany getToCompany($index = null)
 * @method AbstractCRCandidate setVacancies() setVacancies(array|Collection $values)
 * @method Collection|CRVacancy getVacancies getVacancies()
 * @method AbstractCRCandidate setClients() setClients(array|Collection $values)
 * @method Collection|CRUser getClients getClients()
 * @method AbstractCRCandidate setAccounts() setAccounts(array|Collection $values)
 * @method Collection|CRCompany getAccounts getAccounts()
 * @method AbstractCRCandidate setCreatedBy() setCreatedBy(array|CRUser $value)
 * @method CRUser getCreatedBy getCreatedBy($index = null)
 * @method AbstractCRCandidate setModifiedBy() setModifiedBy(array|CRUser $value)
 * @method CRUser getModifiedBy getModifiedBy($index = null)
 * @method AbstractCRCandidate setSingleOwner() setSingleOwner(array|CRUser $value)
 * @method CRUser getSingleOwner getSingleOwner($index = null)
 * @method AbstractCRCandidate setAgency() setAgency(array|CRAgency $value)
 * @method CRAgency getAgency getAgency($index = null)
 * @method AbstractCRCandidate setAttachments() setAttachments(array|Collection $values)
 * @method Collection|CRAttachment getAttachments getAttachments()
 * @method AbstractCRCandidate setToProvinceNode() setToProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToProvinceNode getToProvinceNode($index = null)
 * @method AbstractCRCandidate setToSingleStatusNode() setToSingleStatusNode(array|CRDataNode $value)
 * @method CRDataNode getToSingleStatusNode getToSingleStatusNode($index = null)
 * @method AbstractCRCandidate setToFunctionNode() setToFunctionNode(array|CRDataNode $value)
 * @method CRDataNode getToFunctionNode getToFunctionNode($index = null)
 * @method AbstractCRCandidate setToLanguageNode() setToLanguageNode(array|CRDataNode $value)
 * @method CRDataNode getToLanguageNode getToLanguageNode($index = null)
 * @method AbstractCRCandidate setToProductNode() setToProductNode(array|CRDataNode $value)
 * @method CRDataNode getToProductNode getToProductNode($index = null)
 * @method AbstractCRCandidate setToGenderNode() setToGenderNode(array|CRDataNode $value)
 * @method CRDataNode getToGenderNode getToGenderNode($index = null)
 * @method AbstractCRCandidate setToCountryNode() setToCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToCountryNode getToCountryNode($index = null)
 * @method AbstractCRCandidate setToVisitCountryNode() setToVisitCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitCountryNode getToVisitCountryNode($index = null)
 * @method AbstractCRCandidate setToVisitProvinceNode() setToVisitProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToVisitProvinceNode getToVisitProvinceNode($index = null)
 * @method AbstractCRCandidate setToSourceNode() setToSourceNode(array|CRDataNode $value)
 * @method CRDataNode getToSourceNode getToSourceNode($index = null)
 * @method AbstractCRCandidate setStatuses() setStatuses(array|Collection $values)
 * @method Collection|CRUserStatus getStatuses getStatuses()
 * @method AbstractCRCandidate setToTrialPeriodUnitNode() setToTrialPeriodUnitNode(array|CRDataNode $value)
 * @method CRDataNode getToTrialPeriodUnitNode getToTrialPeriodUnitNode($index = null)
 * @method AbstractCRCandidate setToSalutationNode() setToSalutationNode(array|CRDataNode $value)
 * @method CRDataNode getToSalutationNode getToSalutationNode($index = null)
 * @method AbstractCRCandidate setToDoUsers() setToDoUsers(array|Collection $values)
 * @method Collection|CRToDoUser getToDoUsers getToDoUsers()
 * @method AbstractCRCandidate setEmployees() setEmployees(array|Collection $values)
 * @method Collection|CREmployee getEmployees getEmployees()
 * @method AbstractCRCandidate setGroupNodes() setGroupNodes(array|Collection $values)
 * @method Collection|CRDataNode getGroupNodes getGroupNodes()
 * @method AbstractCRCandidate setToUser() setToUser(array|CRUser $value)
 * @method CRUser getToUser getToUser($index = null)
 * @method AbstractCRCandidate setEmailAddresses() setEmailAddresses(array|Collection $values)
 * @method Collection|CREmailAddress getEmailAddresses getEmailAddresses()
 * @method AbstractCRCandidate setToUserRole() setToUserRole(array|CRUserRole $value)
 * @method CRUserRole getToUserRole getToUserRole($index = null)
 * @method AbstractCRCandidate setUserCompanies() setUserCompanies(array|Collection $values)
 * @method Collection|CRUserCompany getUserCompanies getUserCompanies()
 * @method AbstractCRCandidate setToSmtpServerNode() setToSmtpServerNode(array|CRDataNode $value)
 * @method CRDataNode getToSmtpServerNode getToSmtpServerNode($index = null)
 * @method AbstractCRCandidate setToSupplier() setToSupplier(array|CRCompany $value)
 * @method CRCompany getToSupplier getToSupplier($index = null)
 * @method AbstractCRCandidate setToHomeCountryNode() setToHomeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToHomeCountryNode getToHomeCountryNode($index = null)
 * @method AbstractCRCandidate setToHomeProvinceNode() setToHomeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToHomeProvinceNode getToHomeProvinceNode($index = null)
 * @method AbstractCRCandidate setToAlternativeCountryNode() setToAlternativeCountryNode(array|CRDataNode $value)
 * @method CRDataNode getToAlternativeCountryNode getToAlternativeCountryNode($index = null)
 * @method AbstractCRCandidate setToAlternativeProvinceNode() setToAlternativeProvinceNode(array|CRDataNode $value)
 * @method CRDataNode getToAlternativeProvinceNode getToAlternativeProvinceNode($index = null)
 * @method AbstractCRCandidate setUrls() setUrls(array|Collection $values)
 * @method Collection|CRUrl getUrls getUrls()
 * @method AbstractCRCandidate setAttributeChanges() setAttributeChanges(array|Collection $values)
 * @method Collection|CRAttributeChange getAttributeChanges getAttributeChanges()
 * @method AbstractCRCandidate setToConfigProfile() setToConfigProfile(array|CRConfigProfile $value)
 * @method CRConfigProfile getToConfigProfile getToConfigProfile($index = null)
 * @method AbstractCRCandidate setToMultiRoleUser() setToMultiRoleUser(array|CRUser $value)
 * @method CRUser getToMultiRoleUser getToMultiRoleUser($index = null)
 * @method AbstractCRCandidate setAdditionalRoles() setAdditionalRoles(array|Collection $values)
 * @method Collection|CRUser getAdditionalRoles getAdditionalRoles()
 * @method AbstractCRCandidate setUserLeads() setUserLeads(array|Collection $values)
 * @method Collection|CRLeadUser getUserLeads getUserLeads()
 * @method AbstractCRCandidate setUserVacancies() setUserVacancies(array|Collection $values)
 * @method Collection|CRVacancyUser getUserVacancies getUserVacancies()
 * @method AbstractCRCandidate setUserOpportunities() setUserOpportunities(array|Collection $values)
 * @method Collection|CROpportunityUser getUserOpportunities getUserOpportunities()
 * @method AbstractCRCandidate setTalentPoolUsers() setTalentPoolUsers(array|Collection $values)
 * @method Collection|CRTalentPoolUser getTalentPoolUsers getTalentPoolUsers()
 */
abstract class AbstractCRCandidate extends \Carerix\Api\Rest\Entity
{
    const ENTITY = 'CRCandidate';

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $photo;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $companyInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $visitAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $address;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $contactID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $emailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $homeEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $businessEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $privateEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $businessOrPrivateEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $privateOrBusinessEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $birthDay;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $hasPhoto;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width
     */
    public $systemLanguage;

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
     * @value_class NSCalendarDate
     * @allows_null 0
     */
    public $creationDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $firstName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 12
     */
    public $initials;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $lastName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $password;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $userName;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $wantsCookie;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $userID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $lastNamePrefix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $city;

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
     * @allows_null 1
     */
    public $birthDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $houseNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $jobTitle;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $postalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $street;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $isNewUser;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $abbreviation;

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
     * @width 10
     */
    public $houseNumberSuffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $suffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fullAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $exportID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $visitCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $visitNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $visitPostalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $visitStreet;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $visitFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $visitNumberSuffix;

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
    public $isLoginBlocked;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $forwardEmail;

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
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $trialPeriodAmount;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $conditionsInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $faxNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $faxNumberBusiness;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $internalAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastContactDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $mobileNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $mobileNumberBusiness;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $organisationInformation;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phoneNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $phoneNumberBusiness;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $title;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $userInformation;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenWorkActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenWork;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenWorkValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenHome;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenHomeActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $tokenHomeValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $tokenRoad;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTokenRoadActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $tokenEmailAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isTbaActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $passwordValidUntilDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $outOfOfficeDate;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $mailboxURLString;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $mailboxDate;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $mailboxFlags;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $outOfOfficeText;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $timeZoneName;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isActive;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $homeCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $homeFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $homeNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $homeNumberSuffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $homePostalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $homeStreet;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $alternativeCity;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $alternativeFullAddress;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $alternativeNumber;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 10
     */
    public $alternativeNumberSuffix;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 30
     */
    public $alternativePostalCode;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 60
     */
    public $alternativeStreet;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailInConfidential;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $mailboxSettings;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 100
     */
    public $url;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isEmailOutConfidential;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $fullFirstNames;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $userBonuses;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 40
     */
    public $sofiNumber;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $goals;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $promoText;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $state;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 0
     */
    public $additionalInfo;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 0
     */
    public $additionalInfoPartial;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 200
     */
    public $passwordHash;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $previewDelay;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 32
     */
    public $encryptedPassword;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $emailNotificationPopup;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $visitAddressUseCompanyVisitAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $addressUseCompanyMailingAddress;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $multiRoleUserID;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $roleName;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 20
     */
    public $indicationColor;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isMasterUser;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 0
     * @value_type s
     * @value_type_human short integer (16 bits)
     */
    public $isOutOfOfficeForward;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 255
     */
    public $outOfOfficeForwardAddress;

    /**
     * @cx_field true
     * @access private
     * @var NSArray|array
     * @value_class NSArray
     * @allows_null 1
     */
    public $additionalAgenciesIDs;

    /**
     * @cx_field true
     * @access private
     * @var integer
     * @value_class NSNumber
     * @allows_null 1
     * @value_type i
     * @value_type_human long integer (32 bits)
     */
    public $loginAttemptCount;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $lastLoginAttemptDate;

    /**
     * @cx_field true
     * @access private
     * @var NSDictionary|array
     * @value_class NSDictionary
     * @allows_null 1
     */
    public $mailboxOAuth2Settings;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSString
     * @allows_null 1
     * @width 1000000
     */
    public $hashKey;

    /**
     * @cx_field true
     * @access private
     * @var string
     * @value_class NSCalendarDate
     * @allows_null 1
     */
    public $hashDate;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groups
     */
    public $groups;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDo")
     * @mandatory 0
     * @destination_entity CRToDo
     * @to_many 1
     * @name toDos
     */
    public $toDos;

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
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toCompany
     */
    public $toCompany;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancy")
     * @mandatory 0
     * @destination_entity CRVacancy
     * @to_many 1
     * @name vacancies
     */
    public $vacancies;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 1
     * @name clients
     */
    public $clients;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 1
     * @name accounts
     */
    public $accounts;

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
     * @name singleOwner
     */
    public $singleOwner;

    /**
     * @cx_field true
     * @access private
     * @var CRAgency
     * @OneToOne (targetEntity="CRAgency")
     * @mandatory 0
     * @destination_entity CRAgency
     * @to_many 0
     * @name agency
     */
    public $agency;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSingleStatusNode
     * @default 1
     * @nodeType ${label}-status
     */
    public $toSingleStatusNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toFunctionNode
     * @default 1
     * @nodeType Contact-functie
     */
    public $toFunctionNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toLanguageNode
     * @default 1
     * @nodeType Taal
     */
    public $toLanguageNode;

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
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toGenderNode
     * @default 1
     * @nodeType Geslacht
     */
    public $toGenderNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVisitCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toVisitCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toVisitProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toVisitProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSourceNode
     * @default 0
     * @nodeType Bron-Contactpersoon
     */
    public $toSourceNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserStatus")
     * @mandatory 0
     * @destination_entity CRUserStatus
     * @to_many 1
     * @name statuses
     */
    public $statuses;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toTrialPeriodUnitNode
     * @default 1
     * @nodeType Proeftijd-eenheid
     */
    public $toTrialPeriodUnitNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSalutationNode
     * @default 1
     * @nodeType Aanspreekvorm
     */
    public $toSalutationNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRToDoUser")
     * @mandatory 0
     * @destination_entity CRToDoUser
     * @to_many 1
     * @name toDoUsers
     * @inverseName toUser
     */
    public $toDoUsers;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmployee")
     * @mandatory 0
     * @destination_entity CREmployee
     * @to_many 1
     * @name employees
     */
    public $employees;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 1
     * @name groupNodes
     */
    public $groupNodes;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toUser
     */
    public $toUser;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CREmailAddress")
     * @mandatory 0
     * @destination_entity CREmailAddress
     * @to_many 1
     * @name emailAddresses
     */
    public $emailAddresses;

    /**
     * @cx_field true
     * @access private
     * @var CRUserRole
     * @OneToOne (targetEntity="CRUserRole")
     * @mandatory 0
     * @destination_entity CRUserRole
     * @to_many 0
     * @name toUserRole
     */
    public $toUserRole;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUserCompany")
     * @mandatory 0
     * @destination_entity CRUserCompany
     * @to_many 1
     * @name userCompanies
     */
    public $userCompanies;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toSmtpServerNode
     * @default 1
     * @nodeType SMTP-server
     */
    public $toSmtpServerNode;

    /**
     * @cx_field true
     * @access private
     * @var CRCompany
     * @OneToOne (targetEntity="CRCompany")
     * @mandatory 0
     * @destination_entity CRCompany
     * @to_many 0
     * @name toSupplier
     */
    public $toSupplier;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHomeCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toHomeCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toHomeProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toHomeProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAlternativeCountryNode
     * @default 1
     * @nodeType Land
     */
    public $toAlternativeCountryNode;

    /**
     * @cx_field true
     * @access private
     * @var CRDataNode
     * @OneToOne (targetEntity="CRDataNode")
     * @mandatory 0
     * @destination_entity CRDataNode
     * @to_many 0
     * @name toAlternativeProvinceNode
     * @default 1
     * @nodeType Regio
     */
    public $toAlternativeProvinceNode;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUrl")
     * @mandatory 0
     * @destination_entity CRUrl
     * @to_many 1
     * @name urls
     */
    public $urls;

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
     * @var CRConfigProfile
     * @OneToOne (targetEntity="CRConfigProfile")
     * @mandatory 0
     * @destination_entity CRConfigProfile
     * @to_many 0
     * @name toConfigProfile
     */
    public $toConfigProfile;

    /**
     * @cx_field true
     * @access private
     * @var CRUser
     * @OneToOne (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 0
     * @name toMultiRoleUser
     */
    public $toMultiRoleUser;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRUser")
     * @mandatory 0
     * @destination_entity CRUser
     * @to_many 1
     * @name additionalRoles
     */
    public $additionalRoles;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRLeadUser")
     * @mandatory 0
     * @destination_entity CRLeadUser
     * @to_many 1
     * @name userLeads
     */
    public $userLeads;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRVacancyUser")
     * @mandatory 0
     * @destination_entity CRVacancyUser
     * @to_many 1
     * @name userVacancies
     */
    public $userVacancies;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CROpportunityUser")
     * @mandatory 0
     * @destination_entity CROpportunityUser
     * @to_many 1
     * @name userOpportunities
     */
    public $userOpportunities;

    /**
     * @cx_field true
     * @access private
     * @var Collection
     * @OneToMany (targetEntity="CRTalentPoolUser")
     * @mandatory 0
     * @destination_entity CRTalentPoolUser
     * @to_many 1
     * @name talentPoolUsers
     */
    public $talentPoolUsers;

    public static function configure(\Carerix\Api\Rest\EntityConfiguration $entityConfiguration)
    {
        parent::configure($entityConfiguration);
        $entityConfiguration->setIdentifierKey("candidateID");
        $entityConfiguration->setName("CRCandidate");
    }
}
