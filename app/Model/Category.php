<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model {

    protected $table = 'oc_category';

    /**
     * Get all category
     * 
     * @param
     * @return array
     */
    public function listAllCategory($flagPagination = true, $data = array()) {
        $sql = DB::table(DB_PREFIX . 'category_path AS cp')
                ->select('cp.category_id AS category_id', DB::raw('group_concat(cd1.name ORDER BY cp.level SEPARATOR " > ") as name'), 'c1.parent_id', 'c1.sort_order', 'c1.image')
                ->leftJoin(DB_PREFIX . 'category AS c1', 'cp.category_id', '=', 'c1.category_id')
                ->leftJoin(DB_PREFIX . 'category AS c2', 'cp.path_id', '=', 'c2.category_id')
                ->leftJoin(DB_PREFIX . 'category_description AS cd1', 'cp.path_id', '=', 'cd1.category_id')
                ->leftJoin(DB_PREFIX . 'category_description AS cd2', 'cp.category_id', '=', 'cd2.category_id')
                ->where('cd1.language_id', '=', 1)
                ->where('cd2.language_id', '=', 1)
                ->groupBy('cp.category_id')
                ->orderBy('c1.sort_order', 'desc');
        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }
            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }
            $sql->skip((int)$data['limit'])->take((int)$data['start']);
        }
        if (!$flagPagination) {
            return $sql;
        } else {
            return $sql->get();
        }
    }

}
