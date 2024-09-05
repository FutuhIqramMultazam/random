<?php
// pengerrtian call user functin arry
function custom_call_user_func_array($callback, $params)
{
    // Validasi callback
    if (is_array($callback)) {
        $object = $callback[0];
        $method = $callback[1];
        // Periksa apakah metode ada dalam objek
        if (method_exists($object, $method)) {
            // Panggil metode pada objek dengan parameter yang diurai
            return $object->$method(...$params);
        }
    }
    return null; // Atau mungkin mengembalikan pesan kesalahan
}









//======================================================================================
// pengertian function prepare yang ada di class PDOStatment
class PDO
{
    // Properti untuk menyimpan koneksi database
    private $connection;

    public function __construct($dsn, $username, $password)
    {
        // Membuat koneksi ke database (disederhanakan)
        $this->connection = $this->connectToDatabase($dsn, $username, $password);
    }

    // Method prepare yang membuat dan mengembalikan objek PDOStatement
    public function prepare($sql)
    {
        // Buat objek PDOStatement dengan SQL yang telah disiapkan
        $statement = new PDOStatement($this->connection, $sql);

        // Kembalikan objek PDOStatement yang telah diinstansiasi
        return $statement;
    }

    private function connectToDatabase($dsn, $username, $password)
    {
        // Disederhanakan, seharusnya ada kode untuk membuat koneksi database di sini
        return "Database connection established";
    }
}

class PDOStatement
{
    private $connection;
    private $sql;

    public function __construct($connection, $sql)
    {
        $this->connection = $connection;
        $this->sql = $sql;
    }

    public function execute()
    {
        // Menjalankan SQL di database (disederhanakan)
        echo "Executing SQL: " . $this->sql . "\n";
    }

    public function fetchAll()
    {
        // Mengambil semua hasil dari query (disederhanakan)
        return [
            ["id" => 1, "name" => "John Doe"],
            ["id" => 2, "name" => "Jane Smith"]
        ];
    }
}

// Contoh penggunaan
$pdo = new PDO("mysql:host=localhost;dbname=phpmvc", "root", "");
$stmt = $pdo->prepare('SELECT * FROM mahasiswa');
$stmt->execute();
$results = $stmt->fetchAll();

print_r($results);











//======================================================================================
// pengertian BindValue
$sql = "SELECT * FROM users WHERE username = :username AND age = :age";
$stmt = $pdo->prepare($sql);

// Menggunakan bindValue untuk mengikat nilai
$stmt->bindValue(':username', 'johndoe', PDO::PARAM_STR);
$stmt->bindValue(':age', 30, PDO::PARAM_INT);

// Eksekusi statement
$stmt->execute();
