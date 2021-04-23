<?php

class MyStore {
    private $server = 'mysql:host=localhost;dbname=migz';
    private $user = 'root';
    private $password = '';
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );

    protected $connection;

    public function openConnection() {
        try {
            $this->con = new PDO( $this->server, $this->user, $this->password, $this->options );

            echo 'connection success';

            return $this->con;
        } catch( PDOException $error ) {
            echo'Error Connection:'.$error->getMessage();
        }

    }

    public function closeConnection() {

        $this->$connection = 0;
    }

    public function getUsers() {
        $connection = $this->openConnection();
        $statement = $connection->prepare( 'SELECT *FROM users' );
        $statement ->execute();
        $user = $statement ->fetchAll();
        $userCount = $statement->rowCount();

        if ( $userCount>0 ) {
            return $user;
        } else {
            return 0;
        }

    } //END GET USERS




    public function login(){
        if(isset($_POST['button'])){

            $username=$_POST['username'];
            $password=$_POST['password'];


            $connection  =$this ->openConnection();
            $statement =$connection ->prepare("SELECT *  FROM users WHERE email=? AND password =?");
            $statement->execute([$username,$password]);

            $user =$statement->fetch();
            $total = $statement->rowCount();

            if($total>0){
                echo "<br>";
                echo "Welcome ".$user['email'].'<br>'.$user['password'];
            }else{
                echo "Log in error";
            }

        }
    }//END OF LOGIN





}

$mystore =new MyStore();

?>