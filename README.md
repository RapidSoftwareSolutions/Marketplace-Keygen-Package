[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Keygen/functions?utm_source=RapidAPIGitHub_KeygenFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Keygen Package
A dead-simple software licensing API built for developers
* Domain: [Keygen](http://keygen.sh/)
* Credentials: accountId

## How to get credentials: 
0. Browse to [Keygen](https://keygen.sh)
1. Register or log in
2. Browse to [Settings](https://app.keygen.sh/settings) to get your accountId



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
 You can use our service as url: 
   ```
   https://webhooks.rapidapi.io/api/message/Keygen/webhookEvent/{projectName}/{projectKey} * see credentials description above
   ```
 
 ## Webhook credentials
  Please use SDK to test this feature.
  0. Go to [RapidAPI](http://rapidapi.com)
  1. Log in or create an account
  2. Go to [My apps](https://dashboard.rapidapi.com/projects)
  3. Add new project with projectName to get your project Key
  | Field      | Type       | Description
  |------------|------------|----------
  | projectName     | credentials| Your RapidAPI project name
  | projectKey | credentials     | Your RapidAPI project key
  
  
## Keygen.getAccessToken
Generate a new token resource for a user.

| Field    | Type       | Description
|----------|------------|----------
| accountId| credentials| Your account id
| email    | String     | Your email
| password | String     | Your password

## Keygen.getTokenDetails
Retrieves the details of an existing token.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| tokenId    | String     | Id of access token

## Keygen.updateToken
Regenerate an existing token resource. This will replace the token attribute with a new secure token, and extend the expiry by 2 weeks.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| tokenId    | String     | Id of access token

## Keygen.revokeToken
Permanently revokes a token. It cannot be undone. This action also immediately invalidates all sessions using the given token.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| tokenId    | String     | Id of access token

## Keygen.addProduct
Creates a new product resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| name       | String     | Name of the product
| url        | String     | Url of the product
| platforms  | List       | Platofrms of the product
| metadata   | String     | Hash containing product metadata.

## Keygen.getSingleProduct
Retrieves the details of an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| productId  | String     | Id of product

## Keygen.updateProduct
Updates the details of an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| productId  | String     | Id of product
| name       | String     | Name of the product
| url        | String     | Url of the product
| platforms  | List       | Platofrms of the product
| metadata   | String     | Hash containing product metadata.

## Keygen.deleteProduct
Deletes an existing product.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| productId  | String     | Id of product

## Keygen.listProducts
Returns a list of products. The products are returned sorted by creation date, with the most recent products appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of products to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page

## Keygen.addPolicy
Creates a new policy resource.

| Field               | Type       | Description
|---------------------|------------|----------
| accountId           | credentials| Your account id
| accessToken         | String     | Your access token
| name                | String     | Name of the policy
| duration            | Number     | Duraion of the policy in seconds
| strict              | Select     | When enabled, a license that implements the policy will be considered invalid if its machine limit is surpassed. 
| floating            | Select     | When enabled, a license that implements the policy will be valid across multiple machines. 
| requireCheckIn      | Select     | When enabled, a license that implements the policy will require check-in at a predefined interval to continue to pass validation i.e. if a license misses a check-in, it will be invalidated.
| checkInInterval     | String     | One of day, week, month or year. The frequency at which a license should check-in.
| checkInIntervalCount| Number     | The number of intervals (specified in the check-in interval property) between each required check-in. 
| usePool             | Select     | Whether or not to pull license keys from a finite pool of pre-determined keys. 
| maxMachines         | Number     | The maximum number of machines a license implementing the policy can activate per-user. This is only enforced when the policy is strict. 
| encrypted           | Select     | Whether or not to encrypt license keys. 
| protected           | Select     | Whether or not the policy is protected
| metadata            | String     | Hash containing policy metadata.
| productId           | String     | The product the policy is for.

## Keygen.getSinglePolicy
Retrieves the details of an existing policy.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| policyId   | String     | Id of policy

## Keygen.updatePolicy
Updates the details of an existing policy.

| Field               | Type       | Description
|---------------------|------------|----------
| accountId           | credentials| Your account id
| accessToken         | String     | Your access token
| policyId            | String     | Id of policy
| name                | String     | Name of the policy
| duration            | Number     | Duraion of the policy in seconds
| strict              | Select     | When enabled, a license that implements the policy will be considered invalid if its machine limit is surpassed. 
| floating            | Select     | When enabled, a license that implements the policy will be valid across multiple machines. 
| requireCheckIn      | Select     | When enabled, a license that implements the policy will require check-in at a predefined interval to continue to pass validation i.e. if a license misses a check-in, it will be invalidated.
| checkInInterval     | String     | One of day, week, month or year. The frequency at which a license should check-in.
| checkInIntervalCount| Number     | The number of intervals (specified in the check-in interval property) between each required check-in. 
| usePool             | Select     | Whether or not to pull license keys from a finite pool of pre-determined keys. 
| maxMachines         | Number     | The maximum number of machines a license implementing the policy can activate per-user. This is only enforced when the policy is strict. 
| encrypted           | Select     | Whether or not to encrypt license keys. 
| protected           | Select     | Whether or not the policy is protected
| metadata            | String     | Hash containing policy metadata.

## Keygen.deletePolicy
Deletes an existing policy.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| policyId   | String     | Id of policy

## Keygen.listPolicies
Returns a list of policies. The policies are returned sorted by creation date, with the most recent policies appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of products to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page
| product    | String     | The identifier (UUID) of the product to filter by.

## Keygen.createUser
Creates a new user resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| firstName  | String     | The first name of the user.
| lastName   | String     | The last name of the user.
| email      | String     | The email of the user.
| password   | String     | The password of the user.
| role       | Select     | The role of the user.
| metadata   | String     | Hash containing user metadata.

## Keygen.getSingleUser
Retrieves the details of an existing user.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| userId     | String     | Id of user

## Keygen.updateUser
Updates the details of an existing user.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| userId     | String     | Id of user
| firstName  | String     | The first name of the user.
| lastName   | String     | The last name of the user.
| email      | String     | The email of the user.
| password   | String     | The password of the user.
| role       | Select     | The role of the user.
| metadata   | String     | Hash containing user metadata.

## Keygen.deleteUser
Deletes an existing user.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| userId     | String     | Id of user

## Keygen.listUsers
Returns a list of users. The users are returned sorted by creation date, with the most recent users appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of users to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page

## Keygen.updateUserPassword
Action to update the user's password. A user's password can only be updated when authenticated as the given user.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| userId     | String     | Id of user
| oldPassword| String     | The current password for the user.
| newPassword| String     | The new password for the user.

## Keygen.resetUserPassword
Fulfill a user's password reset request. Password reset tokens expire 24 hours after requesting the reset.

| Field             | Type       | Description
|-------------------|------------|----------
| accountId         | credentials| Your account id
| accessToken       | String     | Your access token
| userId            | String     | Id of user
| passwordResetToken| String     | The password reset token emailed to the user.
| newPassword       | String     | The new password for the user.

## Keygen.addLicense
Creates a new license resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| key        | String     | A unique pre-determined key for the license. Cannot be used on encrypted licenses. This attribute will be automatically generated or popped from the remaining pool if left blank.
| suspended  | Select     | Whether or not the license is suspended.
| metadata   | String     | Hash containing license metadata.
| policyId   | String     | The policy to implement for the license
| userId     | String     | The user the license is for. If ommitted, the license will be user-less. 

## Keygen.getSingleLicense
Retrieves the details of an existing license.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.updateLicense
Updates the details of an existing license.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license
| expiry     | DatePicker | When the license will expire.
| suspended  | Select     | Whether or not the license is suspended.
| metadata   | String     | Hash containing license metadata.

## Keygen.deleteLicense
Deletes an existing license.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.listLicenses
Returns a list of licenses. The licenses are returned sorted by creation date, with the most recent licenses appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of licenses to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page
| user       | String     | The identifier (UUID) of the user to filter by.
| product    | String     | The identifier (UUID) of the product to filter by.
| policy     | String     | The identifier (UUID) of the policy to filter by.
| machine    | String     | The identifier (UUID) of the machine to filter by.
| suspended  | Select     | Whether or not the license is suspended.

## Keygen.validateLicense
Action to validate a license. This will check the following: if the license is suspended, if the license is expired, if the license is overdue for check-in, and if the license meets its machine requirements (if strict).

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.validateLicenseKey
Action to validate a license key. This will look up the license by its key and check the following: if the license is suspended, if the license is expired, if the license is overdue for check-in, and if the license meets its machine requirements (if strict).

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license
| key        | String     | Key to validate
| encrypted  | Select     | Whether the license implements an encrypted policy. Encrypted licenses will fail validation unless this is specified.
| productId  | String     | Id of product
| policyId   | String     | Id of policy
| machineId  | String     | Id of machine

## Keygen.suspendLicense
Action to temporarily suspend (ban) a license. This will cause the license to fail validation until reinistated. 

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.reinstateLicense
Action to reinstate a suspended license.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.renewLicense
Action to renew a license. Extends license expiry by the policy's duration.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.revokeLicense
Action to revoke (delete) a license. This cannot be undone. This action also immediately deletes any machines that the license is associated with.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.checkinLicense
Action to check-in a license. Sets the license's lastCheckIn to the current time, and the license's nextCheckIn according to the policy's check-in interval.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| licenseId  | String     | Id of license

## Keygen.addMachine
Creates a new machine resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| fingerprint| String     | The fingerprint of the machine. This can be an arbitrary string, but must be unique within the scope of the license it belongs to.
| name       | String     | Name of the machine
| ip         | String     | IP of the machine
| hostname   | String     | Hostname of the machine
| platform   | String     | Platform of the machine
| metadata   | String     | Hash containing machine metadata.
| policyId   | String     | The license the machine is for.

## Keygen.getSingleMachine
Retrieves the details of an existing machine.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| machineId  | String     | Id of machine

## Keygen.updateMachine
Updates the details of an existing machine.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| machineId  | String     | Id of machine
| name       | String     | Name of the machine
| ip         | String     | IP of the machine
| hostname   | String     | Hostname of the machine
| platform   | String     | Platform of the machine
| metadata   | String     | Hash containing machine metadata.

## Keygen.deleteMachine
Deletes an existing machine.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| machineId  | String     | Id of machine

## Keygen.listMachines
Returns a list of machines. The machines are returned sorted by creation date, with the most recent machines appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of machines to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page
| product    | String     | The identifier (UUID) of the product to filter by.
| fingerprint| String     | The identifier (UUID) of the fingerprint to filter by.
| license    | String     | The identifier (UUID) of the license to filter by.
| user       | String     | The identifier (UUID) of the user to filter by.

## Keygen.addKey
Creates a new key resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| key        | String     | The unique key string for the key. The key cannot collide with license keys that already exist.
| policyId   | String     | The license the machine is for.

## Keygen.getSingleKey
Retrieves the details of an existing key.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| keyId      | String     | Id of key

## Keygen.updateKey
Updates the details of an existing key.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| keyId      | String     | Id of key
| key        | String     | The unique key string for the key. The key cannot collide with license keys that already exist.

## Keygen.deleteKey
Delete an existing key.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| keyId      | String     | Id of key

## Keygen.listKeys
Returns a list of keys. The keys are returned sorted by creation date, with the most recent keys appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of keys to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page
| product    | String     | The identifier (UUID) of the product to filter by.
| policy     | String     | The identifier (UUID) of the policy to filter by.

## Keygen.addWebhook
Creates a new webhook resource.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| url        | String     | The url that events are dispatched to. Must use the https protocol.

## Keygen.getSingleWebhook
Retrieves the details of an existing webhook.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| webhookId  | String     | Id of webhook

## Keygen.updateWebhook
Updates the details of an existing webhook.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| webhookId  | String     | Id of webhook
| url        | String     | The url that events are dispatched to. Must use the https protocol.

## Keygen.deleteWebhook
Deletes an existing webhook.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| webhookId  | String     | Id of webhook

## Keygen.listWebhooks
Returns a list of webhooks. The webhooks are returned sorted by creation date, with the most recent webhooks appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of webhooks to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page

## Keygen.getSingleWebhookEvent
Retrieves the details of an existing webhook event.

| Field         | Type       | Description
|---------------|------------|----------
| accountId     | credentials| Your account id
| accessToken   | String     | Your access token
| webhookEventId| String     | Id of webhook event

## Keygen.listWebhooksEvents
Returns a list of webhook events. The webhook events are returned sorted by creation date, with the most recent webhook events appearing first.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| limit      | Number     | Limit on the number of webhooks to be returned. Limit must be a number between 1 and 100.
| pageSize   | Number     | Page size must be a number between 1 and 100
| pageNumber | Number     | Number of the page
| events     | List       | Array containing events to filter by.

## Keygen.retryEvent
Action to manually retry an event. This creates a new event resource with an identical idempotency token.

| Field         | Type       | Description
|---------------|------------|----------
| accountId     | credentials| Your account id
| accessToken   | String     | Your access token
| webhookEventId| String     | Id of webhook event

## Keygen.getCurrentProfile
Retrieves the details of the currently authenticated bearer.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token

## Keygen.resetPassword
Request a password reset for a user. This will send an email to the user, if it is a valid email address. The email will contain a link leading to a password reset form securely hosted by Keygen.

| Field      | Type       | Description
|------------|------------|----------
| accountId  | credentials| Your account id
| accessToken| String     | Your access token
| email      | String     | The email of the user.
| deliver    | Select     | Whether or not to email a password reset notification to the user. When false, you will need to listen for the user.password-reset webhook event and implement the fulfillment logic yourself.

