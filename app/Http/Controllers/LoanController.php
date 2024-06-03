<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loan.index', [
            'loans' => Loan::whereNull('returnDate')->paginate(25),
            'records' => Loan::whereNotNull('returnDate')->paginate(25),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // create new loan
        Loan::create([
            'book_id' => $request->book_id,
            'member_id' => $request->member_id,
            'borrowingDate' => Carbon::parse($request->borrowingDate)->format('d/m/Y')
        ]);

        // update book availability
        $book = Book::find($request->book_id);
        $book->available = "No";
        $book->save();

        return redirect(route('loan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        // update loan return date
        $loan->returnDate = Carbon::parse($request->returnDate)->format('d/m/Y');
        $loan->save();

        // update book availability
        $book = $loan->book;
        $book->available = "Yes";
        $book->save();

        return redirect(route('loan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
