<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloquent
use App\Models\Mahsiswa;

class Mahasiswa extends Model //Definisi Model
{
    use HasFactory;
    protected $guarded = ['id_mahasiswa'];
    protected $primaryKey = 'id_mahasiswa';

    public function getRouteKeyName()
    {
        return 'nim';
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function matakuliah()
    {
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    }
    // protected $primaryKey = 'id_mahasiswa';
    // protected $table='mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record ditabel mahasiswa
    // // protected  $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'nim', 
    //     'nama',
    //     'kelas_id',
    //     'jurusan',
    //     'email',
    //     'alamat',
    //     'ttl',
    // ];
    // public function kelas(){
    //     return $this->belongsTo(Kelas::class);
    // }
    // public function matakuliah()
    // {
    //     return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matakuliah', 'mahasiswa_id', 'matakuliah_id')->withPivot('nilai');
    // }
    // public function getRouteKeyName()
    // {
    //     return 'nim';
    // }
}; 
