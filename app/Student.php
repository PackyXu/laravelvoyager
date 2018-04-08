<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Student extends Model
{
    //
    use Searchable;

    /**
     * 索引名称
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'students_index';
    }

    /**
     * 可搜索的数据索引
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }


}
//https://laravelvoyager.test/api/search?q=code

$student = Student::search('q')->raw();

dd($student);