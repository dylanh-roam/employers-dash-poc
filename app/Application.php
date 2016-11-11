<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
   protected $fillable = ['status'];


    public function  getApplications($limit = null)
    {
        if ($limit) {
            $applications = $this->take($limit)->get();
        } else {
            $applications = $this->all();
        }

        return $applications->map(function($application) {
            $user = User::find($application->user_id);

            return collect([
                'name' => $user->name,
                'job_id' => $application->job_id,
                'id' => $application->id,
                'status' => $application->status,
                'description' => $application->description,
            ]);
        });
    }
}
