<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php 
session_start();
include 'include/dbconn.php';
include 'include/cache.php';
if(isset($_COOKIE['id'])){
$last_link = $_SERVER['REQUEST_URI'];
setcookie ("last_link",$last_link,time()+ (10 * 365 * 24 * 60 * 60));
$fulln = $_COOKIE['id'];


$stmt = sqlsrv_query ($conn , "SELECT *  FROM [jim].[dbo].[login] WHERE id = '$fulln'");
if ($stmt){
$r = sqlsrv_fetch_array($stmt);
$editor= $r['id'];
$fulname= $r['fulname'];
$role = $r['role'];
$ngri = $r['ngri'];
}
}

//Start Twitter

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_Tweets]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_Tweets_link]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_UserTags]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_UserTags_link]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_Followers]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Twitter_Users]" );

sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[msocial_link] ([sm_id])
						SELECT [TwitterUserID] FROM [snapd].[dbo].[Twitter_Users] t1
						WHERE NOT EXISTS(SELECT [sm_id] FROM [jim].[dbo].[msocial_link] t2 WHERE t2.sm_id = t1.TwitterUserID)

					  ALTER TABLE [jim].[dbo].[Twitter_Users] NOCHECK CONSTRAINT [FK_Twitter_Users_msocial_link]

					  INSERT  INTO  [jim].[dbo].[Twitter_Users] (twitterUserID_to_jim,TwitterUserID,TwitterName,FullName)
						SELECT [TwitterUserID],[TwitterUserID],[TwitterName],[FullName]
						FROM [snapd].[dbo].[Twitter_Users]" );

$stmt = sqlsrv_query( $conn, "SELECT * FROM [snapd].[dbo].[Twitter_UserTags]" );
if($stmt == FALSE){}
while($row1 = sqlsrv_fetch_array($stmt))
{
	sqlsrv_query( $conn, "INSERT INTO [dbo].[Twitter_UserTags_link]
           						([TwitterName]
           						,[TwitterName_to_user])
           					VALUES
           						('$row1[TwitterName]',
           						 '$row1[TwitterName]')" );
}

$stmt = sqlsrv_query( $conn, "SELECT * FROM [snapd].[dbo].[Twitter_Tweets]" );
if($stmt == FALSE){}
while($row1 = sqlsrv_fetch_array($stmt))
{
	sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[Twitter_Tweets_link]
           						([AuthorTwitterName]
           						,[AuthorTwitterName_to_user])
     						VALUES
           						('$row1[AuthorTwitterName]',
		    					 '$row1[AuthorTwitterName]')" );
}

sqlsrv_query( $conn, "INSERT  INTO  [jim].[dbo].[Twitter_UserTags] ([TagID],[TwitterName],[Source],[TagKey],[TagValue],[TimeStamp],[TwitterUserID])
						SELECT [TagID],[TwitterName],[Source],[TagKey],[TagValue],[TimeStamp],[TwitterUserID]
						FROM [snapd].[dbo].[Twitter_UserTags]" );

sqlsrv_query( $conn, "ALTER TABLE [jim].[dbo].[Twitter_Followers] NOCHECK CONSTRAINT [FK_Twitter_Followers_Twitter_Users1]

					  INSERT  INTO  [jim].[dbo].[Twitter_Followers] ([TwitterName],[TwitterUserID],[TwitterFollowerName],[TwitterFollowerUserID])
						SELECT [TwitterName],[TwitterUserID],[TwitterFollowerName],[TwitterFollowerUserID]
						FROM [snapd].[dbo].[Twitter_Followers]" );

sqlsrv_query( $conn, "INSERT  INTO  [jim].[dbo].[Twitter_Tweets] ([TweetID],[ScrapedTimeStamp],[Body],[TwitterTargetID],[Hash],[TwitterUserID],[TweetType],[ReTweetedFromUserID],[PostTimeStamp],[Location],[TweetBodyText],[TwitterTweetID],[DateOnlyTimeStamp],[WallTwitterName],[AuthorTwitterName],[PosterTwitterName],[ReTweetedTwitterName])
						SELECT [TweetID],[ScrapedTimeStamp],[Body],[TwitterTargetID],[Hash],[TwitterUserID],[TweetType],[ReTweetedFromUserID],[PostTimeStamp],[Location],[TweetBodyText],[TwitterTweetID],[DateOnlyTimeStamp],[WallTwitterName],[AuthorTwitterName],[PosterTwitterName],[ReTweetedTwitterName]
						FROM [snapd].[dbo].[Twitter_Tweets]" );


//end Twitter

//Start Intagram

sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_PostLikes]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_UserData]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_PostData]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_PostLikes]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_Comments_link]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_Comments]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_Posts_link]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_Posts]" );
sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Instagram_Users]" );

$stmt = sqlsrv_query( $conn, "SELECT * FROM [snapd].[dbo].[Instagram_Users]" );

if($stmt == FALSE){}
while($row1 = sqlsrv_fetch_array($stmt))
{
	
	$stmt1 = sqlsrv_query ($conn , "SELECT * FROM [snapd].[dbo].[Instagram_UserData] WHERE InstagramUserID = $row1[InstagramUserID] ORDER BY LastFound DESC");
	$r = sqlsrv_fetch_array($stmt1);
	//echo $data = $r['Data']."<br>";
	$data = '0x'.strtoupper(bin2hex($r['Data']));
	//$data = bin2hex($r['Data']);

	sqlsrv_query( $conn, "ALTER TABLE [jim].[dbo].[Instagram_Users] NOCHECK CONSTRAINT [FK_Instagram_Users_msocial]

						  INSERT INTO [jim].[dbo].[Instagram_Users]
           						([InstagramUserID_to_jim]
           						,[InstagramUserID]
           						,[InstagramName]
           						,[FullName]
           						,[InstagramUserID_userdata]
           						,[Data])
     						VALUES
     							($row1[InstagramUserID],
     							 $row1[InstagramUserID],
     							 '$row1[InstagramName]',
     							 '$row1[FullName]',
     							 $row1[InstagramUserID],
								 CONVERT(VARBINARY(MAX), '"."0x".strtoupper(bin2hex($r['Data']))."', 1))");


	sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[Instagram_Comments_link]
           						([InstagramUserID]
           						,[InstagramUserID_to_user])
     						VALUES
           						($row1[InstagramUserID],
     							 $row1[InstagramUserID])");


	sqlsrv_query( $conn, "INSERT INTO [jim].[dbo].[Instagram_Posts_link]
								([InstagramUserID]
           						,[InstagramUserID_to_user])
     						VALUES
           						($row1[InstagramUserID],
     							 $row1[InstagramUserID])");

}


	sqlsrv_query( $conn, "ALTER TABLE [jim].[dbo].[Instagram_Comments] NOCHECK CONSTRAINT [FK_Instagram_Comments_Instagram_Posts]
		
						  ALTER TABLE [jim].[dbo].[Instagram_Comments] NOCHECK CONSTRAINT [FK_Instagram_Comments_Instagram_Users]

						  INSERT  INTO  [jim].[dbo].[Instagram_Comments] ([CommentID],[PostID],[TimeStamp],[Text],[InstagramUserID],[FirstFound],[LastFound])
								SELECT [CommentID],[PostID],[TimeStamp],[Text],[InstagramUserID],[FirstFound],[LastFound]
								FROM [snapd].[dbo].[Instagram_Comments]");


	sqlsrv_query( $conn, "ALTER TABLE [jim].[dbo].[Instagram_Posts] NOCHECK CONSTRAINT [FK_Instagram_Posts_Instagram_Users]

						 INSERT  INTO  [jim].[dbo].[Instagram_Posts] ([PostID],[InstagramUserID],[TimeStamp],[Code],[Caption],[CommentCount],[FirstFound],[LastFound],[PostID_pd],[DataType],[Data],[DataUrl],[HashType],[HashValue],[Extension],[Resolution],[FirstFound_pd],[LastFound_pd],[HadError_pd],[LastError_pd])
							SELECT p.PostID,p.InstagramUserID,p.TimeStamp,p.Code,p.Caption,p.CommentCount,p.FirstFound,p.LastFound,d.PostID,d.DataType,d.Data,d.DataUrl,d.HashType,d.HashValue,d.Extension,d.Resolution,d.FirstFound,d.LastFound,d.HadError,d.LastError
							FROM [snapd].[dbo].[Instagram_Posts] p JOIN [snapd].[dbo].[Instagram_PostData] d ON p.PostID=d.PostID WHERE DataType = 'Thumbnail'");


	sqlsrv_query( $conn, "ALTER TABLE [jim].[dbo].[Instagram_PostLikes] NOCHECK CONSTRAINT FK_Instagram_PostLikes_Instagram_Users

						  INSERT  INTO  [jim].[dbo].[Instagram_PostLikes] ([PostID],[InstagramUserID],[FirstFound],[LastFound])
							SELECT [PostID],[InstagramUserID],[FirstFound],[LastFound]
							FROM [snapd].[dbo].[Instagram_PostLikes]");

// End Instagram


// Start Facebook

//sqlsrv_query( $conn, "DELETE FROM [jim].[dbo].[Users]" );

// End Facebook
$transtype = "Copy Data From Snapd Viewer";
include "log.php";

header("Location : menu.php");


?>