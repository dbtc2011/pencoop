<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserCredentials;
use App\Balance;
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

                $lrr = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11713')->first();
                if ($balanceLRR) {
                    $lrr = $balanceLRR->amount;
                }

                $lrlad = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700001')->first();
                if ($balanceLRR) {
                    $lrlad = $balanceLRR->amount;
                }

                $lrmpl = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700002')->first();
                if ($balanceLRR) {
                    $lrmpl = $balanceLRR->amount;
                }

                $lro = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700003')->first();
                if ($balanceLRR) {
                    $lro = $balanceLRR->amount;
                }

                $lre = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700004')->first();
                if ($balanceLRR) {
                    $lre = $balanceLRR->amount;
                }

                $lrat = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700005')->first();
                if ($balanceLRR) {
                    $lrat = $balanceLRR->amount;
                }

                $lred = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700006')->first();
                if ($balanceLRR) {
                    $lred = $balanceLRR->amount;
                }

                $lrh = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '11700008')->first();
                if ($balanceLRR) {
                    $lrh = $balanceLRR->amount;
                }

                $fsd = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '21100001')->first();
                if ($balanceLRR) {
                    $fsd = $balanceLRR->amount;
                }

                $sdm = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '21100002')->first();
                if ($balanceLRR) {
                    $sdm = $balanceLRR->amount;
                }

                $sdd = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '21100003')->first();
                if ($balanceLRR) {
                    $sdd = $balanceLRR->amount;
                }

                $puscc = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '30150')->first();
                if ($balanceLRR) {
                    $puscc = $balanceLRR->amount;
                }

                $puscp = 0.0;
                $balanceLRR = Balance::where('acc_code', '=', '30210')->first();
                if ($balanceLRR) {
                    $puscp = $balanceLRR->amount;
                }

                $userJV = Jv::where('mem_code', '=', $user->code)->get();
            
                foreach ($userJV as $jvRow) {
                    if ($jvRow->acc_code == '11713') {
                        $lrr = $lrr + $jvRow->debit;
                        $lrr = $lrr - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700001') {
                        $lrlad = $lrlad + $jvRow->debit;
                        $lrlad = $lrlad - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700002') {
                        $lrmpl = $lrmpl + $jvRow->debit;
                        $lrmpl = $lrmpl - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700003') {
                        $lro = $lro + $jvRow->debit;
                        $lro = $lro - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700004') {
                        $lre = $lre + $jvRow->debit;
                        $lre = $lre - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700005') {
                        $lrat = $lrat + $jvRow->debit;
                        $lrat = $lrat - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700006') {
                        $lred = $lred + $jvRow->debit;
                        $lred = $lred - $jvRow->credit;
                    }else if ($jvRow->acc_code == '11700008') {
                        $lrh = $lrh + $jvRow->debit;
                        $lrh = $lrh - $jvRow->credit;
                    }else if ($jvRow->acc_code == '30210') {
                        $puscp = $puscp - $jvRow->debit;
                        $puscp = $puscp + $jvRow->credit;
                    }else if ($jvRow->acc_code == '30150') {
                        $puscc = $puscc - $jvRow->debit;
                        $puscc = $puscc + $jvRow->credit;
                    }else if ($jvRow->acc_code == '21100001') {
                        $fsd = $fsd - $jvRow->debit;
                        $fsd = $fsd + $jvRow->credit;
                    }else if ($jvRow->acc_code == '21100002') {
                        $sdm = $sdm - $jvRow->debit;
                        $sdm = $sdm + $jvRow->credit;
                    }else if ($jvRow->acc_code == '21100003') {
                        $sdd = $sdd - $jvRow->debit;
                        $sdd = $sdd + $jvRow->credit;
                    }
                }

                return view('home.summary',compact('user','userJV', 'lrr', 'lrmpl', 'lrlad', 'lre', 'lro', 'lrat', 'lred', 'lrh', 'fsd', 'sdm', 'sdd', 'puscc', 'puscp'));
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



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function summary_details($user, $acc_code)
    {
        $jvs = Jv::where('acc_code', '=', $acc_code);
        $jvs = $jvs::where('mem_code', '=', $user->mem_code);
        $type = '';
        if ($acc_code == '11713') {
            $type = "Loans Receivable Restructured";
        }else if ($acc_code == '11700001') {    
            $type = "Loans Receivable - Loan Against Deposit";
        }else if ($acc_code == '11700002') {
            $type = "Loans Receivable - Multi-purpose loan";    
        }else if ($acc_code == '11700003') {
            $type = "Loans Receivable - Others";     
        }else if ($acc_code == '11700004') {
            $type = "Loans Receivable - Emergency";    
        }else if ($acc_code == '11700005') {
            $type = "Loans Receivable - Appliances & Technologies"; 
        }else if ($acc_code == '11700006') {
            $type = "Loans Receivable - Educational";
        }else if ($acc_code == '11700008') {
            $type = "Loans Receivable - Housing";
        }else if ($acc_code == '30210') {
            $type = "Paid-Up Share Capital - Preferred";
        }else if ($acc_code == '30150') {
            $type = "Paid-Up Share Capital - Common";    
        }else if ($acc_code == '21100001') {
            $type = "Fixed Saving Deposits";
        }else if ($acc_code == '21100002') {
            $type = "Saving Deposit - Members";     
        }else if ($acc_code == '21100003') {
            $type = "Saving Deposit - Dependent";          
        }
        return view('articles.summary_details',compact('jvs'));
    }

    public function getLoanDetails($principal, $terms, $interest, $amort) {

    }
}
