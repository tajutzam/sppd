<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Exports\BkuExport;
use App\Services\AccountService;
use App\Services\BankAccountService;
use App\Services\CategoryService;
use App\Services\DestinationService;
use App\Services\EmployeeService;
use App\Services\HeadHealthService;
use App\Services\InstructionService;
use App\Services\PlacesService;
use App\Services\TransportationService;
use App\Services\TypeDestinationService;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class InstructionsController extends Controller
{
    //
    private CategoryService $categoryService;
    private EmployeeService $employeeService;
    private TransportationService $transportationService;
    private PlacesService $placesService;
    private AccountService $accountService;
    private BankAccountService $bankService;

    private DestinationService $destinationService;
    private TypeDestinationService $typeDestinationService;

    private InstructionService $instructionService;
    private HeadHealthService $headHealthService;




    public function __construct()
    {
        $this->categoryService = new CategoryService();
        $this->employeeService = new EmployeeService();
        $this->transportationService = new TransportationService();
        $this->placesService = new PlacesService();
        $this->accountService = new AccountService();
        $this->bankService = new BankAccountService();
        $this->typeDestinationService = new TypeDestinationService();
        $this->instructionService = new InstructionService();
        $this->headHealthService = new HeadHealthService();

    }


    public function create()
    {

        $headHealths = $this->headHealthService->findAll();
        if (sizeof($headHealths) == 0) {
            throw new WebException('Ops, Data Kepala Puskesmas Kosong Silahkan Tambahkan Terlebih Dahulu');
        }
        $categories = $this->categoryService->findAll();
        $employees = $this->employeeService->findAll();
        $transportations = $this->transportationService->findAll();
        $places = $this->placesService->findAll();
        $accounts = $this->accountService->findAll();
        $bankAccounts = $this->bankService->findAll();
        $typeDestinations = $this->typeDestinationService->findAll();

        return view('admin.add.spt-add', [
            'categories' => $categories,
            'employees' => $employees,
            'transportations' => $transportations,
            'places' => $places,
            'accounts' => $accounts,
            'banks' => $bankAccounts,
            'type_destinations' => $typeDestinations,
            'head' => $headHealths[0]
        ]);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'activity_name' => 'required',
            'sub_activity_name' => 'required',
            'category_id' => 'required',
            'departure_date' => 'required|date|after:yesterday',
            'return_date' => 'required|date|after:yesterday',
            'users' => 'required|array|min:1',
            'transportation_id' => 'required',
            'place_from' => 'required',
            'place_to' => 'required',
            'type_destinations_id' => 'required',
            'travel_time' => 'required',
            'account_id' => 'required',
            'accept_from' => 'required',
            'sub_component' => 'required',
            'ammount_money' => 'required',
            'bank_account_id' => 'required',
            'present_in' => 'required',
            'briefings' => 'required',
            'problem' => 'required',
            'advice' => 'required',
            'description' => 'required',
            'other' => 'required'
        ];
        $messages = [
            'activity_name.required' => 'Nama Aktivitas Harus Di Isi',
            'sub_activity_name.required' => 'Nama SUb Aktivitas Harus Di isi',
            'category_id.required' => 'Kategory Perjalanan Tidak Boleh Kosong',
            'derparture_id.required' => 'Tanggal Berangkat Harus Di Isi',
            'return_date.required' => 'Tanggal Pulang Harus Diisi',
            'users.min' => 'Pegawai Tidak Boleh Kosong',
            'transportation_id.required' => 'Alat Transportasi Tidak Boleh Kosong',
            'place_form.required' => 'Tempat Berangkat Tidak Boleh Kosong',
            'place_to.required' => 'Tempat Tujuan Tidak Boleh Kosong',
            'type_destinations_id.required' => 'Tipe Tujuan Tidak Boleh Kosong',
            'travel_time.required' => 'Waktu Perjalanan Tidak Boleh Kosong',
            'account_id.required' => 'Akun Tidak Boleh Kosong',
            'accept_from.required' => "Diterima Dari Tidak Boleh Kosong",
            'sub_component.required' => 'Sub Komponen Tidak Boleh Kosong',
            "ammount_money.required" => 'Total Biaya tidak boleh kosong',
            "bank_account_id.required" => "Nomor Rekening Tidak Boleh Kosong",
            "present_in.required" => "Hadir Dalam Tidak Boleh Kosong",
            "briefings.required" => 'Pengarahan Tidak Boleh Kosong',
            "problem.required" => 'Masalah Tidak Boleh Kosong',
            "advice.required" => 'Saran Tidak Boleh Kosong',
            "description.required" => "Deskripsi Tidak boleh kosong",
            'users.required' => 'Pegawai Harus Di isi',
            'other' => 'Lain Lain Harus Diisi',
            'departure_date.after' => 'Tanggal Berangkat Tidak Valid',
            'return_date.after' => 'Tanggal Kembali Tidak Valid'
        ];
        $data = $this->validate($request, $rules, $messages);
        $this->instructionService->create($data);
        Alert::success("Sukses", "Berhasil Menambahkan SPT");
        return redirect('/admin/master/spt');
    }



    public function detail($id)
    {
        $data = $this->instructionService->findById($id)->toArray();
        // dd($data);
        return view('admin.detail-spt', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $this->instructionService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus SPT");
        return back();
    }


    public function index()
    {
        $data = $this->instructionService->findAll();
        // dd($data);
        return view("admin.spt", ['data' => $data]);
    }


    public function edit($id)
    {
        $data = $this->instructionService->findById($id)->toArray();

        $categories = $this->categoryService->findAll();
        $employees = $this->employeeService->findAll();
        $transportations = $this->transportationService->findAll();
        $places = $this->placesService->findAll();
        $accounts = $this->accountService->findAll();
        $bankAccounts = $this->bankService->findAll();
        $typeDestinations = $this->typeDestinationService->findAll();
        // dd($data);
        return view('admin.edit.spt-edit', [
            'data' => $data,
            'categories' => $categories,
            'employees' => $employees,
            'transportations' => $transportations,
            'places' => $places,
            'accounts' => $accounts,
            'banks' => $bankAccounts,
            'type_destinations' => $typeDestinations
        ]);
    }

    public function export_bku()
    {
        return Excel::download(new BkuExport(), 'bku.xlsx');
    }

    public function export_spt($id)
    {

        // $data = $this->instructionService->findById($id)->toArray();
        // $head = $this->headHealthService->findAll();

        // if (sizeof($head) == 0) {
        //     throw new WebException("Tidak Ada Kepala Perpustakaan, Harap Tambahkan Terlebih dahulu");
        // }

        // dd($data);
        $pdf = PDF::loadView('exports.spt-export', ['data' => [], 'head' => []])->setPaper('a4', 'potrait');

        // Save the pdf with a specific name
        return $pdf->download("SPT & LAPORAN / " . Carbon::now()->format('Y-m-d') . '.pdf');

    }

}
