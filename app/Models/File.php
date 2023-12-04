<?php

namespace App\Models;

use App\Domain\Interfaces\EntitiesInterface\FileEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Array_;

class File extends Model implements FileEntity
{
    use HasFactory;
    protected $table = "files";
    protected $primaryKey = "id";
    protected $fillable =
    [
        "fileName","owner","content","status","groupId","file_path","status"
    ];

    /**
     * Get the group that owns the File
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Group::class, 'groupId', 'id');
    }

    public function getFileName(): string{return $this->attributes['fileName'];}
    public function getFileContent(): string{return $this->attributes['content'];}
    public function getFilePath(): string{return $this->attributes['file_path'];}
    public function getGroupID(): int{return $this->attributes['groupId'];}

    public function getOwnerID(): int{return $this->attributes['owner'];}

    public function getStatus(): bool{return $this->attributes['status'];}

    public function getAttributes():Array {return $this->attributes;}
}
