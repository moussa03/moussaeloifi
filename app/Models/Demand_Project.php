<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Demand_Project extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'project_on_demand';
    protected $fillable=['name',"email","description","project","demande_project_date","project_img"];

}
