<?php
namespace KHALIF\AMS;
class Index
{
    /**
     * Root url Redirect to Signin Page
     */
    public function __construct()
    {
        header('Location: auth/signin.php');
        exit();
    }
}
new Index;
?>
