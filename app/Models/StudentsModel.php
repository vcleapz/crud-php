<?php  namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class StudentsModel extends Model
{
	protected $table = 'students';
	protected $allowedFields = ['nama_depan','nama_belakang', 'alamat', 'email','nomor_hp'];

}
