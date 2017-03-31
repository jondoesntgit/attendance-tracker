.. _tracking_eigen_attendance:

Tracking eigen* Attendance
==========================

Eigen is a physics/math colloquium that meets about once per week during the fall and spring quarters.

Minimum attendence is calculated differently between MATH389 and PHYS277 courses. In both courses, the minimum attendance is 80% of the eigentalks. In addition to eigentalks, MATH389 allows only one eigenextra (like an eigenvespers) to count towards total attendance, and PHYS277 allows as many eigenextras as the student attends to count towards total attendance.

For example, if a student attended 8 out 12 eigentalks, and attend 2 eigenvespers, they would have attended 9/13=69% of all eigentalks, which would be failing. In MATH389, one of the two eigenvespers would count towards total attendance, bringing the ratio to 10/13=76% which would still be failing. In PHYS277, both eigenvespers would count, bringing the ratio to 11/13=84% which would be passing.

With this in mind, MATH389 students need to prioritize regular eigentalk attendance, whereas students in PHYS277 have more freedom to choose between eigentalks and eigenvespers.


.. _scanning_for_eigen:

Using the Scanner
-----------------

Before every eigentalk or eigenvespers, an eigensecretary responsible for attendance uses one of the department's Motorola CS3000 to scan each person present. This includes students that are enrolled and unenrolled. These scans are used for

- tracking how many people show up to different events
- generating attendance reports for PHYS277 and MATH389
- submitting lists of students to student life (slife@andrews.edu) for co-curricular credit

Anatomy of an eigen* CSV File
-----------------------------

.. note::
   In the following examples, three digits of each student's ID have been obscured to protect their privacy.


In a given csv file, one might see something like this:

.. code-block:: text

   09/30/16,13:35:02,03,0000###56803
   09/30/16,13:35:51,03,0000###66401
   09/30/16,13:35:52,03,0000###73302
   09/30/16,13:35:54,03,0000###00001
   09/30/16,13:35:56,03,0000###86306
   09/30/16,13:35:56,03,0000###93301
   09/30/16,13:35:58,03,0000###67202
   09/30/16,13:36:00,03,0000###73201
   09/30/16,13:36:14,03,0000###77201
   09/30/16,13:36:17,03,0000###37806
   09/30/16,13:36:20,03,0000###15201
   09/30/16,13:36:56,03,0000###37801
   09/30/16,13:38:45,03,0000###76401
   09/30/16,13:38:47,03,0000###93001
   09/30/16,13:38:52,03,0000###91901
   09/30/16,13:39:36,03,0000###11601
   09/30/16,13:39:48,03,0000###83501
   09/30/16,13:40:15,03,0000###81001
   09/30/16,13:40:16,03,0000###97001
   09/30/16,13:40:39,03,0000###78201
   09/30/16,13:40:58,03,0000###36203
   09/30/16,13:40:59,03,0000###36102
   09/30/16,13:41:21,03,0000###25503
   09/30/16,13:41:24,03,0000###87901

Submitting Attendance for Co-curricular Credit
----------------------------------------------

As of the time of this writing, Andrews University uses Motorola CS3000 scanners for most of their co-curricular tracking. Every eigenvespers is eligible for co-curricular credit, and up to three eigentalks are eligible for co-curricular credit each semester. 

In addition to this, if the talk is research-based, eigen can cooperate with ORCS (Office of Research and Creative Scholarship) to offer more events above and beyond these limits. Typically, these events should be advertised by flyers no less than seven days in advance, and should be published on OrgSync. For more information on co-curricular credit with ORCS, speak with Gary Burdick.

To submit an attendance record for co-curricular
credit, send an email to <slife@andrews.edu> with the attached .csv file from the CS3000 scanner, as well as the title of the event, the time and date, and the location of the event. The event should be uploaded to vault within a few days.


Eigen Student Reports
---------------------
Requires instructor/uploader/student privileges

An Eigen Student Report generates a list which shows what events a student
attended.

Eigen Class Reports
-------------------
Rquires instructor/uploader/student privileges

An Eigen Report generates a table which shows how many eigens each student has
attended. The HTML version of the report allows a user to 
--

