# DatabaseFINAL-Project
## Group Members
*Brian Hillis   
*Jason Teserau  
*Logan Jakuboski  
*Christian Caldwell  

## Link to Website 
http://jasontesreau.epizy.com/databaseFinal/login.php

## Login information
Username:test  
Password:pass

## Description of our application
Our application is designed to be used as a restaurant hostess application. Our program’s main goal is to help hostesses stay organized through an easy to use interface. The hostess can change the status of a table to reserved, walk-in, or empty and easily identify them by a change in color or receiving information through the "get information" button. This can eliminate confusion between hostesses by making the process easier, faster, and more reliable.  
  
Our project was completed in 4 face-to-face meetings where we collaborated on the ideas, coding, and research for our project. All files were uploaded upon full completion except the README.md and some preliminary commitments. 

## Schema of Database
Table - reserveTable - table of reservations made previous to arriving at the restaurant  
*firstName - first name of the person making the reservation  
*lastName - last name of the person making the reservation  
*arrivalTime - what time the party thinks they will arrive  
*numberInParty - number of members in the party to be seated  
*seatID - ID of the table they will be seated at   
   
Table - walkInTable - table of times walkin customers arrived and where they are sitting  
*seatID - ID of the table they are seated at   
*time - time that the party arrived at the restaurant   

## ERD 
![alt text](https://github.com/segFaultCity/Database-Final/blob/master/Screen%20Shot%202018-05-03%20at%2012.17.44%20PM.png "ERD")

## CRUD
Create - We implemented create through the use of the INSERT keyword(add.php and addW.php). Every time someone makes a reservation we create data for them, and add it to the reserveTable database. Every time someone walks in we also create data for them and add it to the walkInTable database.   
   
Read -  We implemented read through the use of the SELECT keyword (readWI.php and readRI.php).If the hostess wants to see all the information in the tables, they can press the get info button on the control panel. We also take information from the database and portray it as a color filling the table. The hostess then sees the color of the table and can sit parties at empty table.   
  
Update - We implemented update through the UPDATE keyword (update.php). We are updating the information for a reservation if the person decides to change information like the time or number in party.  
  
Delete - We implemented delete through the use of the DELETE keyword(delete.php). We are deleting data when peoples reservations have expired or a customer leaves.  
  
## Video Link
https://www.youtube.com/watch?v=fLpEok9wWAQ 





