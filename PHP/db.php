<?php

class DB
{
    protected $pdo = null;
    protected $table;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "afifabadpool";
    private $socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock"; // اضافه کردن مسیر سوکت
    private $conn;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};unix_socket={$this->socket}";
        $this->pdo = new PDO($dsn, $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // متد insert در کلاس DB
    public function insert($number)
    {
        return false;  // برای پیش‌فرض، این متد چیزی برنمی‌گرداند.
    }
}
