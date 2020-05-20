<?php 

$lessonID = $_GET["Tid"];
$queryViews = "SELECT *FROM views WHERE lessonID = '$lessonID' ";
$dataViews = mysqli_query($conn,$queryViews);
$resultViews = mysqli_fetch_assoc($dataViews);
				
$viewCount = $resultViews['views'];


if( $viewCount == 0 )
{
  $sqlinsertView = "INSERT INTO views (lessonID, views) VALUES ($lessonID,1)";
  $conn->query($sqlinsertView);
}
else
{
  $viewCount = $viewCount + 1; 

  $sqlViewUpdate = "UPDATE  views SET  views = $viewCount  WHERE lessonID = $lessonID ";
  $conn->query($sqlViewUpdate);
  
}


?> 