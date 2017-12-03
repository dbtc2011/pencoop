<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserCredentials;
use App\Cv;
use App\Jv;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // *
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
     
    // public function index()
    // {
    //     return view('home');
    // }

    public function store(Request $request)
    {

        $user = UserCredentials::where('code', '=', $request->mem_code)->first();

        if ($user) {
            if ($request->pin == $user->password) {

                $lrmpl = 0.0;
                $lre = 0.0;
                $fsd = 0.0;
                $ssc = 0.0;
                $sr = 0.0;
                $pusc = 0.0;
                $iifl = 0.0;
                $type = 'Loans Receivable - Multi-purpose loan';

                $userJV = Jv::where('mem_code', '=', $user->code)->get();
                return view('home.summary_details',compact('user','userJV', 'type'));
                // $userCV = Cv::where('mem_code', '=', $user->code)->get();
                // foreach ($userJV as $jvRow) {
                //     if ($jvRow->acc_code == '11700002') {
                //         $lrmpl = $lrmpl + $jvRow->debit;
                //         $lrmpl = $lrmpl - $jvRow->credit;
                //     }else if ($jvRow->acc_code == '11700004') {
                //         $lre = $lre + $jvRow->debit;
                //         $lre = $lre - $jvRow->credit;
                //     }else if ($jvRow->acc_code == '21100001') {
                //         $fsd = $fsd - $jvRow->debit;
                //         $fsd = $fsd + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30130') {
                //         $ssc = $ssc - $jvRow->debit;
                //         $ssc = $ssc + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30140') {
                //         $sr = $sr - $jvRow->debit;
                //         $sr = $sr + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30150') {
                //         $pusc = $pusc - $jvRow->debit;
                //         $pusc = $pusc + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '40110') {
                //         $iifl = $iifl - $jvRow->debit;
                //         $iifl = $iifl + $jvRow->credit;
                //     }
                // }

                // foreach ($userCV as $jvRow) {
                //     if ($jvRow->acc_code == '11700002') {
                //         $lrmpl = $lrmpl + $jvRow->debit;
                //         $lrmpl = $lrmpl - $jvRow->credit;
                //     }else if ($jvRow->acc_code == '11700004') {
                //         $lre = $lre + $jvRow->debit;
                //         $lre = $lre - $jvRow->credit;
                //     }else if ($jvRow->acc_code == '21100001') {
                //         $fsd = $fsd - $jvRow->debit;
                //         $fsd = $fsd + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30130') {
                //         $ssc = $ssc - $jvRow->debit;
                //         $ssc = $ssc + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30140') {
                //         $sr = $sr - $jvRow->debit;
                //         $sr = $sr + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '30150') {
                //         $pusc = $pusc - $jvRow->debit;
                //         $pusc = $pusc + $jvRow->credit;
                //     }else if ($jvRow->acc_code == '40110') {
                //         $iifl = $iifl - $jvRow->debit;
                //         $iifl = $iifl + $jvRow->credit;
                //     }

                // }
                // return view('home.summary',compact('user','userJV', 'userCV', 'lrmpl', 'lre', 'fsd', 'ssc', 'sr', 'pusc', 'iifl'));
            }    
        }
        return redirect()->route('home.index')
                        ->with('fail','Invalid user!');
    }

    public function index()
    {
        return view('home.index');
    }

    public function about() {
    	return view('home.about');
    }

    public function services() {
    	return view('home.services');
    }

    public function events() {
    	return view('home.about');
    }

    public function contact() {
    	return view('home.about');
    }

    public function loan() {
    	return view('home.loan');
    }

    public function summary() {

        $user = Jv::where('mem_code', '=', '003210')->get();
        $userCV = Cv::where('mem_code', '=', '003210')->get();
        return view('home.summary',compact('user', 'userCV'));
    }

    public function getLoanDetails($principal, $terms, $interest, $amort) {

    }
}
