<?php

class DBController {
    // Database connection properties
    protected $host;
    protected $user;
    protected $password;
    protected $database;
    
    // Connection property
    public $con = null;

    public function __construct() {
        // Get the DATABASE_URL environment variable from Heroku
        $dbUrl = getenv('DATABASE_URL');

        if ($dbUrl) {
            // Parse the DATABASE_URL to get connection details
            $url = parse_url($dbUrl);
            $this->host = $url['host'];
            $this->user = $url['user'];
            $this->password = $url['pass'];
            $this->database = ltrim($url['path'], '/');
        } else {
            // Fallback to default values if DATABASE_URL is not set
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->database = "shope";
        }

        // Establish the connection
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        
        // Check for connection error
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    // Destructor to close the connection
    public function __destruct() {
        $this->closeConnection();
    }

    // Method to close the mysqli connection
    protected function closeConnection() {
        if ($this->con !== null) {
            $this->con->close();
            $this->con = null;
        }
    }
}
?>
