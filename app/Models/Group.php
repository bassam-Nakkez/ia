<?php

namespace App\Models;

use App\Domain\Interfaces\EntitiesInterface\GroupEntity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model implements GroupEntity
{
    use HasFactory;

    protected $table = "groups";
    protected $primaryKey = "id";
    protected $fillable =
    [
         "name"
        ,"owner"
    ];

    /**
     * Get the owner that owns the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }

    /**
     * Get all of the files for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function files()
    {
        return $this->hasMany(File::class, 'groupId', 'id');
    }

    public function getId() : int
    {
        return $this->attributes['id'] ;
    }

    public function getName(): string
    {
        return $this->attributes['name'] ;

    }
    public function setName(string $name)
    {
        $this->attributes['name'] = $name ;
    }
    public function getOwnerId(): int
    {
        return $this->attributes['owner'] ;
    }
    public function setOwnerId(int $id)
    {
        $this->attributes['owner'] = $id ;
    }
    public function getAttributes(): array{ return $this->attributes;}



}
