<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'oc_category';
    
    /**
     * Get all category
     * 
     * @param
     * @return array
     */
    public function listAllCategory()
    {
        $data = self::select('*')
                ->where('');
    }
}
