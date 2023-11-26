<?php
            include "connection.php";
            $name=$_POST['adName'];
            $email=$_POST['adEmail'];
            $mob=$_POST['adMob'];
            $pass=$_POST['adPass'];
            $sql="CREATE TABLE admn(
                        adname VARCHAR(255),
                        email VARCHAR(255),
                        mobile INT(20),
                        pass VARCHAR(15)
            );";
            $q=mysqli_query($conn,$sql);
            if($q==TRUE){
                        $sql1="INSERT INTO admn (adname,email,mobile,pass) VALUES ('$name','$email','$mob','$pass');";
                        $q1=mysqli_query($conn,$sql1);
                        if($q1==TRUE){
                                    $sql2="CREATE TABLE result(
                                                stuName VARCHAR(255)
                                    );";
                                    $q2=mysqli_query($conn,$sql2);
                                    $sql3="CREATE TABLE testpapers(
                                                id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                testname VARCHAR(255),
                                                examDate DATETIME,
                                                examDuration TIME,
                                                rightAnswer Float,
                                                wrongAnswer Float,
                                                expireTime TIME
                                    );";
                                    $q3=mysqli_query($conn,$sql3);
                                    header("location:adminHome/admin.php?name=$name");
                        }
            }else{
                        $sq4="DROP TABLE admn;";
                        $q4=mysqli_query($conn,$sq4);
                        if($q4==TRUE){
                                    $q5=mysqli_query($conn,$sql);
                                    if($q5==TRUE){
                                                $sql1="INSERT INTO admn (adname,email,mobile,pass) VALUES ('$name','$email','$mob','$pass');";
                                                $q1=mysqli_query($conn,$sql1);
                                                if($q1==TRUE){
                                                            $sql2="CREATE TABLE result(
                                                                        stuName VARCHAR(255)
                                                            );";
                                                            $q2=mysqli_query($conn,$sql2);
                                                            $sql3="CREATE TABLE testpapers(
                                                                        id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                                                        testname VARCHAR(255),
                                                                        examDate DATETIME,
                                                                        examDuration TIME,
                                                                        rightAnswer Float,
                                                                        wrongAnswer Float,
                                                                        expireTime TIME
                                                            );";
                                                            $q3=mysqli_query($conn,$sql3);
                                                            header("location:adminHome/admin.php?name=$name");
                                                }
                                    }
                        }
            }
?>