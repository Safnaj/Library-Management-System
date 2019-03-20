<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Borrow;


class BrwsAndRtnsController extends Controller
{

    function index()
    {
     return view('borrow');
    }

    public function add(Request $request){
      $this->validate($request, [
          'bookId' => 'required',
          'mid' => 'required'
      ]);

      $date1 = Carbon::now();
      $date = Carbon::now()->toDateTimeString();
      $trialExpires = $date1->addDays(7);
      $borrows = new Borrow;
      $borrows->bid = $request->input('bookId');
      $borrows->mid = $request->input('mid');
      $borrows->borrowed_at = $date;
      $borrows->due_date = $trialExpires;
      $borrows->save();
      return redirect('/borrow')->with('info','lend details Saved successfully!');

  }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('books')
         ->where('bookId', 'like', '%'.$query.'%')
         ->orWhere('title', 'like', '%'.$query.'%')
         ->orWhere('author', 'like', '%'.$query.'%')
         ->orWhere('category', 'like', '%'.$query.'%')
         ->orderBy('bookId', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('books')
         ->orderBy('bookId', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->bookId.'</td>
         <td>'.$row->title.'</td>
         <td>'.$row->author.'</td>
         <td>'.$row->category.'</td>
         <td class="text-center"><button type="button" class="btn btn-outline-info btn-sm">Select</button> </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


    
    function searchmember(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('members')
         ->where('mid', 'like', '%'.$query.'%')
         ->orWhere('member_name', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orderBy('mid', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('members')
         ->orderBy('mid', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->mid.'</td>
         <td>'.$row->member_name.'</td>
         <td>'.$row->address.'</td>
         <td>'.$row->tel.'</td>
         <td class="text-center"><button type="button" class="btn btn-outline-info btn-sm">Select</button> </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }




    public function allbook(){
        $books = Book::all();
        return view('borrow',['books' => $books]);
    }
}
