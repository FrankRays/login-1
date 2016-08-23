<?php
$conn = mysqli_connect('localhost','root','','project');
$postdata = $_POST;
if($postdata['password1'] === $postdata['password2']) {
    $sql = 'insert into `user`(first_name, last_name, email, address, contact_number, date_of_birth, gender, password) 
    VALUE 
("' .
        $postdata['first_name'] . '","' . $postdata['last_name'] . '","' . $postdata['email'] . '","' . $postdata['address'] .
        '","' . $postdata['contact_number'] . '","' . $postdata['date_of_birth'] . '","'. $postdata['gender'] .'""'.
        $postdata['password1'] .'")';

//die($sql);
    $insert = mysqli_query($conn, $sql);
    if ($insert == ture) {
        echo "JOB DONE";
        sheader('location: ./list.php');
    } else {
        echo "Fail To Do Your Job" . $conn->error;
    }
}else
{
    echo "Password Not Matched";
}
?>