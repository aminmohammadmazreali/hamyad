<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\User;
use Barryvdh\Reflection\DocBlock\Type\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;

class TeachersController extends Controller
{
    public function RetrieveData()
    {
        $teachers=Teacher::all();
        foreach ($teachers as $teacher){
            $teacher['Course_count']=count($teacher->courses);
            $rate_count=0;
            $rate_value=0;
            foreach ($teacher->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $teacher['rates_value']=$rate_value;
            $teacher['rates_count']=$rate_count;
        }
        return $teachers;
    }
    public function index()
    {
//        $data=$this->RetrieveData();
        $teachers=Teacher::paginate(10);
        foreach ($teachers as $teacher){
            $teacher['Course_count']=count($teacher->courses);
            $rate_count=0;
            $rate_value=0;
            foreach ($teacher->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $teacher['rates_value']=$rate_value;
            $teacher['rates_count']=$rate_count;
        }
        $total=count(Teacher::all());
//        return view('instructor.instructor-list')->with('Data',$data);
        return view('instructor.instructor-list')->with(['Data'=>$teachers,'total'=>$total]);
    }

    public function Search()
    {
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $input = Input::all();
        if(!isset($input['name'])){
            return redirect('/instructors');
        }
        $teachers=Teacher::where('name','like','%'.$input['name'].'%')->get();
        foreach ($teachers as $teacher){
            $teacher['Course_count']=count($teacher->courses);
            $rate_count=0;
            $rate_value=0;
            foreach ($teacher->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $teacher['rates_value']=$rate_value;
            $teacher['rates_count']=$rate_count;
        }
        $total=count($teachers);
        $col =$teachers;
        $perPage = 10;
        $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $entries = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);
        $entries->setPath('/instructor/Search');
        return view('instructor.instructor-list')->with(['Data'=>$entries,'total'=>$total,'Search'=>'1']);
    }

    public function ShowSpecific(Teacher $teacher)
    {
        $teacher['Course_count']=count($teacher->courses);
        $rate_count=0;
        $rate_value=0;
        foreach ($teacher->rates as $rate){
            $rate_count++;
            $rate_value +=$rate->pivot->rate;
        }
        $teacher['rates_value']=$rate_value;
        $teacher['rates_count']=$rate_count;
        $key=['id','name','image','rates_value','rates_count','Course_count','description','background','education','awards','resume_link','phone','email','work_ex'];
        foreach ($key as $k){
            $Data[$k]=$teacher[$k];
        }
        $Data['Course']=array();
        foreach ($teacher->courses as $course){
            $counter11=$course->provider;
            $course['Teachers']="";
            $counter=0;
            foreach ($course->teachers as $teacher){
                if($counter)
                    $course['Teachers']=$course['Teachers']." , ".$teacher->name;
                else
                    $course['Teachers']=$teacher->name;
                $counter++;
            }
            $rate_count=0;
            $rate_value=0;
            foreach ($course->rates as $rate){
                $rate_count++;
                $rate_value +=$rate->pivot->rate;
            }
            $count=0;
            $time=0;
            foreach ($course->section as $section){
                $count++;
                $time+=$section->time;
            }
            $course['sections_time']=$time;
            $course['sections_count']=$count;
            $course['rates_value']=$rate_value;
            $course['rates_count']=$rate_count;
            $counter=$course->category->name;
            $Data['Course'][]=$course;

        }
        return $Data;
    }
    public function Show(Teacher $teacher)
    {
        $data=$this->ShowSpecific($teacher);
//        return $data;
        return view('instructor.instructor-detail')->with('Data',$data);
    }

    public function GiveRate(Teacher $teacher)
    {
        if(! \Auth::check()){
            return 0;
        }
        $user=\Auth::user();
        $rate=Input::get('rate');
        return $this->StoreRate($user,$teacher,$rate);
    }

    public function StoreRate(User $user,Teacher $teacher,$rate)
    {
        $hasTask = $teacher->rates()->where('users.id', $user->id)->exists();
        if($hasTask){
            try {
                $teacher->rates()->updateExistingPivot($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
        else{
            try {
                $teacher->rates()->attach($user->id,['rate'=>$rate]);
            }
            catch ( \Illuminate\Database\QueryException $e){
                return 0;
            }
            return 1;
        }
    }
}
