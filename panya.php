<?php
    //variable 
    $Full_Name = $_REQUEST['Full Name'];
    $Email_id = $_REQUEST['Email id'];
    $Phone_No = $_REQUEST['Phone No'];
    $Subject = $_REQUEST['Subject'];
    $massg = $_REQUEST['massg'];

    //check input
    if (empty($Full_Name) || empty($Email_id) || empty($Phone_No) || empty($Subject) || empty($massg))
    {
        echo "plz input the info";
    }
    else
    {
        mail("panyachavan612@gmail.com","webtech massg", $massg , "form : $Full_Name< $Email_id>");
        echo "<script type='text/javascript;'> alert('ur massg send successfullly');
                window.history.log(-1);
        
        </script>";
    }
?>
