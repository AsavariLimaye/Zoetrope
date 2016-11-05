<?php

    // Use PDO to connect to the DB
    $dsn = 'mysql:dbname=zoetrope;host=localhost';
    $user = 'root';
    $password = 'Asavari2';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    
//Mallu movies 
    $handle = fopen("Malyalam_movies-CORRECT.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (title,description,posterLink,releaseDate,director,producer,language,cast,runtime,rating) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",\"" .   $data[3] . "\",\"" . $data[4]. "\",\"" . $data[6]. "\",\"" . $data[7]. "\",\"" . $data[8]. "\"," . $data[9]."," . $data[10]. ");";      
          
           //print $sql;
            $dbh->exec($sql) ;//or die ("Error") ;
    }

  
    $handle = fopen("Hindi_movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (title,description,posterLink,releaseDate,director,producer,language,cast,runtime,rating) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",\"" .   $data[3] . "\",\"" . $data[4]. "\",\"" . $data[6]. "\",\"" . $data[7]. "\",\"" . $data[8]. "\"," . $data[9]."," . $data[10]. ");";      
         
           //print $sql;
            $dbh->exec($sql);// or die ("Error") ;
    }
    
    $handle = fopen("English_movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
   $sql = "INSERT into movies (title,description,posterLink,releaseDate,director,producer,language,cast,runtime,rating) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",\"" .   $data[3] . "\",\"" . $data[4]. "\",\"" . $data[6]. "\",\"" . $data[7]. "\",\"" . $data[8]. "\"," . $data[9]."," . $data[10]. ");";      
          
           //print $sql;
            $dbh->exec($sql) ;//or die ("Error") ;
    }

    $handle = fopen("Kannada_movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
    {
    $sql = "INSERT into movies (title,description,posterLink,releaseDate,director,producer,language,cast,runtime,rating) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",\"" .   $data[3] . "\",\"" . $data[4]. "\",\"" . $data[6]. "\",\"" . $data[7]. "\",\"" . $data[8]. "\"," . $data[9]."," . $data[10]. ");";      
          
           print $sql;
            $dbh->exec($sql) ;//or die ("Error") ;
    }
    
    
    $handle = fopen("Tamil_movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
    {
   $sql = "INSERT into movies (title,description,posterLink,releaseDate,director,producer,language,cast,runtime,rating) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",\"" .   $data[3] . "\",\"" . $data[4]. "\",\"" . $data[6]. "\",\"" . $data[7]. "\",\"" . $data[8]. "\"," . $data[9]."," . $data[10]. ");";      
          
           print $sql;
            $dbh->exec($sql) ;//or die ("Error") ;
    }
    
?>