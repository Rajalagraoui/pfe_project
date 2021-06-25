<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function displayform()
    {
        return view('studentform');
    }
    public function save(Request $request)
    {
        $student_nom=$request->input('nom');
        $student_prenom=$request->input('prenom');
        $student_email=$request->input('email');
        $student_password=$request->input('password');
        $student_password_confirmation=$request->input('password_confirmation');
       DB::insert('insert into student(nom,prenom,email,password,password_confirmation) values (?,?,?,?,?)',[$student_nom,$student_prenom,$student_email,$student_password,$student_password_confirmation]);
       return redirect('student')->with('success','données enregistrées');
    }
    public function viewform()
    {
        return view('studentview');
    }
    public function index()
    {
        $student = DB::select('select * from student');
        return view('studentview',['student'=>$student]);
    }
    public function modifier($id)
    {
        $student=DB::select('select * from student where id=?',[$id]);
        return view('studentedit',['student'=>$student]);
    }
    public function maj(Request $request,$id)
    {
        $student_nom=$request->input('nom');
        $student_prenom=$request->input('prenom');
        $student_email=$request->input('email');
        $student_password=$request->input('password');
        $student_password_confirmation=$request->input('password_confirmation');
        DB::update('update student set nom=?,prenom= ?,email= ?,password= ? ,password_confirmation=? where id=? ',[$student_nom,$student_prenom,$student_email,$student_password,$student_password_confirmation,$id]);
        return redirect('studentview')->with('success','données mise a jour');
    }
    public function supprimer($id)
    {
DB::delete('delete from student where id =?',[$id]);
return redirect('studentview')
->with('success','données supprimés');    }
}
