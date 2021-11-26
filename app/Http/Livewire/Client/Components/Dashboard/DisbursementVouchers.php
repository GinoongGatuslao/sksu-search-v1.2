<?php

namespace App\Http\Livewire\Client\Components\Dashboard;

use Livewire\Component;

//models
use App\Models\TravelOrder;
use App\Models\DisbursementVoucher;
use App\Models\LastAction;
use App\Models\DvProgress;       
use App\Models\User;

class DisbursementVouchers extends Component
{
     
    public $disbursement_vouchers;
    public $last_action;
    public $progress;
    public $feeds;


    public $temp = 'asfasd';
    public $readyToLoad = false;
 
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    public function render()
    {
        $this->disbursement_vouchers = $this->readyToLoad ? DisbursementVoucher::where('user_id','=',auth()->user()->id)->get() : [];
        $this->last_action = LastAction::get();
        $this->progress = DvProgress::get();

        
        return view('livewire.client.components.dashboard.disbursement-vouchers');
        
    }

    
    
}
