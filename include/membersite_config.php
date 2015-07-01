<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('doc.ic.ac.uk');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('abc@abc.com','xyz@xyz.ac.uk');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('ZGa2yErNo8ri1KL');

?>
