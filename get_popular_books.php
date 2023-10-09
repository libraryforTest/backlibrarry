<?php

$con = mysqli_connect("localhost", "root" ,"", "library_app");
$sql = "SELECT * from books order by requests desc LIMIT 10";

$result = mysqli_query($con, $sql);
$response = array();
while($row = mysqli_fetch_array($result)){
    array_push($response, array("Title"=>$row["title"], "Author"=>$row["author"], "isbn"=>$row["isbn"], "Category"=>$row["category"],"Description"=>$row["descriptions"], "Cover"=>$row["cover"], "Uploadedby"=>$row["uploadedby"], "Requests"=>$row["requests"], "Remaining"=>$row["available"]));

}

echo json_encode($response);