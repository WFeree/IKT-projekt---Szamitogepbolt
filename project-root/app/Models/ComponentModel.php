<?php
namespace App\Models;
use CodeIgniter\Model;

class ComponentModel extends Model
{
    protected $table = "components";
    protected $allowedFields = [
        "id",
        "name",
        "details",
        "category",
        "price",
        "rating",
    ];
    protected $primaryKey = "id";
    protected $useAutoIncrement = true;
    public function getCategories()
    {
        $column = "category";
        // Get the database connection
        $db = \Config\Database::connect();

        // Execute the SQL query to describe the table and get the column info
        $query = $db->query("SHOW COLUMNS FROM {$this->table} LIKE ?", [$column]);

        // Fetch the result
        $result = $query->getRow();

        // If there's a result, parse the enum values
        if ($result && preg_match("/^enum\(\'(.*)\'\)$/", $result->Type, $matches)) {
            // The enum values are inside the parentheses, separated by commas
            $enumValues = explode("','", $matches[1]);
            return $enumValues;
        }

        return null;  // Return null if no enum column found or if query fails
    }
}