<?php

    namespace App\Http\Controllers\Api;

    use App\Student;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class SearchController extends Controller
    {

        public function search(Request $request)
        {
            $error = ['error' => 'No results found, please try with different keywords.'];
            if($request->has('q')) {

                $student = Student::search($request->get('q'))->get();
                return $student->count() ? $student : $error;
            }
        }

    }
