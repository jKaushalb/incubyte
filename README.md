# incubyte
Repo For Data Engineer Task



project structure

# htdocs
  # |--incubyte
  #  |-- data.php
  #  |-- db_connection.php
  #  |-- records
  #       |-- record.dat
  #       |-- record1.dat
     
Approach:

Here i will read all the files in records directory. In each file i will split each row by | and if first index is D then i will check  whether table with given country  exist in 
databse or not otherwise i will create table and then entre the record into it.here all sql query - backend stuff is in db_connection.php file and all the logic is in data.php file.

