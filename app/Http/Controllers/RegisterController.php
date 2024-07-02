<?php

namespace App\Http\Controllers;

use App\Models\CompanyModel;
use App\Models\RoleModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function showRegistrationFormCustomer()
    {
        return view('auth.customer_register');
    }

    public function showRegistrationFormCompany()
    {
        return view('auth.company_register');
    }

    public function showRegistrationFormDeliveryman()
    {
        return view('auth.deliveryman_register');
    }

    public function createCustomer(Request $request)
    {
        // Determinar el tipo de usuario a partir del campo 'role'
        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        $customerRole = RoleModel::where('name', 'customer')->first();
        $user->roles()->attach($customerRole);
        //Auth::login($user);

        return response('Usuario registrado correctamente');
    }
    
    public function createCompany(Request $request){

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'country' => $request->country,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        $companyRole = RoleModel::where('name', 'company')->first();
        $user->roles()->attach($companyRole);

        $pdfStr = $request->file('pdf_single_tax_registry');
        $str = "pdf_".time().".".$pdfStr->guessExtension();
        $strPath = $pdfStr->storeAs('uploads/pdfs', $str, 'public');
        
        $pdfBc = $request->file('pdf_bank_certificate');
        $bc = "pdf_".time().".".$pdfBc->guessExtension();
        $bcPath = $pdfBc->storeAs('uploads/pdfs', $bc, 'public');

        $pdfLrd = $request->file('pdf_legal_representative_dni');
        $lrd = "pdf_".time().".".$pdfLrd->guessExtension();
        $lrdPath = $pdfLrd->storeAs('uploads/pdfs', $lrd, 'public');

        $terms_and_conditions = $request->has('terms_and_conditions') ? true : false;
        $processing_of_personal_data = $request->has('processing_of_personal_data') ? true : false;

        CompanyModel::create([
            'user_id' => $user->id,
            'company_name' => $request->company_name,
            'legal_representative_name' => $request->legal_representative_name,
            'legal_representative_lastname' => $request->legal_representative_lastname,
            'legal_representative_dni' => $request->legal_representative_dni,
            'nit' => $request->nit,
            'person_type' => $request->person_type,
            'legal_representative_email' => $request->legal_representative_email,
            'legal_name_company' => $request->legal_name_company,

            'terms_and_conditions' => $terms_and_conditions,
            'processing_of_personal_data' => $processing_of_personal_data,

            'pdf_single_tax_registry' => $strPath,
            'pdf_bank_certificate' => $bcPath,
            'pdf_legal_representative_dni' => $lrdPath,

            'account_holder_name' => $request->account_holder_name,
            'account_holder_lastname' => $request->account_holder_lastname,
            'bank_name' => $request->bank_name,
            'account_type' => $request->account_type,
            'account_number' => $request->account_number,
            'billing_address' => $request->billing_address,
            'billing_contact_phone_number' => $request->billing_contact_phone_number,
            'billing_contact_email' => $request->billing_contact_email
        ]);
        //Auth::login($user);
        return response('Empresa registrada correctamente');
    }
    
}
