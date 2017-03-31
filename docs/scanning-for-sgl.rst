.. _tracking_sgl_attendance:

Tracking SGL Attendance
=======================

SGLs are small group learning activites in the general physics curriculum. During fall and spring semesters, they occur once per week, and during the summer intensive sessions, they happen daily.


.. _scanning_for_sgl:

Using the Scanner
-----------------

LAs carry around laminated sheets of paper with the following barcodes in Code 128 format.

- ``Start 1``
- ``Start 2``
- ``Start 3``
- ``Start 4``
- ``Start 5``
- ``Stop``
- ``EC``

As the SGL progresses, students raise their hands at instructor-defined checkpoints. LAs chat with these groups and assess whether they understand the concepts of that checkpoint. If they do, the LA records the successful completion of the checkpoint by scanning the corresponding start codon (``Start 1`` for checkpoint 1, etc...) and then each of the students' ID cards. When all of the ID cards have been scanned, the LA scans the stop codon.

Extra credit can be optionally awarded if the group went above and beyond to understand the relevant concepts. Historically, diagrams and well-thought out pictures on the table whiteboards have been sufficient merit for extra credit. This extra credit codon should be scanned immediately after the ``Start #`` codon, and before any ID cards are scanned. The extra credit is turned off for the next group by scanning the ``Stop`` codon.

Anatomy of an SGL CSV File
--------------------------

.. note::
   In the following examples, three digits of each student's ID have been obscured to protect their privacy.


In a given csv file, one might see something like this:

.. code-block:: text

   03/03/16,11:46:51,03,Start 1
   03/03/16,11:47:00,03,0000###84603
   03/03/16,11:47:01,03,0000###69402
   03/03/16,11:47:01,03,0000###91101
   03/03/16,11:47:02,03,0000###96301
   03/03/16,11:47:04,03,Stop 
   03/03/16,11:48:06,03,Stop
   03/03/16,11:48:11,03,Start 2
   03/03/16,11:48:13,03,EC
   03/03/16,11:48:20,03,0000###84603
   03/03/16,11:48:22,03,0000###14002
   03/03/16,11:48:23,03,0000###04802
   03/03/16,11:48:34,03,Stop
   03/03/16,11:51:37,03,Stop 
   03/03/16,11:51:43,03,Start 2
   03/03/16,11:51:45,03,0000###84603
   03/03/16,11:51:46,03,0000###55101
   03/03/16,11:51:47,03,0000###72701
   03/03/16,11:51:49,03,Stop

In order to understand how this file is parsed, it may be useful to think of
it in terms of xml

.. code-block:: xml

   <checkpoint number="1">
       <scan id="###846" />
       <scan id="###694" />
       <scan id="###911" />
       <scan id="###963" />
   </checkpoint>
   <checkpoint number="2" extra-credit="true">
       <scan id="###846" />
       <scan id="###140" />
       <scan id="###048" />
   </checkpoint>
   <checkpoint number="2">
       <scan id="###846" />
       <scan id="###551" />
       <scan id="###727" />
   </checkpoint>

.. note::
   In order to understand how Andrews University formats the barcode on student
   ID cards, the first four digits are padded zeros, in case we ever have a
   huge number of students. The last two digits indicate that this is the nth
   ID card this student has had.

   As an example, 000012345603 would correspond to the 3rd ID card issued
   to the student with ID 123456.

SGL Student Reports
-------------------
Requires instructor/uploader/student privileges

An SGL Student Report generates a table which describes which checkpoints a given student finished in each
SGL. It does this for a given student by iterating over every SGL in the class. It searches through
sgl_scans table for entries with the student_id and sgl_id. It then generates nested
lists showing when each checkpoint was completed for a given SGL.

SGL Class Reports
-----------------

Requires instructor/uploader privileges

An SGL Class Report  generates a table which shows how many checkpoints each student finished in each SGL.

It does this by iterating over every student in the class, and then summarizes
the [SGL Student Reports](#sgl-student-reports) by adding the 
total number of checkpoints (including extra credit)
into a cell in a table.

