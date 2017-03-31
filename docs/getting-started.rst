Getting Started
===============

Installation
------------

This software can be installed by importing the files off of the github repository. More instructions will come later.

.. warning:: 
   Installation instructions are not yet complete, nor are they tested on multiple machines.

Setting up a database
---------------------

Version 2 of the Attendance Reporter uses SQLite3. In order for PHP to write to a SQLite3 database, it needs to have sufficient permissions. The repository has a directory called ``db`` with a ``default.db`` SQLite3 database. ``db`` should be owned by whatever user runs PHP on your webserver.

Until a user is granted the uploader privilege, any user can make changes to the database with full administrative privileges.

Logging In
----------

I'm not a security expert, and do not want to be responsible for user passwords (especially reused user passwords that also give access to bank accounts!).

Once a user is defined with uploader privilege, all users are considered to be in one of three categories:

- uploader
- instructor
- non-privileged user

In order to login, users enter their email address, and a "magic link" is sent to their email address. This link has a 15 minute expiration period. Upon clicking this link, the user will be redirected to their dashboard.

Import Users
------------

An instructor or uploader can create, read, update, and delete users on the user tab of the dashboard.

Import Classes
--------------

An instructor or uploader can create, read, update, and delete classes on the classes tab of the dashboard. Once a class is created, it can be populated with users either through an uploader's csv upload page, or one-by-one in an instructor's class update interface.