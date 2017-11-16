<?php
$routes = [
    'metadata',
    'getSessionToken',
    'getAccountTypes',
    'getAttachmentTypes',
    'getAvailableCountries',
    'getAvailableCities',
    'getAvailableSiteOrganizations',
    'getSitesGroupBySiteOrganizations',
    'getUserByApiKey',
    'createUser',
    'updateUser',
    'deleteUser',
    'validateSessionToken',
    'deleteSessionToken',
    'getCredentials',
    'createCredentials',
    'updateCredentials',
    'deleteCredentials',
    'getCredentialsHistoryChanges',
    'getAccounts',
    'getTransactions',
    'getTransactionsCount',
    'getAttachments',
    'getAttachmentsCount',
    'getAttachment',
    'getExtractedDataFromAttachment',
    'createTaxpayer',
    'updateTaxpayer',
    'getTaxpayers',
    'stampNewInvoice',
    'checkStructure',
    'getAllStampedInvoices',
    'cancelInvoice',
    'getProviders'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

