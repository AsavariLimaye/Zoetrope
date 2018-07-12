<?php

    // Use PDO to connect to the DB
    $dsn = 'mysql:dbname=zoetrope;host=localhost';
    $user = 'root';
    $password = 'password';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        echo '\nError Code:' . $e->getCode();
        if ($e->getCode( ) == 1049)
            {
            $dbh = new PDO("mysql:host=localhost", $user, $password);
            $dbh->exec("CREATE DATABASE zoetrope;");
            echo 'Created database zoetrope';
            $dbh->exec("USE zoetrope;");
            echo 'Using Zoetrope';
            try{
                $dbh = new PDO($dsn, $user, $password);
            }
            catch (PDOException $e)
            {
                echo 'Unable to create and use new database Zoetrope';
                echo $e->getMessage();
            }

            $ct1 = "create table Movies (mid int auto_increment, name varchar(30) not null,summary varchar(1000),posterlink varchar(100),rdate date,producer varchar(30),director varchar(30),composer varchar(30),language varchar(30),runtime int,rating float,genre varchar(20), primary key  (mid));";
            $ct2 = "create table TvShows (tvid int auto_increment, name varchar(30) not null,posterlink varchar(200),director varchar(20),rating float,runtime int,startdate date,genre varchar(15),seasons int,summary varchar(1000),primary key (tvid));";
            $ct3 = "create table users (uid int auto_increment,email varchar(30),firstname varchar(20),secondname varchar(20),password varchar(20), primary key (uid));";
            $ct4 = "create table movierating (uid int ,mid int, rating int, primary key (uid,mid));";
            $ct5 = "create table tvshowrating (uid int, tvid int ,rating int, primary key (uid,tvid));";
            $ct6 = "create table mwishlist(uid int, listname varchar(30),mid int, primary key (uid,mid,listname));";
            $ct7 = "create table tvwishlist(uid int, listname varchar(30),tvid int, primary key (uid,tvid,listname));";
            $ct8 = "create table mreview (uid int,mid int,review varchar(1000), primary key (uid,mid));";
            $ct9 = "create table tvreview (uid int,tvid int,review varchar(1000), primary key (uid,tvid));";
            $ct10 = "create table favactor (uid int,pid int,points float default 0, primary key (uid,pid));";
            $ct11 = "create table actors (name varchar(20),description varchar(5000),link varchar(1000),place varchar(100),dob date,pid int auto_increment, primary key(pid));";
            $ct12 = "create table mcast (mid int ,pid int, primary key(mid,pid));";
            $ct13 = "create table tvcast (tvid int ,pid int, primary key(tvid,pid));";

            try{
                echo "Creating Tables..";
                $dbh->exec($ct1);
                $dbh->exec($ct2);
                $dbh->exec($ct3);
                $dbh->exec($ct4);
                $dbh->exec($ct5);
                $dbh->exec($ct6);
                $dbh->exec($ct7);
                $dbh->exec($ct8);
                $dbh->exec($ct9);
                $dbh->exec($ct10);
                $dbh->exec($ct11);
                $dbh->exec($ct12);
                $dbh->exec($ct13);
            }
            catch (PDOException $e){
                echo $e->getMessage();
            }

            $handle = fopen("English Movies.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
            $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
                
                print $sql;
                    $dbh->exec($sql);
            }
            $handle = fopen("Hindi Movies.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
            $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
                
                print $sql;
                    $dbh->exec($sql);
            }
            
            $handle = fopen("Kannada Movies.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
            $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
                
                print $sql;
                    $dbh->exec($sql);
            }
            
            $handle = fopen("Malyalam Movies.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
            $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
                
                print $sql;
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("Tamil Movies.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
            $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
                
                print $sql;
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("TV Shows.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into TvShows (name,posterlink,director,rating,runtime,startdate,genre,seasons,summary) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\"," . $data[3]. "," . $data[4].",\"" .   $data[5] . "\",\"". $data[6]. "\"," . $data[7]. ",\"" . $data[8]. "\");"; 
                    $dbh->exec($sql);
            }
            
            $handle = fopen("Actors.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
                    print $sql;
                    $dbh->exec($sql); //or die("actor");
            }
            
            $handle = fopen("Hindi Actors.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
                    
                    //$sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",str_to_date('" . $data[4]."','%d-%m-%Y'));"; 
                    print $sql;
                    $dbh->exec($sql);
            }
            
            $handle = fopen("South Actors.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
                    print $sql;
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("Cast.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into mcast values (" . $data[0] . "," .$data[1].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into mcast values (" . $data[0] . "," .$data[2].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into mcast values (" . $data[0] . "," .$data[3].");"; 
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("TV Cast.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[1].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[2].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[3].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[4].");"; 
                    $dbh->exec($sql) ;
                    $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[5].");"; 
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("Movie Reviews.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into mreview values (" . $data[0] . "," .$data[1] . ",\"" .$data[2]. "\");"; 
                    print $sql;
                    $dbh->exec($sql) ;
            }
            $handle = fopen("Movie Ratings.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into movierating values (" . $data[0] . "," .$data[1] . "," .$data[2]. ");"; 
                    print $sql;
                    $dbh->exec($sql) ;
            }
            
            $handle = fopen("TV Review.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into tvreview values (" . $data[0] . "," .$data[1] . ",\"" .$data[2]. "\");"; 
                    print $sql;
                    $dbh->exec($sql) ;
            }
            $handle = fopen("TV Rating.csv", "r") or die("Unable to open file!");
            for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
                {
                    $sql = "INSERT into tvshowrating values (" . $data[0] . "," .$data[1] . "," .$data[2]. ");"; 
                    print $sql;
                    $dbh->exec($sql) ;
            }
            }
    }

?>