

<h1>QuickContact</h1>
QuickContact is a Laravel package designed to simplify handling user queries. With this package, users can submit queries via a customizable contact form, and administrators can store, view, and reply to those queries within the application.

Features
Contact Form Component: Easily embed a contact form in your application to allow users to submit their queries.
Query Storage: Automatically store user queries in the database for easy management.
Reply to Users: Admins can reply to user queries directly from the application.
Installation
To install QuickContact in your Laravel application, follow these steps:

**Step 1** : Install the Package
You can install the package via Composer:

bash
Copy code
<div>composer require vendorname/quickcontact<div>

Step 2: Publish the Configuration & Migrations
After installation, you need to publish the package’s assets and migration files:

bash
Copy code
php artisan vendor:publish --tag="quickcontact-config"
php artisan vendor:publish --tag="quickcontact-migrations"
Step 3: Run Migrations
Once the migration files are published, run the migrations to create the necessary database tables:

bash
Copy code
php artisan migrate
Step 4: Add the Route
The package automatically registers a route for users to access the contact form. The default route is /contact.

You can customize the form component by publishing the views:

bash
Copy code
php artisan vendor:publish --tag="quickcontact-views"
Usage
Contact Form
To allow users to submit queries, navigate to the /contact route in your browser. This route displays the form where users can submit their queries.

Alternatively, you can add the form component anywhere in your application by using the blade component:

blade
Copy code
<x-quickcontact-form />
Storing Queries
Once a user submits a query via the form, it will be stored in the database automatically. You can customize the database storage settings by modifying the published config file located at config/quickcontact.php.

Admin Reply
Admins can view user queries in the application and reply directly to them. When an admin sends a reply, the user will receive the response via email (or in-app notification, depending on your configuration).

Customization
You can modify various aspects of the package to fit your needs:

Form Customization: Customize the form fields and design by editing the views in the resources/views/vendor/quickcontact folder after publishing the views.
Email Customization: Customize the email templates for admin replies by editing the email blade files in the resources/views/vendor/quickcontact/emails directory.
Configuration
You can configure the package settings by modifying the config/quickcontact.php file. Some of the settings include:

Admin Email: Define where admin notifications about new queries should be sent.
Reply Email Template: Choose an email template for replies.
Example
Here is an example of how the package works:

User Submission: Users visit /contact or use the quickcontact-form component to submit queries.
Query Storage: User queries are stored in the database.
Admin Response: Admin views the query and responds directly from the admin panel.
License
QuickContact is open-sourced software licensed under the MIT license.

Additional Notes:
If you plan to add more features later (such as API support or notifications), you can update the README to reflect those changes.
Ensure that users know where to customize things like routes, views, and emails based on how your package is designed.
