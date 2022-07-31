<?php

namespace App\Http\Livewire\DeptHead;

use Livewire\Component;
//models
use App\Models\DisbursementVoucher;
use App\Models\Particular;
use App\Models\ModeOfPayment;
use App\Models\User;
use App\Models\Signatory;
use App\Models\Department;
use App\Models\position;

class ReprintDV extends Component
{
    public $dvId;
    public function render()
    {
        //get id from url
        $this->dvId = request()->id;
        //get dv info
        // $this->dvInfo = DisbursementVoucher::with(['travel_order','travel_order.particulars','travel_order.signatories','travel_order.signatories.user','travel_order.signatories.user.department','travel_order.signatories.user.department.admin_user','travel_order.signatories.user.department.head_user'])->where('id',$this->dvId)->first();
        $this->dvInfo = DisbursementVoucher::where('id',$this->dvId)->first();
        //get dv mop id
        $this->modeOfPayment = ModeOfPayment::where('id',$this->dvInfo->mop_id)->first();
        $this->payee = User::where('id',$this->dvInfo->user_id)->first();
        $this->particulars = Particular::where('disbursement_voucher_id',$this->dvId)->get();
        //get sum of particulars
        $this->dvModalTotalAmount = $this->particulars->sum('amount');
        //get signatories
        $this->signatories = Signatory::where('disbursement_voucher_id',$this->dvId)->first();
        $this->signatory = User::where('id',$this->signatories->user_id)->first();
        //get Department
        $this->department = Department::where('id',$this->signatory->department_id)->first();
        //get position
        $this->position = position::where('id',$this->signatory->position_id)->first();
        
        return view('livewire.dept-head.reprint-d-v', ['dvInfo' => $this->dvInfo, 'modeOfPayment' => $this->modeOfPayment, 'payee' => $this->payee, 
        'particulars' => $this->particulars, 
        'total' => $this->dvModalTotalAmount, 
        'signatory' => $this->signatory, 'department' => $this->department,
        'position' => $this->position])->layout('layouts.accountant');
    }
}
