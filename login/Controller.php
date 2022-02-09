<?php
require_once 'Model.php';

class Controller
{
    public function auth()
    {
       try{

      if(isset($_POST['submit']))
       {
           $data['ck']=$_POST['ck'];
           $data['cs']=$_POST['cs'];
           $data['site']=$_POST['site'];
           $result=Model::connect($data);
           session_start();
           $_SESSION['site']= $data['site'];
           $_SESSION['ck']= $data['ck'];
           $_SESSION['cs']=$data['cs'];

           $_SESSION['logged']=true;

           header('Location: http://localhost:8080/AppWooC-final/welcome.php'); }

      }catch(Throwable  $ex){

            return redirect('http://localhost:8080/AppWooC-final/index.php')->with('msg', 'Wrong Informations!! please try again!');
        } 
    }
}
 ?>