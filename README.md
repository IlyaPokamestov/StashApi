# About

Auto-generated PHP client for Stash API. Was generated using [APIMATIC](https://apimatic.io/), based on Stash official [WADL definition](https://developer.atlassian.com/static/rest/stash/3.11.6/stash-rest.wadl).

# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Stash%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the StashAPILib library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Stash%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Stash%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Stash%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Stash%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Stash%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Stash%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Stash%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Stash%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Stash%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Stash%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Stash%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Stash%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### 

API client can be initialized as following.

```php

$client = new StashAPILib\StashAPILibClient();
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [APIController](#api_controller)

### <a name="api_controller"></a>![Class: ](https://apidocs.io/img/class.png ".APIController") APIController

#### Get singleton instance

The singleton instance of the ``` APIController ``` class can be accessed from the API Client.

```php
$client = $client->getClient();
```

#### <a name="get_changes"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getChanges") getChanges

> Retrieve a page of changes made in a specified commit.
>  <p>
>  <strong>Note:</strong> The implementation will apply a hard cap ({@code page.max.changes}) and it is not
>  possible to request subsequent content when that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getChanges(
        $projectKey,
        $repositorySlug,
        $since = null,
        $withComments = true,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | the commit to which <code>until</code> should be compared to produce a page of changes.
                     If not specified the commit's first parent is assumed (if one exists) |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}
                     to stream changes without comment counts |
| commitId |  ``` Optional ```  | the commit to retrieve changes for |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$since = 'since';
$withComments = true;
$commitId = 'commitId';

$result = $client->getChanges($projectKey, $repositorySlug, $since, $withComments, $commitId);

```


#### <a name="get_information"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getInformation") getInformation

> Gets information about the nodes that currently make up the stash cluster.
>  <p>
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function getInformation()
```

#### Example Usage

```php

$result = $client->getInformation();

```


#### <a name="get"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.get") get

> Retrieves details about the current license, as well as the current status of the system with regards to the
>  installed license. The status includes the current number of users applied toward the license limit, as well
>  as any status messages about the license (warnings about expiry or user counts exceeding license limits).
>  <p>
>  The authenticated user must have <b>ADMIN</b> permission. Unauthenticated users, and non-administrators, are
>  not permitted to access license details.


```php
function get()
```

#### Example Usage

```php

$result = $client->get();

```


#### <a name="update"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.update") update

> Decodes the provided encoded license and sets it as the active license. If no license was provided, a 400 is
>  returned. If the license cannot be decoded, or cannot be applied, a 409 is returned. Some possible reasons a
>  license may not be applied include:
>  <ul>
>      <li>It is for a different product</li>
>      <li>It is already expired</li>
>  </ul>
>  Otherwise, if the license is updated successfully, details for the new license are returned with a 200 response.
>  <p>
>  <b>Warning</b>: It is possible to downgrade the license during update, applying a license with a lower number
>  of permitted users. If the number of currently-licensed users exceeds the limits of the new license, pushing
>  will be disabled until the licensed user count is brought into compliance with the new license.
>  <p>
>  The authenticated user must have <b>SYS_ADMIN</b> permission. <b>ADMIN</b> users may <i>view</i> the current
>  license details, but they may not <i>update</i> the license.


```php
function update($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->update($dynamic);

```


#### <a name="delete_unwatch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteUnwatch") deleteUnwatch

> Make the authenticated user stop watching the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteUnwatch(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 209;

$result = $client->deleteUnwatch($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_watch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createWatch") createWatch

> Make the authenticated user watch the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createWatch(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 209;

$result = $client->createWatch($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="delete_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteMailConfig") deleteMailConfig

> Deletes the current mail configuration.
>  <p>
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function deleteMailConfig()
```

#### Example Usage

```php

$result = $client->deleteMailConfig();

```


#### <a name="get_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getMailConfig") getMailConfig

> Retrieves the current mail configuration.
> 
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function getMailConfig()
```

#### Example Usage

```php

$result = $client->getMailConfig();

```


#### <a name="update_set_mail_config"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetMailConfig") updateSetMailConfig

> Updates the mail configuration
> 
>  The authenticated user must have the <strong>SYS_ADMIN</strong> permission to call this resource.


```php
function updateSetMailConfig($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateSetMailConfig($dynamic);

```


#### <a name="delete_clear_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteClearSenderAddress") deleteClearSenderAddress

> Clears the server email address.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteClearSenderAddress()
```

#### Example Usage

```php

$result = $client->deleteClearSenderAddress();

```


#### <a name="get_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getSenderAddress") getSenderAddress

> Retrieves the server email address


```php
function getSenderAddress()
```

#### Example Usage

```php

$result = $client->getSenderAddress();

```


#### <a name="update_set_sender_address"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetSenderAddress") updateSetSenderAddress

> Updates the server email address
> 
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function updateSetSenderAddress($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateSetSenderAddress($dynamic);

```


#### <a name="get_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getAvatar") getAvatar

> Retrieve the avatar for the project matching the supplied <strong>moduleKey</strong>.


```php
function getAvatar(
        $version = null,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| version |  ``` Optional ```  | optional version used for HTTP caching only - any non-blank version will result in a large max-age Cache-Control header.
                Note that this does not affect the Last-Modified header. |
| hookKey |  ``` Optional ```  | the complete module key of the hook module |



#### Example Usage

```php
$version = 'version';
$hookKey = 'hookKey';

$result = $client->getAvatar($version, $hookKey);

```


#### <a name="get_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithAnyPermission") getGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one permission for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getGroupsWithAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $client->getGroupsWithAnyPermission($projectKey, $filter);

```


#### <a name="update_set_permission_for_groups"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForGroups") updateSetPermissionForGroups

> Promote or demote a group's permission level for the specified project. Available project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource. In addition, a user may not demote a group's permission level if their
>  own permission level would be reduced as a result.


```php
function updateSetPermissionForGroups(
        $projectKey,
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$projectKey = 'projectKey';
$permission = 'permission';
$name = 'name';

$result = $client->updateSetPermissionForGroups($projectKey, $permission, $name);

```


#### <a name="delete_revoke_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForGroup") deleteRevokePermissionsForGroup

> Revoke all permissions for the specified project for a group.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.
>  <p>
>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.


```php
function deleteRevokePermissionsForGroup(
        $projectKey,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';

$result = $client->deleteRevokePermissionsForGroup($projectKey, $name);

```


#### <a name="get_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithoutAnyPermission") getGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted permissions for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getGroupsWithoutAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $client->getGroupsWithoutAnyPermission($projectKey, $filter);

```


#### <a name="get_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithAnyPermission") getUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one permission for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getUsersWithAnyPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $client->getUsersWithAnyPermission($projectKey, $filter);

```


#### <a name="update_set_permission_for_users"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForUsers") updateSetPermissionForUsers

> Promote or demote a user's permission level for the specified project. Available project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+project">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource. In addition, a user may not reduce their own permission level unless
>  they have a global permission that already implies that permission.


```php
function updateSetPermissionForUsers(
        $projectKey,
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';
$permission = 'permission';

$result = $client->updateSetPermissionForUsers($projectKey, $name, $permission);

```


#### <a name="delete_revoke_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForUser") deleteRevokePermissionsForUser

> Revoke all permissions for the specified project for a user.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.
>  <p>
>  In addition, a user may not revoke their own project permissions if they do not have a higher global permission.


```php
function deleteRevokePermissionsForUser(
        $projectKey,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$projectKey = 'projectKey';
$name = 'name';

$result = $client->deleteRevokePermissionsForUser($projectKey, $name);

```


#### <a name="get_users_without_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithoutPermission") getUsersWithoutPermission

> Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified project.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getUsersWithoutPermission(
        $projectKey,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$filter = 'filter';

$result = $client->getUsersWithoutPermission($projectKey, $filter);

```


#### <a name="get_has_all_user_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getHasAllUserPermission") getHasAllUserPermission

> Check whether the specified permission is the default permission (granted to all users) for a project. Available
>  project permissions are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function getHasAllUserPermission(
        $projectKey,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$permission = 'permission';

$result = $client->getHasAllUserPermission($projectKey, $permission);

```


#### <a name="modify_all_user_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.modifyAllUserPermission") modifyAllUserPermission

> Grant or revoke a project permission to all users, i.e. set the default permission. Available project permissions
>  are:
>  <ul>
>      <li>PROJECT_READ</li>
>      <li>PROJECT_WRITE</li>
>      <li>PROJECT_ADMIN</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project or a higher
>  global permission to call this resource.


```php
function modifyAllUserPermission(
        $projectKey,
        $allow = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| allow |  ``` Optional ```  | <em>true</em> to grant the specified permission to all users, or <em>false</em> to revoke it |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$allow = true;
$permission = 'permission';

$result = $client->modifyAllUserPermission($projectKey, $allow, $permission);

```


#### <a name="create_task"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createTask") createTask

> Create a new task.


```php
function createTask($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->createTask($dynamic);

```


#### <a name="delete_task"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteTask") deleteTask

> Delete a task.
>  <p>
>  Note that only the task's creator, the context's author or an admin of the context's repository can delete a
>  task. (For a pull request task, those are the task's creator, the pull request's author or an admin on the
>  repository containing the pull request). Additionally a task cannot be deleted if it has already been resolved.


```php
function deleteTask($taskId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taskId |  ``` Optional ```  | the id identifying the task to delete |



#### Example Usage

```php
$taskId = 209;

$result = $client->deleteTask($taskId);

```


#### <a name="update_task"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateTask") updateTask

> Update a existing task.
>  <p>
>  As of Stash 3.3, only the state and text of a task can be updated.
>  <p>
>  Updating the state of a task is allowed for any user having <em>READ</em> access to the repository.
>  However only the task's creator, the context's author or an admin of the context's repository can update the
>  task's text. (For a pull request task, those are the task's creator, the pull request's author or an admin on the
>  repository containing the pull request). Additionally the task's text cannot be updated if it has been resolved.


```php
function updateTask(
        $dynamic,
        $taskId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| taskId |  ``` Optional ```  | the id identifying the task to delete |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$taskId = 209;

$result = $client->updateTask($dynamic, $taskId);

```


#### <a name="get_task"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getTask") getTask

> Retrieve a existing task.


```php
function getTask($taskId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taskId |  ``` Optional ```  | the id identifying the task to delete |



#### Example Usage

```php
$taskId = 209;

$result = $client->getTask($taskId);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Gets a diff of the changes available in the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null,
        $srcPath = null,
        $contextLines = -1,
        $whitespace = null,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |
| srcPath |  ``` Optional ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | an optional number of context lines to include around each added or removed lines in the diff |
| whitespace |  ``` Optional ```  | an optional whitespace flag which can be set to <code>ignore-all</code> |
| path |  ``` Optional ```  | the path to the file to diff (optional) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';
$srcPath = 'srcPath';
$contextLines = -1;
$whitespace = 'whitespace';
$path = 'path';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $from, $to, $fromRepo, $srcPath, $contextLines, $whitespace, $path);

```


#### <a name="get_stream_changes"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamChanges") getStreamChanges

> Gets the file changes available in the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getStreamChanges(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';

$result = $client->getStreamChanges($projectKey, $repositorySlug, $from, $to, $fromRepo);

```


#### <a name="get_stream_changesets"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamChangesets") getStreamChangesets

> Gets the commits accessible from the {@code from} changeset but not in the {@code to} changeset.
>  <p>
>  If either the {@code from} or {@code to} changeset are not specified, they will be replaced by the
>  default branch of their containing repository.


```php
function getStreamChangesets(
        $projectKey,
        $repositorySlug,
        $from = null,
        $to = null,
        $fromRepo = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| from |  ``` Optional ```  | the source changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| to |  ``` Optional ```  | the target changeset (can be a partial/full changeset id or qualified/unqualified ref name) |
| fromRepo |  ``` Optional ```  | an optional parameter specifying the source repository containing the source changeset
                 if that changeset is not present in the current repository; the repository can be specified
                 by either its ID <em>fromRepo=42</em> or by its project key plus its repo slug separated by
                 a slash: <em>fromRepo=projectKey/repoSlug</em> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$from = 'from';
$to = 'to';
$fromRepo = 'fromRepo';

$result = $client->getStreamChangesets($projectKey, $repositorySlug, $from, $to, $fromRepo);

```


#### <a name="create_project"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createProject") createProject

> Create a new project.
>  <p>
>  To include a custom avatar for the project, the project definition should contain an additional attribute with
>  the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be in
>  the following format:
>  <pre>
>      data:(content type, e.g. image/png);base64,(data)
>  </pre>
>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,
>  <em>project creation will fail</em>.
>  <p>
>  The authenticated user must have <strong>PROJECT_CREATE</strong> permission to call this resource.


```php
function createProject($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->createProject($dynamic);

```


#### <a name="get_projects"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getProjects") getProjects

> Retrieve a page of projects.
>  <p>
>  Only projects for which the authenticated user has the <strong>PROJECT_VIEW</strong> permission will be returned.


```php
function getProjects(
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$name = 'name';
$permission = 'permission';

$result = $client->getProjects($name, $permission);

```


#### <a name="delete_project"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteProject") deleteProject

> Delete the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function deleteProject($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $client->deleteProject($projectKey);

```


#### <a name="update_project"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateProject") updateProject

> Update the project matching the <strong>projectKey</strong> supplied in the resource path.
>  <p>
>  To include a custom avatar for the updated project, the project definition should contain an additional attribute
>  with the key <code>avatar</code> and the value a data URI containing Base64-encoded image data. The URI should be
>  in the following format:
>  <code>
>      data:(content type, e.g. image/png);base64,(data)
>  </code>
>  If the data is not Base64-encoded, or if a character set is defined in the URI, or the URI is otherwise invalid,
>  <em>project creation will fail</em>.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function updateProject(
        $dynamic,
        $projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';

$result = $client->updateProject($dynamic, $projectKey);

```


#### <a name="get_project"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getProject") getProject

> Retrieve the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this
>  resource.


```php
function getProject($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $client->getProject($projectKey);

```


#### <a name="get_project_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getProjectAvatar") getProjectAvatar

> Retrieve the avatar for the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>PROJECT_VIEW</strong> permission for the specified project to call this
>  resource.


```php
function getProjectAvatar(
        $projectKey,
        $s = 0)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| s |  ``` Optional ```  ``` DefaultValue ```  | The desired size of the image. The server will return an image as close as possible to the specified
             size. |



#### Example Usage

```php
$projectKey = 'projectKey';
$s = 0;

$result = $client->getProjectAvatar($projectKey, $s);

```


#### <a name="upload_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.uploadAvatar") uploadAvatar

> Update the avatar for the project matching the supplied <strong>projectKey</strong>.
>  <p>
>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.
>  <p>
>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded file size
>  (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and
>  <strong>JPEG</strong> are preferred due to the file size limit.
>  <p>
>  An example <a href="http://curl.haxx.se/">curl</a> request to upload an image name 'avatar.png' would be:
>  <pre>
>  curl -X POST -u username:password http://example.com/rest/api/1.0/projects/STASH/avatar.png -F avatar=@avatar.png
>  </pre>
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function uploadAvatar($projectKey)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $client->uploadAvatar($projectKey);

```


#### <a name="get_branches"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getBranches") getBranches

> Retrieve the branches matching the supplied <strong>filterText</strong> param.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getBranches(
        $projectKey,
        $repositorySlug,
        $base = null,
        $details = null,
        $filterText = null,
        $orderBy = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| base |  ``` Optional ```  | base branch or tag to compare each branch to (for the metadata providers that uses that information) |
| details |  ``` Optional ```  | whether to retrieve plugin-provided metadata about each branch |
| filterText |  ``` Optional ```  | the text to match on |
| orderBy |  ``` Optional ```  | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$base = 'base';
$details = true;
$filterText = 'filterText';
$orderBy = 'orderBy';

$result = $client->getBranches($projectKey, $repositorySlug, $base, $details, $filterText, $orderBy);

```


#### <a name="get_default_branch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getDefaultBranch") getDefaultBranch

> Get the default branch of the repository.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getDefaultBranch(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->getDefaultBranch($projectKey, $repositorySlug);

```


#### <a name="update_set_default_branch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetDefaultBranch") updateSetDefaultBranch

> Update the default branch of a repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateSetDefaultBranch(
        $dynamic,
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->updateSetDefaultBranch($dynamic, $projectKey, $repositorySlug);

```


#### <a name="get_users_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithoutAnyPermission") getUsersWithoutAnyPermission

> Retrieve a page of users that have no granted global permissions.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getUsersWithoutAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only user names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getUsersWithoutAnyPermission($filter);

```


#### <a name="get_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithAnyPermission") getGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one global permission.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getGroupsWithAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getGroupsWithAnyPermission($filter);

```


#### <a name="update_set_permission_for_groups"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForGroups") updateSetPermissionForGroups

> Promote or demote a user's global permission level. Available global permissions are:
>  <ul>
>      <li>LICENSED_USER</li>
>      <li>PROJECT_CREATE</li>
>      <li>ADMIN</li>
>      <li>SYS_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Global+permissions">Stash documentation</a> for
>  a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>the permission they are attempting to grant or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the
>      permission level of a group with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote a group's permission level if their own permission
>  level would be reduced as a result.


```php
function updateSetPermissionForGroups(
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$permission = 'permission';
$name = 'name';

$result = $client->updateSetPermissionForGroups($permission, $name);

```


#### <a name="delete_revoke_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForGroup") deleteRevokePermissionsForGroup

> Revoke all global permissions for a group.
> 
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the group (a user may not demote the
>      permission level of a group with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not revoke a group's permissions if their own permission level
>  would be reduced as a result.


```php
function deleteRevokePermissionsForGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$name = 'name';

$result = $client->deleteRevokePermissionsForGroup($name);

```


#### <a name="get_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithoutAnyPermission") getGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted global permissions.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getGroupsWithoutAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getGroupsWithoutAnyPermission($filter);

```


#### <a name="get_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithAnyPermission") getUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one global permission.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getUsersWithAnyPermission($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only user names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getUsersWithAnyPermission($filter);

```


#### <a name="update_set_permission_for_users"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForUsers") updateSetPermissionForUsers

> Promote or demote the global permission level of a user. Available global permissions are:
>  <ul>
>      <li>LICENSED_USER</li>
>      <li>PROJECT_CREATE</li>
>      <li>ADMIN</li>
>      <li>SYS_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Global+permissions">Stash documentation</a> for
>  a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>the permission they are attempting to grant; and</li>
>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the
>      permission level of a user with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote their own permission level.


```php
function updateSetPermissionForUsers(
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$name = 'name';
$permission = 'permission';

$result = $client->updateSetPermissionForUsers($name, $permission);

```


#### <a name="delete_revoke_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForUser") deleteRevokePermissionsForUser

> Revoke all global permissions for a user.
>  <p>
>  The authenticated user must have:
>  <ul>
>      <li><strong>ADMIN</strong> permission or higher; and</li>
>      <li>greater or equal permissions than the current permission level of the user (a user may not demote the
>      permission level of a user with higher permissions than them)</li>
>  </ul>
>  to call this resource. In addition, a user may not demote their own permission level.


```php
function deleteRevokePermissionsForUser($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$name = 'name';

$result = $client->deleteRevokePermissionsForUser($name);

```


#### <a name="get_groups"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroups") getGroups

> Retrieve a page of group names.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission or higher to call this resource.


```php
function getGroups($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getGroups($filter);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Streams a diff within a pull request.
>  <p>
>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to
>  produce the correct diff.
>  <p>
>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the
>  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| srcPath |  ``` Optional ```  | the previous path to the file, if the file has been copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>
                     to stream the diff without comments |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$contextLines = -1;
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;

$result = $client->getStreamDiff($projectKey, $repositorySlug, $pullRequestId, $contextLines, $srcPath, $whitespace, $withComments);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Streams a diff within a pull request.
>  <p>
>  If the specified file has been copied, moved or renamed, the <code>srcPath</code> must also be specified to
>  produce the correct diff.
>  <p>
>  Note: This RESTful endpoint is currently <i>not paged</i>. The server will internally apply a hard cap to the
>  streamed lines, and it is not possible to request subsequent pages if that cap is exceeded.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $contextLines = -1,
        $srcPath = null,
        $whitespace = null,
        $withComments = true,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| srcPath |  ``` Optional ```  | the previous path to the file, if the file has been copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise, <code>false</code>
                     to stream the diff without comments |
| path |  ``` Optional ```  | the path to the file which should be diffed (optional) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$contextLines = -1;
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;
$path = 'path';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $pullRequestId, $contextLines, $srcPath, $whitespace, $withComments, $path);

```


#### <a name="get_repositories_recently_accessed"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepositoriesRecentlyAccessed") getRepositoriesRecentlyAccessed

> Retrieve a page of recently accessed repositories for the currently authenticated user.
>  <p>
>  Repositories are ordered from most recently to least recently accessed.
>  <p>
>  Only authenticated users may call this resource.


```php
function getRepositoriesRecentlyAccessed($permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| permission |  ``` Optional ```  | (optional) if specified, it must be a valid repository permission level name and will limit
                   the resulting repository list to ones that the requesting user has the specified permission
                   level to. If not specified, the default <code>REPO_READ</code> permission level will be assumed. |



#### Example Usage

```php
$permission = 'permission';

$result = $client->getRepositoriesRecentlyAccessed($permission);

```


#### <a name="get_commits"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getCommits") getCommits

> Retrieve changesets for the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getCommits(
        $projectKey,
        $repositorySlug,
        $withCounts = null,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| withCounts |  ``` Optional ```  | if set to true, the service will add "authorCount" and "totalCount" at the end of the page.
                     "authorCount" is the number of different authors and "totalCount" is the total number of changesets. |
| pullRequestId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$withCounts = false;
$pullRequestId = 46;

$result = $client->getCommits($projectKey, $repositorySlug, $withCounts, $pullRequestId);

```


#### <a name="get_pull_request_tasks"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getPullRequestTasks") getPullRequestTasks

> Retrieve the tasks associated with a pull request.


```php
function getPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $client->getPullRequestTasks($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_count_pull_request_tasks"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getCountPullRequestTasks") getCountPullRequestTasks

> Retrieve the total number of {@link com.atlassian.stash.task.TaskState#OPEN open} and
>  {@link com.atlassian.stash.task.TaskState#RESOLVED resolved} tasks associated with a pull request.


```php
function getCountPullRequestTasks(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $client->getCountPullRequestTasks($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="update_set_permission_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForGroup") updateSetPermissionForGroup

> Promote or demote a group's permission level for the specified repository. Available repository permissions are:
>  <ul>
>      <li>REPO_READ</li>
>      <li>REPO_WRITE</li>
>      <li>REPO_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource. In addition, a user may not demote a group's permission level if their
>  own permission level would be reduced as a result.


```php
function updateSetPermissionForGroup(
        $projectKey,
        $repositorySlug,
        $permission = null,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| permission |  ``` Optional ```  | the permission to grant |
| name |  ``` Optional ```  | the names of the groups |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$permission = 'permission';
$name = 'name';

$result = $client->updateSetPermissionForGroup($projectKey, $repositorySlug, $permission, $name);

```


#### <a name="get_groups_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithAnyPermission") getGroupsWithAnyPermission

> Retrieve a page of groups that have been granted at least one permission for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getGroupsWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $client->getGroupsWithAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="delete_revoke_permissions_for_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForGroup") deleteRevokePermissionsForGroup

> Revoke all permissions for the specified repository for a group.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.
>  <p>
>  In addition, a user may not revoke a group's permissions if it will reduce their own permission level.


```php
function deleteRevokePermissionsForGroup(
        $projectKey,
        $repositorySlug,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the group |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';

$result = $client->deleteRevokePermissionsForGroup($projectKey, $repositorySlug, $name);

```


#### <a name="update_set_permission_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetPermissionForUser") updateSetPermissionForUser

> Promote or demote a user's permission level for the specified repository. Available repository permissions are:
>  <ul>
>      <li>REPO_READ</li>
>      <li>REPO_WRITE</li>
>      <li>REPO_ADMIN</li>
>  </ul>
>  See the <a href="https://confluence.atlassian.com/display/STASH/Managing+permissions+for+a+repository">Stash documentation</a>
>  for a detailed explanation of what each permission entails.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource. In addition, a user may not reduce their own permission level unless
>  they have a project or global permission that already implies that permission.


```php
function updateSetPermissionForUser(
        $projectKey,
        $repositorySlug,
        $name = null,
        $permission = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the names of the users |
| permission |  ``` Optional ```  | the permission to grant |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';
$permission = 'permission';

$result = $client->updateSetPermissionForUser($projectKey, $repositorySlug, $name, $permission);

```


#### <a name="get_users_with_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithAnyPermission") getUsersWithAnyPermission

> Retrieve a page of users that have been granted at least one permission for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getUsersWithAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $client->getUsersWithAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="delete_revoke_permissions_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRevokePermissionsForUser") deleteRevokePermissionsForUser

> Revoke all permissions for the specified repository for a user.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.
>  <p>
>  In addition, a user may not revoke their own repository permissions if they do not have a higher
>  project or global permission.


```php
function deleteRevokePermissionsForUser(
        $projectKey,
        $repositorySlug,
        $name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| name |  ``` Optional ```  | the name of the user |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$name = 'name';

$result = $client->deleteRevokePermissionsForUser($projectKey, $repositorySlug, $name);

```


#### <a name="get_groups_without_any_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroupsWithoutAnyPermission") getGroupsWithoutAnyPermission

> Retrieve a page of groups that have no granted permissions for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getGroupsWithoutAnyPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $client->getGroupsWithoutAnyPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="get_users_without_permission"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsersWithoutPermission") getUsersWithoutPermission

> Retrieve a page of <i>licensed</i> users that have no granted permissions for the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository or a higher
>  project or global permission to call this resource.


```php
function getUsersWithoutPermission(
        $projectKey,
        $repositorySlug,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filter = 'filter';

$result = $client->getUsersWithoutPermission($projectKey, $repositorySlug, $filter);

```


#### <a name="get_commits"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getCommits") getCommits

> Retrieve a page of commits from a given starting commit or "between" two commits. If no explicit commit is
>  specified, the tip of the repository's default branch is assumed. commits may be identified by branch or tag
>  name or by ID. A path may be supplied to restrict the returned commits to only those which affect that path.
>  <p>
>  The authenticated user must have <b>REPO_READ</b> permission for the specified repository to call this
>  resource.


```php
function getCommits(
        $projectKey,
        $repositorySlug,
        $path = null,
        $since = null,
        $until = null,
        $withCounts = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | an optional path to filter commits by |
| since |  ``` Optional ```  | the commit ID or ref (exclusively) to retrieve commits after |
| until |  ``` Optional ```  | the commit ID (SHA1) or ref (inclusively) to retrieve commits before |
| withCounts |  ``` Optional ```  ``` DefaultValue ```  | optionally include the total number of commits and total number of unique authors |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$since = 'since';
$until = 'until';
$withCounts = false;

$result = $client->getCommits($projectKey, $repositorySlug, $path, $since, $until, $withCounts);

```


#### <a name="get_commit"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getCommit") getCommit

> Retrieve a single commit <i>identified by its ID</i>>. In general, that ID is a SHA1. <u>From 2.11, ref names
>  like "refs/heads/master" are no longer accepted by this resource.</u>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getCommit(
        $projectKey,
        $repositorySlug,
        $path = null,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | an optional path to filter the commit by. If supplied the details returned <i>may not</i>
             be for the specified commit. Instead, starting from the specified commit, they will be the
             details for the first commit affecting the specified path. |
| commitId |  ``` Optional ```  | the commit ID to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$commitId = 'commitId';

$result = $client->getCommit($projectKey, $repositorySlug, $path, $commitId);

```


#### <a name="get_tags"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getTags") getTags

> Retrieve the tags matching the supplied <strong>filterText</strong> param.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the context repository to call this
>  resource.


```php
function getTags(
        $projectKey,
        $repositorySlug,
        $filterText = null,
        $orderBy = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| filterText |  ``` Optional ```  | the text to match on |
| orderBy |  ``` Optional ```  | ordering of refs either ALPHABETICAL (by name) or MODIFICATION (last updated) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$filterText = 'filterText';
$orderBy = 'orderBy';

$result = $client->getTags($projectKey, $repositorySlug, $filterText, $orderBy);

```


#### <a name="create_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createComment") createComment

> Add a new comment.
>  <p>
>  Comments can be added in a few places by setting different attributes:
>  <p>
>  General pull request comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a pull request."
>      }
>      </pre>
> 
>  Reply to a comment:
> 
>  <pre>
>      {
>          "text": "A measured reply.",
>          "parent": {
>              "id": 1
>          }
>      }
>      </pre>
> 
>  General file comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a file.",
>          "anchor": {
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
> 
>  File line comment:
> 
>  <pre>
>      {
>          "text": "A pithy comment on a particular line within a file.",
>          "anchor": {
>              "line": 1,
>              "lineType": "CONTEXT",
>              "fileType": "FROM"
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>
>  <p>
>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and
>  'srcPath' refers to the path the that file used to have (only required for copies and moves).
>  <p>
>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to
>  the type of diff hunk, which can be:
>  <ul>
>      <li>'ADDED' - for an added line;</li>
>      <li>'REMOVED' - for a removed line; or</li>
>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>
>  </ul>
>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when
>  displaying the diff in a side-by-side way. Currently the supported values are:
>  <ul>
>      <li>'FROM' - the source file of the diff</li>
>      <li>'TO' - the destination file of the diff</li>
>  </ul>
>  If the current user is not a participant the user is added as a watcher of the pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 4;

$result = $client->createComment($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_comments"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getComments") getComments

> TODO: Add a method description


```php
function getComments(
        $projectKey,
        $repositorySlug,
        $path = null,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$pullRequestId = 4;

$result = $client->getComments($projectKey, $repositorySlug, $path, $pullRequestId);

```


#### <a name="update_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateComment") updateComment

> Update the text of a comment. Only the user who created a comment may update it.
>  <p>
>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match the
>  server's version of the comment or the update will fail. To determine the current version of
>  the comment, the comment should be fetched from the server prior to the update. Look for the
>  'version' attribute in the returned JSON structure.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function updateComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |
| commentId |  ``` Optional ```  | the id of the comment to retrieve |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 4;
$commentId = 4;

$result = $client->updateComment($dynamic, $projectKey, $repositorySlug, $pullRequestId, $commentId);

```


#### <a name="delete_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteComment") deleteComment

> Delete a pull request comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>
>  and above may delete comments created by other users.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteComment(
        $projectKey,
        $repositorySlug,
        $version = -1,
        $pullRequestId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | The expected version of the comment. This must match the server's version of the comment or
                      the delete will fail. To determine the current version of the comment, the comment should be
                      fetched from the server prior to the delete. Look for the 'version' attribute in the
                      returned JSON structure. |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |
| commentId |  ``` Optional ```  | the id of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$version = -1;
$pullRequestId = 4;
$commentId = 4;

$result = $client->deleteComment($projectKey, $repositorySlug, $version, $pullRequestId, $commentId);

```


#### <a name="get_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getComment") getComment

> Retrieves a pull request comment.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getComment(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |
| commentId |  ``` Optional ```  | the id of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 4;
$commentId = 4;

$result = $client->getComment($projectKey, $repositorySlug, $pullRequestId, $commentId);

```


#### <a name="get_application_properties"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getApplicationProperties") getApplicationProperties

> Retrieve version information and other application properties.
>  <p>
>  No authentication is required to call this resource.


```php
function getApplicationProperties()
```

#### Example Usage

```php

$result = $client->getApplicationProperties();

```


#### <a name="get_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepositories") getRepositories

> Retrieve a page of repositories based on query parameters that control the search. See the documentation of the
>  parameters for more details.
>  <p>
>  This resource is anonymously accessible.
>  <p>
>  <b>Note on permissions.</b> In absence of the {@code permission} query parameter the implicit 'read' permission
>  is assumed. Please note that this permission is lower than the REPO_READ permission rather than being equal to
>  it. The implicit 'read' permission for a given repository is assigned to any user that has any of the higher
>  permissions, such as <tt>REPO_READ</tt>, as well as to anonymous users if the repository is marked as public.
>  The important implication of the above is that an anonymous request to this resource with a permission level
>  <tt>REPO_READ</tt> is guaranteed to receive an empty list of repositories as a result. For anonymous requests
>  it is therefore recommended to not specify the <tt>permission</tt> parameter at all.


```php
function getRepositories(
        $name = null,
        $projectname = null,
        $permission = null,
        $visibility = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list to ones whose name
                    matches this parameter's value. The match will be done case-insensitive and any leading
                    and/or trailing whitespace characters on the <code>name</code> parameter will be stripped. |
| projectname |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list to ones whose project's
                    name matches this parameter's value. The match will be done case-insensitive and any leading
                    and/or trailing whitespace characters on the <code>projectname</code> parameter will
                    be stripped. |
| permission |  ``` Optional ```  | (optional) if specified, it must be a valid repository permission level name and will limit
                    the resulting repository list to ones that the requesting user has the specified permission
                    level to. If not specified, the default implicit 'read' permission level will be assumed. The
                    currently supported explicit permission values are <tt>REPO_READ</tt>, <tt>REPO_WRITE</tt>
                    and <tt>REPO_ADMIN</tt>. |
| visibility |  ``` Optional ```  | (optional) if specified, this will limit the resulting repository list based on the
                    repositories visibility. Valid values are <em>public</em> or <em>private</em>. |



#### Example Usage

```php
$name = 'name';
$projectname = 'projectname';
$permission = 'permission';
$visibility = 'visibility';

$result = $client->getRepositories($name, $projectname, $permission, $visibility);

```


#### <a name="get_stream_changes"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamChanges") getStreamChanges

> Gets changes for the specified PullRequest.
>  <p>
>  Note: This resource is currently <i>not paged</i>. The server will return at most one page. The server will
>  truncate the number of changes to either the request's page limit or an internal maximum, whichever is smaller.
>  The start parameter of the page request is also ignored.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getStreamChanges(
        $projectKey,
        $repositorySlug,
        $pullRequestId,
        $withComments = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | {@code true} to apply comment counts in the changes (the default); otherwise, {@code false}
                     to stream changes without comment counts |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';
$withComments = true;

$result = $client->getStreamChanges($projectKey, $repositorySlug, $pullRequestId, $withComments);

```


#### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsers") getUsers

> Retrieve a page of users.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function getUsers($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only users with usernames, display name or email addresses containing the supplied
               string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getUsers($filter);

```


#### <a name="create_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createUser") createUser

> Creates a new user from the assembled query parameters.
>  <p>
>  The default group can be used to control initial permissions for new users, such as granting users the ability
>  to login or providing read access to certain projects or repositories. If the user is not added to the default
>  group, they may not be able to login after their account is created until explicit permissions are configured.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createUser(
        $name = null,
        $password = null,
        $displayName = null,
        $emailAddress = null,
        $addToDefaultGroup = true,
        $notify = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the username for the new user |
| password |  ``` Optional ```  | the password for the new user |
| displayName |  ``` Optional ```  | the display name for the new user |
| emailAddress |  ``` Optional ```  | the e-mail address for the new user |
| addToDefaultGroup |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to add the user to the default group, which can be used to grant them
                          a set of initial permissions; otherwise, <code>false</code> to not add them to a group |
| notify |  ``` Optional ```  | if present and not <code>false</code> instead of requiring a password,
                          the create user will be notified via email their account has been created and requires
                          a password to be reset. This option can only be used if a mail server has been configured |



#### Example Usage

```php
$name = 'name';
$password = 'password';
$displayName = 'displayName';
$emailAddress = 'emailAddress';
$addToDefaultGroup = true;
$notify = 'notify';

$result = $client->createUser($name, $password, $displayName, $emailAddress, $addToDefaultGroup, $notify);

```


#### <a name="delete_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteUser") deleteUser

> Deletes the specified user, removing them from the system. This also removes any permissions that may have been
>  granted to the user.
>  <p>
>  A user may not delete themselves, and a user with <strong>ADMIN</strong> permissions may not delete a user with
>  <strong>SYS_ADMIN</strong>permissions.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteUser($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the username identifying the user to delete |



#### Example Usage

```php
$name = 'name';

$result = $client->deleteUser($name);

```


#### <a name="update_user_details"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateUserDetails") updateUserDetails

> Update a user's details.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function updateUserDetails($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateUserDetails($dynamic);

```


#### <a name="create_rename_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createRenameUser") createRenameUser

> Rename a user.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createRenameUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->createRenameUser($dynamic);

```


#### <a name="delete_clear_user_captcha_challenge"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteClearUserCaptchaChallenge") deleteClearUserCaptchaChallenge

> Clears any CAPTCHA challenge that may constrain the user with the supplied username when they authenticate.
>  Additionally any counter or metric that contributed towards the user being issued the CAPTCHA challenge
>  (for instance too many consecutive failed logins) will also be reset.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not clear
>  the CAPTCHA of a user with greater permissions than themselves.


```php
function deleteClearUserCaptchaChallenge($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$name = 'name';

$result = $client->deleteClearUserCaptchaChallenge($name);

```


#### <a name="delete_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteGroup") deleteGroup

> Deletes the specified group, removing them from the system. This also removes any permissions that may have been
>  granted to the group.
>  <p>
>  A user may not delete the last group that is granting them administrative permissions, or a group with greater
>  permissions than themselves.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function deleteGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | the name identifying the group to delete |



#### Example Usage

```php
$name = 'name';

$result = $client->deleteGroup($name);

```


#### <a name="create_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createGroup") createGroup

> Create a new group.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function createGroup($name = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | Name of the group. |



#### Example Usage

```php
$name = 'name';

$result = $client->createGroup($name);

```


#### <a name="get_groups1"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getGroups1") getGroups1

> Retrieve a page of groups.
>  <p>
>  The authenticated user must have <strong>LICENSED_USER</strong> permission or higher to call this resource.


```php
function getGroups1($filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| filter |  ``` Optional ```  | if specified only group names containing the supplied string will be returned |



#### Example Usage

```php
$filter = 'filter';

$result = $client->getGroups1($filter);

```


#### <a name="add_user_to_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.addUserToGroup") addUserToGroup

> <p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>
> 
>  Add a user to a group.
>  <p>
>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUserToGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->addUserToGroup($dynamic);

```


#### <a name="add_group_to_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.addGroupToUser") addGroupToUser

> <p><strong>Deprecated since 2.10 for removal in 4.0</strong>. Use {@code /rest/users/add-groups} instead.</p>
> 
>  Add a user to a group. This is very similar to <code>groups/add-user</code>, but with the <em>context</em> and
>  <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear
>  redundant, but it facilitates a specific UI component in Stash.
>  <p>
>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addGroupToUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->addGroupToUser($dynamic);

```


#### <a name="add_users_to_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.addUsersToGroup") addUsersToGroup

> Add multiple users to a group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUsersToGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->addUsersToGroup($dynamic);

```


#### <a name="add_user_to_groups"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.addUserToGroups") addUserToGroups

> Add a user to one or more groups.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function addUserToGroups($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->addUserToGroups($dynamic);

```


#### <a name="create_remove_user_from_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createRemoveUserFromGroup") createRemoveUserFromGroup

> <p><strong>Deprecated since 2.10 for removal in 3.0</strong>. Use {@code /rest/users/remove-groups} instead.</p>
> 
>  Remove a user from a group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.
>  <p>
>  In the request entity, the <em>context</em> attribute is the group and the <em>itemName</em> is the user.


```php
function createRemoveUserFromGroup($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->createRemoveUserFromGroup($dynamic);

```


#### <a name="create_remove_group_from_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createRemoveGroupFromUser") createRemoveGroupFromUser

> Remove a user from a group. This is very similar to <code>groups/remove-user</code>, but with the <em>context</em>
>  and <em>itemName</em> attributes of the supplied request entity reversed. On the face of it this may appear
>  redundant, but it facilitates a specific UI component in Stash.
>  <p>
>  In the request entity, the <em>context</em> attribute is the user and the <em>itemName</em> is the group.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource.


```php
function createRemoveGroupFromUser($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->createRemoveGroupFromUser($dynamic);

```


#### <a name="find_users_in_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.findUsersInGroup") findUsersInGroup

> Retrieves a list of users that are members of a specified group.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findUsersInGroup(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the group which should be used to locate members |
| filter |  ``` Optional ```  | if specified only users with usernames, display names or email addresses containing the
                  supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $client->findUsersInGroup($context, $filter);

```


#### <a name="find_users_not_in_group"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.findUsersNotInGroup") findUsersNotInGroup

> Retrieves a list of users that are <em>not</em> members of a specified group.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findUsersNotInGroup(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the group which should be used to locate non-members |
| filter |  ``` Optional ```  | if specified only users with usernames, display names or email addresses containing the
                  supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $client->findUsersNotInGroup($context, $filter);

```


#### <a name="find_groups_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.findGroupsForUser") findGroupsForUser

> Retrieves a list of groups the specified user is a member of.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findGroupsForUser(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the user which should be used to locate groups |
| filter |  ``` Optional ```  | if specified only groups with names containing the supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $client->findGroupsForUser($context, $filter);

```


#### <a name="find_other_groups_for_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.findOtherGroupsForUser") findOtherGroupsForUser

> Retrieves a list of groups the specified user is <em>not</em> a member of.
>  <p>
>  The authenticated user must have the <strong>LICENSED_USER</strong> permission to call this resource.


```php
function findOtherGroupsForUser(
        $context = null,
        $filter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| context |  ``` Optional ```  | the user which should be used to locate groups |
| filter |  ``` Optional ```  | if specified only groups with names containing the supplied string will be returned |



#### Example Usage

```php
$context = 'context';
$filter = 'filter';

$result = $client->findOtherGroupsForUser($context, $filter);

```


#### <a name="update_user_password"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateUserPassword") updateUserPassword

> Update a user's password.
>  <p>
>  The authenticated user must have the <strong>ADMIN</strong> permission to call this resource, and may not update
>  the password of a user with greater permissions than themselves.


```php
function updateUserPassword($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateUserPassword($dynamic);

```


#### <a name="list_repository_files"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.listRepositoryFiles") listRepositoryFiles

> Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files
>  from any sub-directory of the specified directory will be returned.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function listRepositoryFiles(
        $projectKey,
        $repositorySlug,
        $at = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref (e.g. a branch or tag) to list the files at.
             If not specified the default branch will be used instead. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';

$result = $client->listRepositoryFiles($projectKey, $repositorySlug, $at);

```


#### <a name="list_repository_files"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.listRepositoryFiles") listRepositoryFiles

> Retrieve a page of files from particular directory of a repository. The search is done recursively, so all files
>  from any sub-directory of the specified directory will be returned.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function listRepositoryFiles(
        $projectKey,
        $repositorySlug,
        $at = null,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref (e.g. a branch or tag) to list the files at.
             If not specified the default branch will be used instead. |
| path |  ``` Optional ```  | the directory to list files for. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';
$path = 'path';

$result = $client->listRepositoryFiles($projectKey, $repositorySlug, $at, $path);

```


#### <a name="get_root_level"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRootLevel") getRootLevel

> Retrieve the current log level for the root logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getRootLevel()
```

#### Example Usage

```php

$result = $client->getRootLevel();

```


#### <a name="update_set_root_level"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetRootLevel") updateSetRootLevel

> Set the current log level for the root logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function updateSetRootLevel($levelName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| levelName |  ``` Optional ```  | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |



#### Example Usage

```php
$levelName = 'levelName';

$result = $client->updateSetRootLevel($levelName);

```


#### <a name="get_level"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getLevel") getLevel

> Retrieve the current log level for a given logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function getLevel($loggerName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| loggerName |  ``` Optional ```  | the name of the logger. |



#### Example Usage

```php
$loggerName = 'loggerName';

$result = $client->getLevel($loggerName);

```


#### <a name="update_set_level"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetLevel") updateSetLevel

> Set the current log level for a given logger.
>  <p>
>  The authenticated user must have <strong>ADMIN</strong> permission or higher to call this resource.


```php
function updateSetLevel(
        $levelName = null,
        $loggerName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| levelName |  ``` Optional ```  | the level to set the logger to. Either TRACE, DEBUG, INFO, WARN or ERROR |
| loggerName |  ``` Optional ```  | the name of the logger. |



#### Example Usage

```php
$levelName = 'levelName';
$loggerName = 'loggerName';

$result = $client->updateSetLevel($levelName, $loggerName);

```


#### <a name="get_users"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUsers") getUsers

> Retrieve a page of users, optionally run through provided filters.
>  <p>
>  Only authenticated users may call this resource.
> 
>  <h3>Supported Filters</h3>
>  <p>
>  Filters are provided in query parameters in a standard <code>name=value</code> fashion. The following filters are
>  currently supported:
>  <ul>
>      <li>
>          {@code filter} - return only users, whose username, name or email address <i>contain</i> the
>          {@code filter} value
>      </li>
>      <li>
>          {@code permission} - the "root" of a permission filter, whose value must be a valid global,
>          project, or repository permission. Additional filter parameters referring to this filter that specify the
>          resource (project or repository) to apply the filter to must be prefixed with <code>permission.</code>. See the
>          section "Permission Filters" below for more details.
>      </li>
>      <li>
>          {@code permission.N} - the "root" of a single permission filter, similar to the {@code permission}
>          parameter, where "N" is a natural number starting from 1. This allows clients to specify multiple permission
>          filters, by providing consecutive filters as {@code permission.1}, {@code permission.2} etc. Note that
>          the filters numbering has to start with 1 and be continuous for all filters to be processed. The total allowed
>          number of permission filters is 50 and all filters exceeding that limit will be dropped. See the section
>          "Permission Filters" below for more details on how the permission filters are processed.
>      </li>
>  </ul>
>  
> 
>  <h3>Permission Filters</h3>
>  <p>
>  The following three sub-sections list parameters supported for permission filters (where <code>[root]</code> is
>  the root permission filter name, e.g. {@code permission}, {@code permission.1} etc.) depending on the
>  permission resource. The system determines which filter to apply (Global, Project or Repository permission)
>  based on the <code>[root]</code> permission value. E.g. {@code ADMIN} is a global permission,
>  {@code PROJECT_ADMIN} is a project permission and {@code REPO_ADMIN} is a repository permission. Note
>  that the parameters for a given resource will be looked up in the order as they are listed below, that is e.g.
>  for a project resource, if both {@code projectId} and {@code projectKey} are provided, the system will
>  use {@code projectId} for the lookup.
>  <h4>Global permissions</h4>
>  <p>
>  The permission value under <code>[root]</code> is the only required and recognized parameter, as global
>  permissions do not apply to a specific resource.
>  <p>
>  Example valid filter: <code>permission=ADMIN</code>.
>  <h4>Project permissions</h4>
>  <ul>
>      <li><code>[root]</code>- specifies the project permission</li>
>      <li><code>[root].projectId</code> - specifies the project ID to lookup the project by</li>
>      <li><code>[root].projectKey</code> - specifies the project key to lookup the project by</li>
>  </ul>
>  <p>
>  Example valid filter: <code>permission.1=PROJECT_ADMIN&permission.1.projectKey=TEST_PROJECT</code>.
>  <h4>Repository permissions</h4>
>  <ul>
>      <li><code>[root]</code>- specifies the repository permission</li>
>      <li><code>[root].projectId</code> - specifies the repository ID to lookup the repository by</li>
>      <li><code>[root].projectKey</code> and <code>[root].repositorySlug</code>- specifies the project key and
>      repository slug to lookup the repository by; both values <i>need to</i> be provided for this look up to be
>      triggered</li>
>  </ul>
>  Example valid filter: <code>permission.2=REPO_ADMIN&permission.2.projectKey=TEST_PROJECT&permission.2.repositorySlug=test_repo</code>.


```php
function getUsers()
```

#### Example Usage

```php

$result = $client->getUsers();

```


#### <a name="update_user_details1"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateUserDetails1") updateUserDetails1

> Update the currently authenticated user's details. Note that <em>the name attribute is ignored</em>, the update
>  will always be applied to the currently authenticated user.


```php
function updateUserDetails1($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateUserDetails1($dynamic);

```


#### <a name="delete_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteAvatar") deleteAvatar

> Delete the avatar associated to a user.
>  <p>
>  Users are always allowed to delete their own avatar. To delete someone else's avatar the authenticated user must
>  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a
>  <strong>SYS_ADMIN</strong> user's avatar.


```php
function deleteAvatar($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $client->deleteAvatar($userSlug);

```


#### <a name="upload_avatar"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.uploadAvatar") uploadAvatar

> Update the avatar for the user with the supplied <strong>slug</strong>.
>  <p>
>  This resource accepts POST multipart form data, containing a single image in a form-field named 'avatar'.
>  <p>
>  There are configurable server limits on both the dimensions (1024x1024 pixels by default) and uploaded
>  file size (1MB by default). Several different image formats are supported, but <strong>PNG</strong> and
>  <strong>JPEG</strong> are preferred due to the file size limit.
>  <p>
>  This resource has Cross-Site Request Forgery (XSRF) protection. To allow the request to
>  pass the XSRF check the caller needs to send an <code>X-Atlassian-Token</code> HTTP header with the
>  value <code>no-check</code>.
>  <p>
>  An example <a href="http://curl.haxx.se/">curl</a> request to upload an image name 'avatar.png' would be:
>  <pre>
>  curl -X POST -u username:password -H "X-Atlassian-Token: no-check" http://example.com/rest/api/latest/users/jdoe/avatar.png -F avatar=@avatar.png
>  </pre>
>  <p>
>  Users are always allowed to update their own avatar. To update someone else's avatar the authenticated user must
>  have global <strong>ADMIN</strong> permission, or global <strong>SYS_ADMIN</strong> permission to update a
>  <strong>SYS_ADMIN</strong> user's avatar.


```php
function uploadAvatar($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $client->uploadAvatar($userSlug);

```


#### <a name="get_user"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUser") getUser

> Retrieve the user matching the supplied <strong>userSlug</strong>.
>  <p>


```php
function getUser($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $client->getUser($userSlug);

```


#### <a name="update_user_password1"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateUserPassword1") updateUserPassword1

> Update the currently authenticated user's password.


```php
function updateUserPassword1($dynamic)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');

$result = $client->updateUserPassword1($dynamic);

```


#### <a name="get_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepositories") getRepositories

> Retrieve repositories from the project corresponding to the supplied <strong>projectKey</strong>.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified project to call this
>  resource.


```php
function getRepositories($projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$projectKey = 'projectKey';

$result = $client->getRepositories($projectKey);

```


#### <a name="create_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createRepository") createRepository

> Create a new repository. Requires an existing project in which this repository will be created.
>  The only parameters which will be used are name and scmId.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the context project to call this
>  resource.


```php
function createRepository(
        $dynamic,
        $projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';

$result = $client->createRepository($dynamic, $projectKey);

```


#### <a name="delete_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteRepository") deleteRepository

> Schedule the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong> to
>  be deleted. If the request repository is not present
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function deleteRepository(
        $repositorySlug = null,
        $projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| repositorySlug |  ``` Optional ```  | the repository slug |
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $client->deleteRepository($repositorySlug, $projectKey);

```


#### <a name="create_fork_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createForkRepository") createForkRepository

> Create a new repository forked from an existing repository.
>  <p>
>  The JSON body for this {@code POST} is not required to contain <i>any</i> properties. Even the name may be
>  omitted. The following properties will be used, if provided:
>  <ul>
>      <li>{@code "name":"Fork name"} - Specifies the forked repository's name
>      <ul>
>          <li>Defaults to the name of the origin repository if not specified</li>
>      </ul>
>      </li>
>      <li>{@code "project":{"key":"TARGET_KEY"}} - Specifies the forked repository's target project by key
>      <ul>
>          <li>Defaults to the current user's personal project if not specified</li>
>      </ul>
>      </li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository and
>  <strong>PROJECT_ADMIN</strong> on the target project to call this resource. Note that users <i>always</i>
>  have <b>PROJECT_ADMIN</b> permission on their personal projects.


```php
function createForkRepository(
        $dynamic,
        $repositorySlug = null,
        $projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Optional ```  | the repository slug |
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $client->createForkRepository($dynamic, $repositorySlug, $projectKey);

```


#### <a name="get_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepository") getRepository

> Retrieve the repository matching the supplied <strong>projectKey</strong> and <strong>repositorySlug</strong>.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getRepository(
        $repositorySlug = null,
        $projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| repositorySlug |  ``` Optional ```  | the repository slug |
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $client->getRepository($repositorySlug, $projectKey);

```


#### <a name="update_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateRepository") updateRepository

> Update the repository matching the <strong>repositorySlug</strong> supplied in the resource path.
>  <p>
>  The repository's slug is derived from its name. If the name changes the slug may also change.
>  <p>
>  This API can be used to move the repository to a different project by setting the new project in the request,
>  example: {@code {"project":{"key":"NEW_KEY"}}} .
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateRepository(
        $dynamic,
        $repositorySlug = null,
        $projectKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Optional ```  | the repository slug |
| projectKey |  ``` Optional ```  | the parent project key |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$repositorySlug = 'repositorySlug';
$projectKey = 'projectKey';

$result = $client->updateRepository($dynamic, $repositorySlug, $projectKey);

```


#### <a name="get_forked_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getForkedRepositories") getForkedRepositories

> Retrieve repositories which have been forked from this one. Unlike {@link #getRelatedRepositories(Repository,
>  PageRequest) related repositories}, this only looks at a given repository's direct forks. If those forks have
>  themselves been the origin of more forks, such "grandchildren" repositories will not be retrieved.
>  <p>
>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even
>  if other repositories have been forked from this one.


```php
function getForkedRepositories(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->getForkedRepositories($projectKey, $repositorySlug);

```


#### <a name="get_related_repositories"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRelatedRepositories") getRelatedRepositories

> Retrieve repositories which are related to this one. Related repositories are from the same
>  {@link Repository#getHierarchyId() hierarchy} as this repository.
>  <p>
>  Only repositories to which the authenticated user has <b>REPO_READ</b> permission will be included, even
>  if more repositories are part of this repository's hierarchy.


```php
function getRelatedRepositories(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->getRelatedRepositories($projectKey, $repositorySlug);

```


#### <a name="create_retry_create_repository"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createRetryCreateRepository") createRetryCreateRepository

> If a create or fork operation fails, calling this method will clean up the broken repository and try again. The
>  repository must be in an INITIALISATION_FAILED state.
>  <p>
>  The authenticated user must have <strong>PROJECT_ADMIN</strong> permission for the specified project to call this
>  resource.


```php
function createRetryCreateRepository(
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->createRetryCreateRepository($projectKey, $repositorySlug);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Retrieve the diff for a specified file path between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| until |  ``` Optional ```  | the target revision to diff to (required) |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$until = 'until';
$whitespace = 'whitespace';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $contextLines, $since, $srcPath, $until, $whitespace);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Retrieve the diff for a specified file path between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $until = null,
        $whitespace = null,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| until |  ``` Optional ```  | the target revision to diff to (required) |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| path |  ``` Optional ```  | the path to the file which should be diffed (required) |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$until = 'until';
$whitespace = 'whitespace';
$path = 'path';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $contextLines, $since, $srcPath, $until, $whitespace, $path);

```


#### <a name="get_content"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getContent") getContent

> Retrieve a page of content for a file path at a specified revision.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getContent(
        $projectKey,
        $repositorySlug,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref to retrieve the content for. |
| type |  ``` Optional ```  ``` DefaultValue ```  | if true only the type will be returned for the file path instead of the contents. |
| blame |  ``` Optional ```  | if present the blame will be returned for the file as well. |
| noContent |  ``` Optional ```  | if present and used with blame only the blame is retrieved instead of the contents. |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';
$type = false;
$blame = 'blame';
$noContent = 'noContent';

$result = $client->getContent($projectKey, $repositorySlug, $at, $type, $blame, $noContent);

```


#### <a name="get_content"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getContent") getContent

> Retrieve a page of content for a file path at a specified revision.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getContent(
        $projectKey,
        $repositorySlug,
        $at = null,
        $type = false,
        $blame = null,
        $noContent = null,
        $path = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| at |  ``` Optional ```  | the changeset id or ref to retrieve the content for. |
| type |  ``` Optional ```  ``` DefaultValue ```  | if true only the type will be returned for the file path instead of the contents. |
| blame |  ``` Optional ```  | if present the blame will be returned for the file as well. |
| noContent |  ``` Optional ```  | if present and used with blame only the blame is retrieved instead of the contents. |
| path |  ``` Optional ```  | the file path to retrieve content from |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$at = 'at';
$type = false;
$blame = 'blame';
$noContent = 'noContent';
$path = 'path';

$result = $client->getContent($projectKey, $repositorySlug, $at, $type, $blame, $noContent, $path);

```


#### <a name="create_preview"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createPreview") createPreview

> Preview the generated html for given markdown contents.
>  <p>
>  Only authenticated users may call this resource.


```php
function createPreview(
        $dynamic,
        $urlMode = null,
        $hardwrap = null,
        $htmlEscape = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| urlMode |  ``` Optional ```  | TODO: Add a parameter description |
| hardwrap |  ``` Optional ```  | TODO: Add a parameter description |
| htmlEscape |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$urlMode = 'urlMode';
$hardwrap = true;
$htmlEscape = true;

$result = $client->createPreview($dynamic, $urlMode, $hardwrap, $htmlEscape);

```


#### <a name="get_page"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getPage") getPage

> Retrieve a page of pull requests to or from the specified repository.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call
>  this resource.
> 
>  Optionally clients can specify PR participant filters. Each filter has a mandatory {@code username.N}
>  parameter, and the optional {@code role.N} and {@code approved.N} parameters.
>  <ul>
>      <li>
>          {@code username.N} - the "root" of a single participant filter, where "N" is a natural number
>          starting from 1. This allows clients to specify multiple participant filters, by providing consecutive
>          filters as {@code username.1}, {@code username.2} etc. Note that the filters numbering has to start
>          with 1 and be continuous for all filters to be processed. The total allowed number of participant
>          filters is 10 and all filters exceeding that limit will be dropped.
>      </li>
>      <li>
>          {@code role.N}(optional) the role associated with {@code username.N}.
>          This must be one of {@code AUTHOR}, {@code REVIEWER}, or{@code PARTICIPANT}
>      </li>
>      <li>
>          {@code approved.N}(optional) the approved status associated with {@code username.N}.
>          That is whether {@code username.N} has approved the PR. Either {@code true}, or {@code false}
>      </li>
>  </ul>


```php
function getPage(
        $projectKey,
        $repositorySlug,
        $direction = 'incoming',
        $at = null,
        $state = null,
        $order = null,
        $withAttributes = true,
        $withProperties = true)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| direction |  ``` Optional ```  ``` DefaultValue ```  | (optional, defaults to <strong>INCOMING</strong>) the direction relative to the specified
                  repository. Either <strong>INCOMING</strong> or <strong>OUTGOING</strong>. |
| at |  ``` Optional ```  | (optional) a <i>fully-qualified</i> branch ID to find pull requests to or from,
           such as {@code refs/heads/master} |
| state |  ``` Optional ```  | (optional, defaults to <strong>OPEN</strong>). Supply <strong>ALL</strong> to return pull request
               in any state. If a state is supplied only pull requests in the specified state will be returned.
               Either <strong>OPEN</strong>, <strong>DECLINED</strong> or <strong>MERGED</strong>. |
| order |  ``` Optional ```  | (optional) the order to return pull requests in, either <strong>OLDEST</strong> (as in: "oldest
              first") or <strong>NEWEST</strong>. |
| withAttributes |  ``` Optional ```  ``` DefaultValue ```  | (optional) defaults to true, whether to return additional pull request attributes |
| withProperties |  ``` Optional ```  ``` DefaultValue ```  | (optional) defaults to true, whether to return additional pull request properties |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$direction = 'incoming';
$at = 'at';
$state = 'state';
$order = 'order';
$withAttributes = true;
$withProperties = true;

$result = $client->getPage($projectKey, $repositorySlug, $direction, $at, $state, $order, $withAttributes, $withProperties);

```


#### <a name="create"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.create") create

> Create a new pull request between two branches. The branches may be in the same repository, or different ones.
>  When using different repositories, they must still be in the same {@link Repository#getHierarchyId() hierarchy}.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the "from" and "to"repositories to
>  call this resource.


```php
function create(
        $dynamic,
        $projectKey,
        $repositorySlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';

$result = $client->create($dynamic, $projectKey, $repositorySlug);

```


#### <a name="create_decline"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createDecline") createDecline

> Decline a pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createDecline(
        $projectKey,
        $repositorySlug,
        $version = -1,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |
| pullRequestId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$version = -1;
$pullRequestId = 187;

$result = $client->createDecline($projectKey, $repositorySlug, $version, $pullRequestId);

```


#### <a name="get_activities"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getActivities") getActivities

> Retrieve a page of activity associated with a pull request.
>  <p>
>  Activity items include comments, approvals, rescopes (i.e. adding and removing of commits), merges and more.
>  <p>
>  Different types of activity items may be introduced in newer versions of Stash or by user installed plugins, so
>  clients should be flexible enough to handle unexpected entity shapes in the returned page.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getActivities(
        $projectKey,
        $repositorySlug,
        $fromId = null,
        $fromType = null,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| fromId |  ``` Optional ```  | (optional) the id of the activity item to use as the first item in the returned page |
| fromType |  ``` Optional ```  | (required if <strong>fromId</strong> is present) the type of the activity item specified by
                 <strong>fromId</strong> (either <strong>COMMENT</strong> or <strong>ACTIVITY</strong>) |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$fromId = 187;
$fromType = 'fromType';
$pullRequestId = 187;

$result = $client->getActivities($projectKey, $repositorySlug, $fromId, $fromType, $pullRequestId);

```


#### <a name="create_reopen"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createReopen") createReopen

> Re-open a declined pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createReopen(
        $projectKey,
        $repositorySlug,
        $version = -1,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$version = -1;
$pullRequestId = 187;

$result = $client->createReopen($projectKey, $repositorySlug, $version, $pullRequestId);

```


#### <a name="get_can_merge"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getCanMerge") getCanMerge

> Test whether a pull request can be merged.
>  <p>
>  A pull request may not be merged if:
>  <ul>
>      <li>there are conflicts that need to be manually resolved before merging; and/or</li>
>      <li>one or more merge checks have vetoed the merge.</li>
>  </ul>
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function getCanMerge(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 187;

$result = $client->getCanMerge($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_merge"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createMerge") createMerge

> Merge the specified pull request.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createMerge(
        $projectKey,
        $repositorySlug,
        $version = -1,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | the current version of the pull request. If the server's version isn't the same as the specified
                version the operation will fail. To determine the current version of the pull request it should be
                fetched from the server prior to this operation. Look for the 'version' attribute in the returned
                JSON structure. |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$version = -1;
$pullRequestId = 187;

$result = $client->createMerge($projectKey, $repositorySlug, $version, $pullRequestId);

```


#### <a name="get"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.get") get

> Retrieve a pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function get(
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $client->get($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="update"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.update") update

> Update the title, description, reviewers or destination branch of an existing pull request.
>  <p>
>  <strong>Note:</strong> the <em>reviewers</em> list may be updated using this resource. However the
>  <em>author</em> and <em>participants</em> list may not.
>  <p>
>  The authenticated user must either:
>  <ul>
>      <li>be the author of the pull request and have the <strong>REPO_READ</strong> permission for the repository
>      that this pull request targets; or</li>
>      <li>have the <strong>REPO_WRITE</strong> permission for the repository that this pull request targets</li>
>  </ul>
>  to call this resource.


```php
function update(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 'pullRequestId';

$result = $client->update($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="create_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createComment") createComment

> Add a new comment.
>  <p>
>  Comments can be added in a few places by setting different attributes:
>  <p>
>  General commit comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a commit."
>      }
>      </pre>
> 
>  Reply to a comment:
> 
>  <pre>
>      {
>          "text": "A measured reply.",
>          "parent": {
>              "id": 1
>          }
>      }
>      </pre>
> 
>  General file comment:
> 
>  <pre>
>      {
>          "text": "An insightful general comment on a file.",
>          "anchor": {
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>          }
>      }
>      </pre>
> 
>  File line comment:
> 
>  <pre>
>      {
>          "text": "A pithy comment on a particular line within a file.",
>          "anchor": {
>              "line": 1,
>              "lineType": "CONTEXT",
>              "fileType": "FROM"
>              "path": "path/to/file",
>              "srcPath": "path/to/file"
>      }
>      }
>      </pre>
>  <strong>Note: general file comments are an experimental feature and may change in the near future!</strong>
>  <p>
>  For file and line comments, 'path' refers to the path of the file to which the comment should be applied and
>  'srcPath' refers to the path the that file used to have (only required for copies and moves).
>  <p>
>  For line comments, 'line' refers to the line in the diff that the comment should apply to. 'lineType' refers to
>  the type of diff hunk, which can be:
>  <ul>
>      <li>'ADDED' - for an added line;</li>
>      <li>'REMOVED' - for a removed line; or</li>
>      <li>'CONTEXT' - for a line that was unmodified but is in the vicinity of the diff.</li>
>  </ul>
>  'fileType' refers to the file of the diff to which the anchor should be attached - which is of relevance when
>  displaying the diff in a side-by-side way. Currently the supported values are:
>  <ul>
>      <li>'FROM' - the source file of the diff</li>
>      <li>'TO' - the destination file of the diff</li>
>  </ul>
>  If the current user is not a participant the user is added as one and updated to watch the commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function createComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $since = null,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$since = 'since';
$commitId = 'commitId';

$result = $client->createComment($dynamic, $projectKey, $repositorySlug, $since, $commitId);

```


#### <a name="get_comments"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getComments") getComments

> TODO: Add a method description


```php
function getComments(
        $projectKey,
        $repositorySlug,
        $path = null,
        $since = null,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| path |  ``` Optional ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$path = 'path';
$since = 'since';
$commitId = 'commitId';

$result = $client->getComments($projectKey, $repositorySlug, $path, $since, $commitId);

```


#### <a name="update_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateComment") updateComment

> Update the text of a comment. Only the user who created a comment may update it.
>  <p>
>  <strong>Note:</strong> the supplied supplied JSON object must contain a <code>version</code> that must match
>  the server's version of the comment or the update will fail. To determine the current version of the comment,
>  the comment should be fetched from the server prior to the update. Look for the 'version' attribute in the
>  returned JSON structure.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function updateComment(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $commitId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Optional ```  | the ID of the comment to retrieve |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$commentId = 187;

$result = $client->updateComment($dynamic, $projectKey, $repositorySlug, $commitId, $commentId);

```


#### <a name="delete_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteComment") deleteComment

> Delete a commit comment. Anyone can delete their own comment. Only users with <strong>REPO_ADMIN</strong>
>  and above may delete comments created by other users. Comments which have replies <i>may not be deleted</i>,
>  regardless of the user's granted permissions.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function deleteComment(
        $projectKey,
        $repositorySlug,
        $version = -1,
        $commitId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| version |  ``` Optional ```  ``` DefaultValue ```  | The expected version of the comment. This must match the server's version of the comment or
                  the delete will fail. To determine the current version of the comment, the comment should be
                  fetched from the server prior to the delete. Look for the 'version' attribute in the returned
                  JSON structure. |
| commitId |  ``` Optional ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Optional ```  | the ID of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$version = -1;
$commitId = 'commitId';
$commentId = 187;

$result = $client->deleteComment($projectKey, $repositorySlug, $version, $commitId, $commentId);

```


#### <a name="get_comment"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getComment") getComment

> Retrieves a commit discussion comment.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that the commit
>  is in to call this resource.


```php
function getComment(
        $projectKey,
        $repositorySlug,
        $commitId = null,
        $commentId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |
| commentId |  ``` Optional ```  | the ID of the comment to retrieve |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';
$commentId = 187;

$result = $client->getComment($projectKey, $repositorySlug, $commitId, $commentId);

```


#### <a name="create_assign_participant_role"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createAssignParticipantRole") createAssignParticipantRole

> Assigns a participant to an explicit role in pull request. Currently only the REVIEWER role may be assigned.
>  <p>
>  If the user is not yet a participant in the pull request, they are made one and assigned the supplied role.
>  <p>
>  If the user is already a participant in the pull request, their previous role is replaced with the supplied role
>  unless they are already assigned the AUTHOR role which cannot be changed and will result in a Bad Request (400)
>  response code.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createAssignParticipantRole(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 187;

$result = $client->createAssignParticipantRole($dynamic, $projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="delete_unassign_participant_role"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteUnassignParticipantRole") deleteUnassignParticipantRole

> Unassigns a participant from the REVIEWER role they may have been given in a pull request.
>  <p>
>  If the participant has no explicit role this method has no effect.
>  <p>
>  Afterwards, the user will still remain a participant in the pull request but their role will be reduced to
>  PARTICIPANT. This is because once made a participant of a pull request,
>  a user will forever remain a participant. Only their role may be altered.
>  <p>
>  The authenticated user must have <strong>REPO_WRITE</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteUnassignParticipantRole(
        $projectKey,
        $repositorySlug,
        $username = null,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| username |  ``` Optional ```  | the participant's user name |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$username = 'username';
$pullRequestId = 187;

$result = $client->deleteUnassignParticipantRole($projectKey, $repositorySlug, $username, $pullRequestId);

```


#### <a name="list_participants"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.listParticipants") listParticipants

> Retrieves a page of the participants for a given pull request.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function listParticipants(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 187;

$result = $client->listParticipants($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_user_settings"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getUserSettings") getUserSettings

> Retrieve a map of user setting key values for a specific user identified by the user slug.
>  <p>


```php
function getUserSettings($userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$userSlug = 'userSlug';

$result = $client->getUserSettings($userSlug);

```


#### <a name="update_settings"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSettings") updateSettings

> Update the entries of a map of user setting key/values for a specific user identified by the user slug.
>  <p>


```php
function updateSettings(
        $dynamic,
        $userSlug)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| userSlug |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$userSlug = 'userSlug';

$result = $client->updateSettings($dynamic, $userSlug);

```


#### <a name="get_repository_hooks"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepositoryHooks") getRepositoryHooks

> Retrieve a page of repository hooks for this repository.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryHooks(
        $projectKey,
        $repositorySlug,
        $type = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| type |  ``` Optional ```  | the optional type to filter by. Valid values are <code>PRE_RECEIVE</code> or <code>POST_RECEIVE</code> |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$type = 'type';

$result = $client->getRepositoryHooks($projectKey, $repositorySlug, $type);

```


#### <a name="update_set_settings"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateSetSettings") updateSetSettings

> Modify the settings for a repository hook for this repositories.
>  <p>
>  The service will reject any settings which are too large, the current limit is 32KB once serialized.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateSetSettings(
        $dynamic,
        $projectKey,
        $repositorySlug,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dynamic |  ``` Required ```  | TODO: Add a parameter description |
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dynamic = array('key' => 'value');
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $client->updateSetSettings($dynamic, $projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_settings"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getSettings") getSettings

> Retrieve the settings for a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getSettings(
        $projectKey,
        $repositorySlug,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $client->getSettings($projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_repository_hook"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getRepositoryHook") getRepositoryHook

> Retrieve a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function getRepositoryHook(
        $projectKey,
        $repositorySlug,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $client->getRepositoryHook($projectKey, $repositorySlug, $hookKey);

```


#### <a name="update_enable_hook"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.updateEnableHook") updateEnableHook

> Enable a repository hook for this repositories and optionally applying new configuration.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function updateEnableHook(
        $projectKey,
        $repositorySlug,
        $contentLength = 0,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contentLength |  ``` Optional ```  ``` DefaultValue ```  | TODO: Add a parameter description |
| hookKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contentLength = 0;
$hookKey = 'hookKey';

$result = $client->updateEnableHook($projectKey, $repositorySlug, $contentLength, $hookKey);

```


#### <a name="delete_disable_hook"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteDisableHook") deleteDisableHook

> Disable a repository hook for this repositories.
>  <p>
>  The authenticated user must have <strong>REPO_ADMIN</strong> permission for the specified repository to call this
>  resource.


```php
function deleteDisableHook(
        $projectKey,
        $repositorySlug,
        $hookKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| hookKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$hookKey = 'hookKey';

$result = $client->deleteDisableHook($projectKey, $repositorySlug, $hookKey);

```


#### <a name="get_changes"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getChanges") getChanges

> Retrieve a page of changes made in a specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getChanges(
        $projectKey,
        $repositorySlug,
        $since = null,
        $until = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| since |  ``` Optional ```  | the commit to which <code>until</code> should be compared to produce a page of changes.
                     If not specified the commit's first parent is assumed (if one exists) |
| until |  ``` Optional ```  | the commit to retrieve changes for |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$since = 'since';
$until = 'until';

$result = $client->getChanges($projectKey, $repositorySlug, $since, $until);

```


#### <a name="delete_unwatch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteUnwatch") deleteUnwatch

> Removes the authenticated user as a watcher for the specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit
>  to call this resource.


```php
function deleteUnwatch(
        $projectKey,
        $repositorySlug,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';

$result = $client->deleteUnwatch($projectKey, $repositorySlug, $commitId);

```


#### <a name="create_watch"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createWatch") createWatch

> Adds the authenticated user as a watcher for the specified commit.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository containing the commit
>  to call this resource.


```php
function createWatch(
        $projectKey,
        $repositorySlug,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| commitId |  ``` Optional ```  | the <i>full {@link Changeset#getId() ID}</i> of the commit within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$commitId = 'commitId';

$result = $client->createWatch($projectKey, $repositorySlug, $commitId);

```


#### <a name="create_approve"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.createApprove") createApprove

> Approve a pull request as the current user. Implicitly adds the user as a participant if they are not already.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function createApprove(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 187;

$result = $client->createApprove($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="delete_withdraw_approval"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.deleteWithdrawApproval") deleteWithdrawApproval

> Remove approval from a pull request as the current user. This does not remove the user as a participant.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the repository that this pull request
>  targets to call this resource.


```php
function deleteWithdrawApproval(
        $projectKey,
        $repositorySlug,
        $pullRequestId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| pullRequestId |  ``` Optional ```  | the id of the pull request within the repository |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$pullRequestId = 145;

$result = $client->deleteWithdrawApproval($projectKey, $repositorySlug, $pullRequestId);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Retrieve the diff between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>
                     to stream the diff without comments |
| commitId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;
$commitId = 'commitId';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $contextLines, $since, $srcPath, $whitespace, $withComments, $commitId);

```


#### <a name="get_stream_diff"></a>![Method: ](https://apidocs.io/img/method.png ".APIController.getStreamDiff") getStreamDiff

> Retrieve the diff between two provided revisions.
>  <p>
>  <strong>Note:</strong> This resource is currently <i>not paged</i>. The server will internally apply a hard cap
>  to the streamed lines, and it is not possible to request subsequent pages if that cap is exceeded. In the event
>  that the cap is reached, the diff will be cut short and one or more <code>truncated</code> flags will be set to
>  <code>true</code> on the segments, hunks and diffs substructures in the returned JSON response.
>  <p>
>  The authenticated user must have <strong>REPO_READ</strong> permission for the specified repository to call this
>  resource.


```php
function getStreamDiff(
        $projectKey,
        $repositorySlug,
        $contextLines = -1,
        $since = null,
        $srcPath = null,
        $whitespace = null,
        $withComments = true,
        $path = null,
        $commitId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| projectKey |  ``` Required ```  | TODO: Add a parameter description |
| repositorySlug |  ``` Required ```  | TODO: Add a parameter description |
| contextLines |  ``` Optional ```  ``` DefaultValue ```  | the number of context lines to include around added/removed lines in the diff |
| since |  ``` Optional ```  | the base revision to diff from. If omitted the parent revision of the until revision is used |
| srcPath |  ``` Optional ```  | the source path for the file, if it was copied, moved or renamed |
| whitespace |  ``` Optional ```  | optional whitespace flag which can be set to <code>ignore-all</code> |
| withComments |  ``` Optional ```  ``` DefaultValue ```  | <code>true</code> to embed comments in the diff (the default); otherwise <code>false</code>
                     to stream the diff without comments |
| path |  ``` Optional ```  | the path to the file which should be diffed (optional) |
| commitId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$projectKey = 'projectKey';
$repositorySlug = 'repositorySlug';
$contextLines = -1;
$since = 'since';
$srcPath = 'srcPath';
$whitespace = 'whitespace';
$withComments = true;
$path = 'path';
$commitId = 'commitId';

$result = $client->getStreamDiff($projectKey, $repositorySlug, $contextLines, $since, $srcPath, $whitespace, $withComments, $path, $commitId);

```


[Back to List of Controllers](#list_of_controllers)



