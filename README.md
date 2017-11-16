[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Paybook/functions?utm_source=RapidAPIGitHub_PaybookFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Paybook Package
Paybook is a hub that connects people with their financial world! Through bank connectivity and innovative technology, Paybook's solutions foster productivity and fiscal clarity to improve the lives and operations of individuals and businesses around the globe.Integrate your software solutions with financial institutions, government agencies, and utility service providers for a steady flow of financial data and digital stamping services.
* Domain: [www.paybook.com](https:\/\/www.paybook.com\/w\/sync)
* Credentials: apiKey

## How to get credentials: 
0. Register on the [www.paybook.com](https:\/\/www.paybook.com)
1. [Create](https:\/\/www.paybook.com\/w\/sync) an profile for a new API credentials
2. After creation profile , you will see apiKey
 
## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Paybook.getSessionToken
Create a session token.Sessions are access tokens for the final user in order to consume Sync endpoints. Sessions expire after 5 minutes of inactivity and should be used for creating or updating credentials.

| Field | Type  | Description
|-------|-------|----------
| apiKey| credentials| Developer Token given on the developer.
| userId| String| Id of the user.

## Paybook.getAccountTypes
Return account types.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| fields      | List  | Select fields to be returned.
| skip        | Number| Skip rows to be returned.
| limit       | Number| Limit the number of rows to be returned.
| order       | String| Order the rows to be returned.

## Paybook.getAttachmentTypes
Return attachment types.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| fields      | List  | Select fields to be returned.
| skip        | Number| Skip rows to be returned.
| limit       | Number| Limit the number of rows to be returned.
| order       | String| Order the rows to be returned.

## Paybook.getAvailableCountries
Return available countries.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| fields      | List  | Select fields to be returned.
| skip        | Number| Skip rows to be returned.
| limit       | Number| Limit the number of rows to be returned.
| order       | String| Order the rows to be returned.

## Paybook.getAvailableCities
Return available cities.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field                 | Type  | Description
|-----------------------|-------|----------
| sessionToken          | String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idSite                | String| Site ID.
| idSiteOrganization    | String| Site Organization ID.
| idSiteOrganizationType| String| Site Organization ID.
| fields                | List  | Select fields to be returned.
| skip                  | Number| Skip rows to be returned.
| limit                 | Number| Limit the number of rows to be returned.
| order                 | String| Order the rows to be returned.

## Paybook.getAvailableSiteOrganizations
Return available site organizations.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field                 | Type  | Description
|-----------------------|-------|----------
| sessionToken          | String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idCountry             | String| Site ID.
| idSiteOrganization    | String| Site Organization ID.
| idSiteOrganizationType| String| Site Organization ID.
| fields                | List  | Select fields to be returned.
| skip                  | Number| Skip rows to be returned.
| limit                 | Number| Limit the number of rows to be returned.
| order                 | String| Order the rows to be returned.

## Paybook.getSitesGroupBySiteOrganizations
Return sites group by site organizations.Catalogues are a collection of endpoints that are relevant to the data segmentation on some of the other endpoints.

| Field                 | Type  | Description
|-----------------------|-------|----------
| sessionToken          | String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idCountry             | String| Site ID.
| idSiteOrganization    | String| Site Organization ID.
| idSiteOrganizationType| String| Site Organization ID.

## Paybook.getUserByApiKey
Returns users for that token.Users are logical segmentations for end-users. It's a best practice to register users in order to have their information grouped and have control on both ends. It is required to have at least one user registered to create credentials.

| Field     | Type  | Description
|-----------|-------|----------
| apiKey    | credentials| Developer Token given on the developer.
| idExternal| String| External ID.
| fields    | List  | Select fields to be returned.
| skip      | Number| Skip rows to be returned.
| limit     | Number| Limit the number of rows to be returned.
| order     | String| Order the rows to be returned.

## Paybook.createUser
Create a new user.Users are logical segmentations for end-users. It's a best practice to register users in order to have their information grouped and have control on both ends. It is required to have at least one user registered to create credentials.

| Field     | Type  | Description
|-----------|-------|----------
| apiKey    | credentials| Developer Token given on the developer.
| idExternal| String| External ID, this field can be null and be used to keep track of that user with an external ID.
| name      | String| User name.

## Paybook.updateUser
Create a new user.Users are logical segmentations for end-users. It's a best practice to register users in order to have their information grouped and have control on both ends. It is required to have at least one user registered to create credentials.

| Field     | Type  | Description
|-----------|-------|----------
| apiKey    | credentials| Developer Token given on the developer.
| userId    | String| Id of the user.
| idExternal| String| External ID, this field can be null and be used to keep track of that user with an external ID.
| name      | String| User name.

## Paybook.deleteUser
Deletes a user.Users are logical segmentations for end-users. It's a best practice to register users in order to have their information grouped and have control on both ends. It is required to have at least one user registered to create credentials.

| Field | Type  | Description
|-------|-------|----------
| apiKey| credentials| Developer Token given on the developer.
| userId| String| Id of the user.

## Paybook.validateSessionToken
Sessions are access tokens for the final user in order to consume Sync endpoints. Sessions expire after 5 minutes of inactivity and should be used for creating or updating credentials.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.

## Paybook.deleteSessionToken
Delete a session token.Sessions are access tokens for the final user in order to consume Sync endpoints. Sessions expire after 5 minutes of inactivity and should be used for creating or updating credentials.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.

## Paybook.getCredentials
Returns register credentials.Credentials are the third-party data that is needed in order to authenticate with a third-party site. Credentials are encrypted upon arrival and won’t be available on any endpoint. Data pull from this endpoint is only complementary.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.

## Paybook.createCredentials
Creates credentials.Credentials are the third-party data that is needed in order to authenticate with a third-party site. Credentials are encrypted upon arrival and won’t be available on any endpoint. Data pull from this endpoint is only complementary.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idSite      | String| Site ID.
| credentials | JSON  | Credentials Object (this must be created using the credentials field of the Site ID provided).

##### JSON credentials example
```
{
	"id_site": "{{sync_id_test_site}}",
	"credentials": {
		"username": "test",
		"password": "test"
	},
	"token": "{{sync_token}}"
}
```

## Paybook.updateCredentials
Updates credentials.Credentials are the third-party data that is needed in order to authenticate with a third-party site. Credentials are encrypted upon arrival and won’t be available on any endpoint. Data pull from this endpoint is only complementary.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idSite      | String| Site ID.
| credentials | JSON  | Credentials Object (this must be created using the credentials field of the Site ID provided).

##### JSON credentials example
```
{
	"id_site": "{{sync_id_test_site}}",
	"credentials": {
		"username": "test",
		"password": "test"
	},
	"token": "{{sync_token}}"
}
```

## Paybook.deleteCredentials
Returns register credentials.Credentials are the third-party data that is needed in order to authenticate with a third-party site. Credentials are encrypted upon arrival and won’t be available on any endpoint. Data pull from this endpoint is only complementary.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idCredential| String| Id of the credentials.

## Paybook.getCredentialsHistoryChanges
Returns history of changes made to this credentials (last 15 days).Credentials are the third-party data that is needed in order to authenticate with a third-party site. Credentials are encrypted upon arrival and won’t be available on any endpoint. Data pull from this endpoint is only complementary.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idCredential| String| Id of the credentials.
| isCompleted | String| Indicates if is currently running or completed.

## Paybook.getAccounts
Returns accounts for a specific user.Accounts are repositories for end-user transactions which are often segmented by some distinction, such as account type and/or account number. Account and transactional data can be retrieved from third-party sites (refreshed) up to three times a day.

| Field                 | Type  | Description
|-----------------------|-------|----------
| sessionToken          | String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idAccount             | String| Account ID.
| idCredential          | String| Credential ID.
| idSite                | String| Site ID.
| idSiteOrganization    | String| Site Organization ID.
| idSiteOrganizationType| String| Site Organization Type ID.
| isDisable             | String| Is disable, some sites can have the option to retreieve transactions that are not longer valid, active, etc.
| fields                | List  | Select fields to be returned.
| skip                  | Number| Skip rows to be returned.
| limit                 | Number| Limit the number of rows to be returned.
| order                 | String| Order the rows to be returned.
| keywords              | String| Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).
| skipKeywords          | String| Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).

## Paybook.getTransactions
Returns transactions for specific user.Transactions are financial movements that are related to an account. They reflect an income or expense that the end-user has on a specific site. The amount of historical data Sync retrieves will vary by source, but most often 60 days of transactions will be available.

| Field                 | Type      | Description
|-----------------------|-----------|----------
| sessionToken          | String    | Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idTransaction         | String    | Filters by transaction ID.
| idAccount             | String    | Account ID.
| idCredential          | String    | Credential ID.
| idSite                | String    | Site ID.
| idSiteOrganization    | String    | Site Organization ID.
| idSiteOrganizationType| String    | Site Organization Type ID.
| isDisable             | String    | Filters by disable transaction.
| hasAttachment         | String    | Filters by transactions with valid attachments.
| hasAttachment         | String    | Filters by transactions with valid attachments.
| dtRefreshFrom         | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtRefreshTo           | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtTransactionFrom     | DatePicker| Filters by transaction date, expected UNIX timestamp.
| dtTransactionTo       | DatePicker| Filters by transaction date, expected UNIX timestamp.
| fields                | List      | Select fields to be returned.
| skip                  | Number    | Skip rows to be returned.
| limit                 | Number    | Limit the number of rows to be returned.
| order                 | String    | Order the rows to be returned.
| keywords              | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).
| skipKeywords          | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).

## Paybook.getTransactionsCount
Returns the number of transactions given some search parameters.Transactions are financial movements that are related to an account. They reflect an income or expense that the end-user has on a specific site. The amount of historical data Sync retrieves will vary by source, but most often 60 days of transactions will be available.

| Field                 | Type      | Description
|-----------------------|-----------|----------
| sessionToken          | String    | Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idTransaction         | String    | Filters by transaction ID.
| idAccount             | String    | Account ID.
| idCredential          | String    | Credential ID.
| idSite                | String    | Site ID.
| idSiteOrganization    | String    | Site Organization ID.
| idSiteOrganizationType| String    | Site Organization Type ID.
| isDisable             | String    | Filters by disable transaction.
| hasAttachment         | String    | Filters by transactions with valid attachments.
| dtRefreshFrom         | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtRefreshTo           | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtTransactionFrom     | DatePicker| Filters by transaction date, expected UNIX timestamp.
| dtTransactionTo       | DatePicker| Filters by transaction date, expected UNIX timestamp.
| keywords              | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).
| skipKeywords          | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).

## Paybook.getAttachments
Returns attachments for specific user.Attachments are files that have a relation to accounts or transactions. The type of attachment will vary in its availability from its source.

| Field        | Type      | Description
|--------------|-----------|----------
| sessionToken | String    | Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idTransaction| String    | Filters by transaction ID.
| idAccount    | String    | Account ID.
| idCredential | String    | Credential ID.
| isValid      | String    | Is attachment valid.
| dtRefreshFrom| DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtRefreshTo  | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| fields       | List      | Select fields to be returned.
| skip         | Number    | Skip rows to be returned.
| limit        | Number    | Limit the number of rows to be returned.
| order        | String    | Order the rows to be returned.
| keywords     | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).
| skipKeywords | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).

## Paybook.getAttachmentsCount
Returns the number of attachments given some search parameters.Attachments are files that have a relation to accounts or transactions. The type of attachment will vary in its availability from its source.

| Field        | Type      | Description
|--------------|-----------|----------
| sessionToken | String    | Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idTransaction| String    | Filters by transaction ID.
| idAccount    | String    | Account ID.
| idCredential | String    | Credential ID.
| isValid      | String    | Is attachment valid.
| dtRefreshFrom| DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| dtRefreshTo  | DatePicker| Filters by transaction refresh date, expected UNIX timestamp.
| keywords     | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).
| skipKeywords | String    | Filters by keywords (for multiple keywords concatenate a string using a comma as a separator).

## Paybook.getAttachment
Returns the attachment.Attachments are files that have a relation to accounts or transactions. The type of attachment will vary in its availability from its source.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idAttachment| String| Id of the attachment.

## Paybook.getExtractedDataFromAttachment
Returns the extracted data from attachment.Attachments are files that have a relation to accounts or transactions. The type of attachment will vary in its availability from its source.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| idAttachment| String| Id of the attachment.

## Paybook.createTaxpayer
Create a new taxpayer.With these endpoint you can add or edit taxpayers that will be able to emit invoices.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| taxpayer    | String| The RFC of the taxpayer e.g.(AAA010101AAA).
| key         | String| Key of the certificate (string encoded in base64).
| cer         | String| Certificate of the taxpayer (string encoded in base64).
| password    | String| Password of the cer and key.

## Paybook.updateTaxpayer
Update the credentials of taxpayer.With these endpoint you can add or edit taxpayers that will be able to emit invoices.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| taxpayer    | String| The RFC of the taxpayer e.g.(AAA010101AAA).
| cer         | String| Certificate of the taxpayer (string encoded in base64).
| password    | String| Password of the cer and key.

## Paybook.getTaxpayers
Get the list of the registered taxpayers for the user.With these endpoint you can add or edit taxpayers that will be able to emit invoices.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| taxpayer    | String| The RFC of the taxpayer e.g.(AAA010101AAA).
| cer         | String| Certificate of the taxpayer (string encoded in base64).
| password    | String| Password of the cer and key.

## Paybook.stampNewInvoice
Stamp a new invoice, you can send the JSON structure.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| invoiceData | JSON  | JSON structure of the invoice.
| invoiceXml  | String| XML string (base64 encoded).
| idProvider  | String| Id or name of the available providers in Sync.

##### invoiceData example 
```
{
	"serie": "A",
	"folio": "35",
	"fecha": "{{new_iso_date}}",
	"formaDePago": "Parcialidad 1 de 30",
	"condicionesDePago": "Valido por 30 días",
	"subTotal": "2168.22",
	"descuento": "20",
	"motivoDescuento": "Promocion mensual",
	"tipoCambio": "18.22",
	"moneda": "MXN",
	"total": "2270.1",
	"tipoDeComprobante": "ingreso",
	"metodoDePago": "02",
	"lugarExpedicion": "Ciudad de México",
	"numCtaPago": "5219022",
	"emisor": {
		"nombre": "Alejandro Hernandez Rodriguez",
		"rfc": "AAA010101AAA",
		"domicilioFiscal": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		},
		"expedidoEn": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		},
		"regimenFiscal": [{
			"regimen": "Empleado Honorarios"
		}]
	},
	"receptor": {
		"rfc": "AOOM8309271A8",
		"nombre": "Pedro Perez Hernandez",
		"domicilio": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		}
	},
	"conceptos": [{
			"cantidad": "10.5",
			"unidad": "Kg",
			"descripcion": "Alambre calibre 22",
			"noIdentificacion": "SK3218932190",
			"valorUnitario": "10",
			"importe": "105"
		},
		{
			"cantidad": "5",
			"unidad": "Mt",
			"descripcion": "Producto Importado",
			"valorUnitario": "100",
			"importe": "500",
			"noIdentificacion": "SKU120312954",
			"informacionAduanera": {
				"numero": "099",
				"fecha": "2016-05-15",
				"aduana": "AD19888"
			}
		},
		{
			"cantidad": "1",
			"unidad": "2",
			"descripcion": "Pago PRedial Vivienda",
			"noIdentificacion": "H22",
			"valorUnitario": "1563.22",
			"importe": "1563.22",
			"cuentaPredial": {
				"numero": "PRE03185430011"
			}
		}
	],
	"impuestos": {
		"totalImpuestosRetenidos": "12.33",
		"totalImpuestosTrasladados": "114.21",
		"retenciones": [{
			"impuesto": "ISR",
			"importe": "12.33"
		}],
		"traslados": [{
			"impuesto": "IVA",
			"tasa": "10",
			"importe": "114.21"
		}]
	}
}
```

## Paybook.checkStructure
C heck for errors and warning in JSON structure or XML invoice.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| invoiceData | JSON  | JSON structure of the invoice.
| invoiceXml  | String| XML string (base64 encoded).

##### invoiceData example 
```
{
	"serie": "A",
	"folio": "35",
	"fecha": "{{new_iso_date}}",
	"formaDePago": "Parcialidad 1 de 30",
	"condicionesDePago": "Valido por 30 días",
	"subTotal": "2168.22",
	"descuento": "20",
	"motivoDescuento": "Promocion mensual",
	"tipoCambio": "18.22",
	"moneda": "MXN",
	"total": "2270.1",
	"tipoDeComprobante": "ingreso",
	"metodoDePago": "02",
	"lugarExpedicion": "Ciudad de México",
	"numCtaPago": "5219022",
	"emisor": {
		"nombre": "Alejandro Hernandez Rodriguez",
		"rfc": "AAA010101AAA",
		"domicilioFiscal": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		},
		"expedidoEn": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		},
		"regimenFiscal": [{
			"regimen": "Empleado Honorarios"
		}]
	},
	"receptor": {
		"rfc": "AOOM8309271A8",
		"nombre": "Pedro Perez Hernandez",
		"domicilio": {
			"calle": "Calle 25",
			"municipio": "Monterrey",
			"estado": "Nuevo Leon",
			"pais": "Mexico",
			"codigoPostal": "64450 "
		}
	},
	"conceptos": [{
			"cantidad": "10.5",
			"unidad": "Kg",
			"descripcion": "Alambre calibre 22",
			"noIdentificacion": "SK3218932190",
			"valorUnitario": "10",
			"importe": "105"
		},
		{
			"cantidad": "5",
			"unidad": "Mt",
			"descripcion": "Producto Importado",
			"valorUnitario": "100",
			"importe": "500",
			"noIdentificacion": "SKU120312954",
			"informacionAduanera": {
				"numero": "099",
				"fecha": "2016-05-15",
				"aduana": "AD19888"
			}
		},
		{
			"cantidad": "1",
			"unidad": "2",
			"descripcion": "Pago PRedial Vivienda",
			"noIdentificacion": "H22",
			"valorUnitario": "1563.22",
			"importe": "1563.22",
			"cuentaPredial": {
				"numero": "PRE03185430011"
			}
		}
	],
	"impuestos": {
		"totalImpuestosRetenidos": "12.33",
		"totalImpuestosTrasladados": "114.21",
		"retenciones": [{
			"impuesto": "ISR",
			"importe": "12.33"
		}],
		"traslados": [{
			"impuesto": "IVA",
			"tasa": "10",
			"importe": "114.21"
		}]
	}
}
```

## Paybook.getAllStampedInvoices
Get all the stamped invoices for the user.

| Field         | Type      | Description
|---------------|-----------|----------
| sessionToken  | String    | Session token, this value can be obtain using token and subtoken from get getSessionToken.
| uuid          | String    | UUID of the invoice.
| issuer        | String    | Filter by the RFC of the issuer.
| recipient     | String    | Filter by the RFC of the recipient.
| dtCreateFrom  | DatePicker| Filter from the date when the invoice was stamped, expected UNIX timestamp.
| dtCreateTo    | DatePicker| Filter to the date when the invoice was stamped.
| dtRegisterFrom| DatePicker| Filter by the start of the register date, expected UNIX timestamp.
| dtRegisterTo  | DatePicker| Filter by the end of the register date, expected UNIX timestamp.

## Paybook.cancelInvoice
Cancel the invoice.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.
| uuid        | String| UUID of the invoice.

## Paybook.getProviders
In Sync you can use different providers to stamp the invoices.

| Field       | Type  | Description
|-------------|-------|----------
| sessionToken| String| Session token, this value can be obtain using token and subtoken from get getSessionToken.

