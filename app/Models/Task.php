<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'start_date',
        'due_date',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'datetime',
        'due_date' => 'datetime',
    ];

    public static function getStatusLabels()
    {
        return [
            'todo' => 'Todo',
            'inprogress' => 'Inprogress',
            'done' => 'Done',
        ];
    }

    /**
     * Scope a query to only include todo task.
     * https://laravel.com/docs/10.x/eloquent
     */
    public function scopeTodo(Builder $query): void
    {
        $query->where('status', 'todo');
    }

    /**
     * The users that belong to the role.
     */

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}