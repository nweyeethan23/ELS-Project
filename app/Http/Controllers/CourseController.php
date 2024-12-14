<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\ApplyCourse;
use App\Models\Contact;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();  // Get all courses
        return response()->json(['courses' => $courses]);  // Return courses as JSON
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'class_size' => 'required|integer',
            'schedule' => 'required',
            'duration' => 'required',
            'start_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename =  time().'.'.$file->getClientOriginalName();
            $file->move(public_path('courseimg'),$filename);

        } else {
            $filename = null; 
        }


        $course = Course::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'class_size' => $validated['class_size'],
            'schedule' => $validated['schedule'],
            'duration' => $validated['duration'],
            'start_date' => $validated['start_date'],
            'image' => $filename, 
        ]);

        return response()->json(['message' => 'Course created successfully!', 'course' => $course], 201);
    }

    public function show($id){

        $courses = Course::find($id);
        return response()->json(['course' => $courses]);
    }
 
   public function update(Request $request, $id)
   {
       $course = Course::findOrFail($id);

       if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename =  time().'.'.$file->getClientOriginalName();
            $file->move(public_path('courseimg'),$filename);
           $course->image = $filename; 
       }

       $course->title = $request->title;
       $course->description = $request->description;
       $course->class_size = $request->class_size;
       $course->schedule = $request->schedule;
       $course->duration = $request->duration;
       $course->start_date = $request->start_date;

       $course->update();

       return response()->json(['message' => 'Course updated successfully!', 'course' => $course]);
   }

   public function destroy($id)
   {
       try {
           $course = Course::findOrFail($id); 
           $course->delete(); 
           return response()->json(['message' => 'Course deleted successfully!']);
       } catch (\Exception $e) {
           return response()->json(['error' => 'Course not found'], 404);
       }
   }
   public function applyCourse(Request $request, $id){

        $course = ApplyCourse::create([
            'user_id' => $request->userId,
            'course_id' => $id,
        ]);

        return response()->json(['message' => 'success'], 201);
    }
    public function getAppliedCourses($userId){

        $appliedCourses = ApplyCourse::where('user_id', $userId)
            ->with('course')
            ->get();

        return response()->json([
                'appliedCourses' => $appliedCourses->map(function ($applyCourse) {
                    return $applyCourse->course;
                })
            ]);
    }

    public function contactStore(Request $request)
    {

        $contact = Contact::create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'age' => $request->age,
            'phone' => $request->phone ?? null,  
            'social_id' => $request->social_id ?? null,
            'email' => $request->email,
            'course_id' =>$request->course_id ?? null,
            'hear_about' => $request->hear_about,
            'specify_heard_about' => $request->specify_heard_about ?? null,
            'question' => $request->question,
            'check_read_status' => $request->check_read_status ?? false,
        ]);
        return response()->json([
            'message' => 'success',
        ], 201);
    }

    public function getContactList(){

        $contactCount = Contact::where('status','0')->count();

        $list = Contact::orderBy('id', 'desc')->get();
        
        return response()->json([
            'count' => $contactCount > 0 ? $contactCount : '',
            'list'  => $list,
        ], 200); 
    }
    public function updateContactList(){

        $updatedCount = Contact::where('status', '0')->update(['status' => '1']);

        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function showApplyCourses()
    {

        $applyCourses = ApplyCourse::with(['user', 'course'])->get();
        return response()->json([
            'applyCourses' => $applyCourses,
        ], 200);

    }

}
