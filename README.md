# <p align="center"><a href="#" target="_blank"><img src="https://png.pngtree.com/png-vector/20190806/ourlarge/pngtree-alert-bell-notification-sound-blue-dotted-line-line-icon-png-image_1651804.jpg" width="100"></a></p>

<p align="center">
  <b>Makes Laravel Notification a Breeze...</b><br>
  <a href="https://github.com/SHIFTECH-AFRICA/laravel-notification/issues">
  <img src="https://img.shields.io/github/issues/SHIFTECH-AFRICA/laravel-notification">
  </a>
  <a href="https://github.com/SHIFTECH-AFRICA/laravel-notification/network/members">
  <img src="https://img.shields.io/github/forks/SHIFTECH-AFRICA/laravel-notification">
  </a>
  <a href="https://github.com/SHIFTECH-AFRICA/laravel-notification/stargazers">
  <img src="https://img.shields.io/github/stars/SHIFTECH-AFRICA/laravel-notification">
  </a>
    <a href="https://packagist.org/packages/shiftechafrica/laravel-notification">
    <img src="https://poser.pugx.org/shiftechafrica/laravel-notification/v/stable">
    </a>
    <a href="https://packagist.org/packages/shiftechafrica/laravel-notification">
    <img src="https://poser.pugx.org/shiftechafrica/laravel-notification/downloads">
    </a>
  <br><br>
</p>

This package is custom notify for any model, so instead of using laravel notification. I built this custom notification package for my projects, so if you want to try it out read through the documentation.

## Installing

The recommended way to install *shiftechafrica/laravel-notification* is through
[Composer](http://getcomposer.org).

```bash
# Install package via composer
composer require shiftechafrica/laravel-notification
```

Next, run the Composer command to install the latest stable version of *shiftechafrica/laravel-notification*:

```bash
# Update package via composer
 composer require shiftechafrica/laravel-notification --lock
```

After installing, the package will be auto discovered, But if need you may run:

```php
# run for auto discovery <-- If the package is not detected automatically -->
composer dump-autoload
```

Then run this, to get the *config/note.php* for configurations:

```php
# run this to get the configuartion file at config/note.php <-- read through it -->
php artisan vendor:publish --provider="Note\NoteServiceProvider"
```

You will have to provide this in the *.env* for the api configurations:

```php
# This is the pagination number you want to paginate with <-- default(10) -->
NOTE_NOTIFICATION_PAGINATE=

# set all the guards to use within the system
SYSTEM_GUARDS=admin,web
```
## Usage
Follow the steps below on how to use the package:

```php
# On the relating model use
public function notification(){
 return #the relationship
}
```

```php
   use Note\Note;
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //The instance should be your guard either admin,auth on so on.
    }

    /**
     * ---------------------------------
     * Read a notification.
     * ---------------------------------
     */
    public function readNotification() {
        Note::readNotification(PassNotificationID);//Pass notification model id.
    }

    /**
     * ---------------------------------
     * Read a trashed notification.
     * ---------------------------------
     */
    public function readTrashedNotification() {
        Note::readTrashedNotification(PassNotificationID);//Pass notification model id.
    }

    /**
     * ---------------------------------
     * Fetch Latest Notification Here
     * ---------------------------------
     */
    public function latestNotifications() {
        Note::latestNotifications();
    }

    /**
     * --------------------------------
     * Fetching all notifications
     * --------------------------------
     */
    public function allNotifications() {
        Note::allNotifications();
    }

    /**
     * --------------------------------
     * Fetching all unread notifications
     * --------------------------------
     */
    public function unreadNotifications() {
        Note::unreadNotifications();
    }

    /**
     * =-------------------------------
     * Deleting a single notification
     * ------------------------------------------------------------------------------
     * To achieve single notification create a route that receives a (string) notification_id
     * Note that this package uses uuids so the notification_id has to be a string
     * ----------------------------------------------------------------------------------------
     */
    public function deleteSingleNotification(string $notification_id) {
        Note::deleteSingleNotification($notification_id);//Pass notification model id.
    }

    /**
     * =-------------------------------
     * Deleting a trashed notification
     * ------------------------------------------------------------------------------
     * To achieve single notification create a route that receives a (string) notification_id
     * Note that this package uses uuids so the notification_id has to be a string
     * ----------------------------------------------------------------------------------------
     */
    public function deleteTrashedNotification(string $notification_id) {
        Note::deleteTrashNotification($notification_id);//Pass notification model id.
    }

    /**
     * =-------------------------------
     * Deleting a all notification
     * --------------------------------
     */
    public function deleteAllNotifications() {
        Note::deleteAllNotifications();
    }
    
   /**
     * --------------------------------------
     * Fetch the trashed notifications here
     * --------------------------------------
    */
    public function trashedNotifications(){
         Note::trashedNotifications();
    }
    
    
   /**
     * ------------------------------------------
     * Clear all the trashed notifications here
     * -----------------------------------------
    */
    public function clearTrashedNotifications(){
         Note::clearTrashedNotifications();
    }

    /**
     * --------------------------------
     * Creating new notification here
     * --------------------------------
     * In creating notification we need 4 parameters are required
     * -------------------------------------------------------------------------------------------------------
     */
    public function createSystemNotification() {
        //This is for creating user notifications
        Note::createSystemNotification('This will be the Model class i.e App\User','My Notification Subject', 'My Notification Message');
    }


    /**
     * ---------------------------
     * TODO SIMPLE PACKAGE NOTES
     * -----------------------------------------------------------------------------------------
     * For the functions used above can be changed to your own names to call the package names
     * -----------------------------------------------------------------------------------------
     */


```

## Version Guidance

| Version | Status     | Packagist           | Namespace    | Repo                                                                                  |
|---------|------------|---------------------|--------------|---------------------------------------------------------------------------------------|
| 1.x     | Latest     | `shiftechafrica/laravel-notification` | `Note/NoteServiceProvider` | [v1.0.6](https://github.com/SHIFTECH-AFRICA/laravel-notification/releases/tag/v1.0.6) |

[shiftechafrica/laravel-notification-1-repo]: https://github.com/SHIFTECH-AFRICA/laravel-notification

## Security Vulnerabilities
 For any security vulnerabilities, please email to [Support](mailto:bugs@@shiftech.co.ke).

## License
 This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
