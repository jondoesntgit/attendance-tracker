History
=======

This is a brief history to describe how this program came into existence and the continued function it serves.

Paper System
------------

In 2012 and before, an eigensecretary would have a sign-up sheet that would
be brought every week to eigen. Students would sign in while they were getting
food, and the eigensecretary would be responsible for tallying up how many
students had attended each event, and provide up-to-date records to the
department chairs and student life.

Automation
----------

In 2012, Jonathan Wheeler (yours truly) modified a python script to use
CS1504 scanners we acquired from Meier Hall on campus to scan student ID cards.
The scanners were then downloaded as .csv files into a Dropbox folder.
Jonathan wrote a bash script which would tally up in how many files a given
ID number was found in, and this was used for basic reporting.

In the summer of 2013, Jonathan implemeted a similar program for tallying up
student participation in SGLs. Until this point, LAs (Learning Assistants) would
initial slips of paper and an LA or professor would have to tally up the 
score for each student. This was prone to error, as slips of paper may
have been forgotten or lost.

The solution we found was to have each LA carry around a laminated sheet of
paper with barcodes ``Start 1``, ``Start 2``, etc... ``Stop`` and ``EC`` (extra
credit). The way in which these barcodes is better explained in 
:ref:`scanning_for_sgl`. Another bash script was developed to process these
files.

Attendance Reporter 1.0
-----------------------

In the Winter of 2014, Jonathan migrated the code from bash scripts into a
PHP program and hosted it on the physics space on Andrews University's
website. This worked for a while, but still required a lot of manual work
to setup between semesters. Before Jonathan graduated, he trained several
students on how to use the program, but did not give training on how to set
it up between semesters, as that process was relatively difficult.

Attendance Reporter 2.0
-----------------------

In Fall of 2016, Jonathan created version 2.0 of the Attendance Report which
instead of parsing .csv files with PHP to generate every report, it now
used SQLite3 databases. The hope was that this would make backups and
transitioning semesters much cleaner, as the web directories wouldn't be
filled with individual csv files, which were headaches when it came to 
file permissions.