<?php
////////////////////this statement is check mail is activate or not in server////////////////////////
 if ( function_exists( 'mail' ) )
{
    echo 'mail() is available';
}
else
{
    echo 'mail() has been disabled';
} 

///////////////////////////////////////////////////////////////////////////

if(mail($email,$subject,$msg,"From: <info@swarajmart.in>"))

{
echo "mail sent";

}
else
{
echo "mail sending fails";
}
?>