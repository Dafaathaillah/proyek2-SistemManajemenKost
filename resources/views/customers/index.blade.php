@extends('layouts.master')

@section('breadcrumb')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a>
        </li>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Manajemen Customer</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Manajemen Customer</h6>
</nav>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <a href="{{ route('customers.create') }}" class="btn bg-gradient-dark">Tambah Customer Baru</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table table-flush" id="datatable-search">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Kamar</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    No. Telp/WhatsApp</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center"
                                    style="width: 220px">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-sm font-weight-normal">Rhona Davidson</td>
                                <td class="text-sm font-weight-normal">Integration Specialist</td>
                                <td class="text-sm font-weight-normal">$327,900</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Colleen Hurst</td>
                                <td class="text-sm font-weight-normal">Javascript Developer</td>
                                <td class="text-sm font-weight-normal">$205,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Sonya Frost</td>
                                <td class="text-sm font-weight-normal">Software Engineer</td>
                                <td class="text-sm font-weight-normal">$103,600</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Jena Gaines</td>
                                <td class="text-sm font-weight-normal">Office Manager</td>
                                <td class="text-sm font-weight-normal">$90,560</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Quinn Flynn</td>
                                <td class="text-sm font-weight-normal">Support Lead</td>
                                <td class="text-sm font-weight-normal">$342,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Charde Marshall</td>
                                <td class="text-sm font-weight-normal">Regional Director</td>
                                <td class="text-sm font-weight-normal">$470,600</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Haley Kennedy</td>
                                <td class="text-sm font-weight-normal">Senior Marketing Designer</td>
                                <td class="text-sm font-weight-normal">$313,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Tatyana Fitzpatrick</td>
                                <td class="text-sm font-weight-normal">Regional Director</td>
                                <td class="text-sm font-weight-normal">$385,750</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Michael Silva</td>
                                <td class="text-sm font-weight-normal">Marketing Designer</td>
                                <td class="text-sm font-weight-normal">$198,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Paul Byrd</td>
                                <td class="text-sm font-weight-normal">Chief Financial Officer (CFO)</td>
                                <td class="text-sm font-weight-normal">$725,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Gloria Little</td>
                                <td class="text-sm font-weight-normal">Systems Administrator</td>
                                <td class="text-sm font-weight-normal">$237,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Bradley Greer</td>
                                <td class="text-sm font-weight-normal">Software Engineer</td>
                                <td class="text-sm font-weight-normal">$132,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Dai Rios</td>
                                <td class="text-sm font-weight-normal">Personnel Lead</td>
                                <td class="text-sm font-weight-normal">$217,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Jenette Caldwell</td>
                                <td class="text-sm font-weight-normal">Development Lead</td>
                                <td class="text-sm font-weight-normal">$345,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Yuri Berry</td>
                                <td class="text-sm font-weight-normal">Chief Marketing Officer (CMO)</td>
                                <td class="text-sm font-weight-normal">$675,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Caesar Vance</td>
                                <td class="text-sm font-weight-normal">Pre-Sales Support</td>
                                <td class="text-sm font-weight-normal">$106,450</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Doris Wilder</td>
                                <td class="text-sm font-weight-normal">Sales Assistant</td>
                                <td class="text-sm font-weight-normal">$85,600</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Angelica Ramos</td>
                                <td class="text-sm font-weight-normal">Chief Executive Officer (CEO)</td>
                                <td class="text-sm font-weight-normal">$1,200,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Gavin Joyce</td>
                                <td class="text-sm font-weight-normal">Developer</td>
                                <td class="text-sm font-weight-normal">$92,575</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Jennifer Chang</td>
                                <td class="text-sm font-weight-normal">Regional Director</td>
                                <td class="text-sm font-weight-normal">$357,650</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Brenden Wagner</td>
                                <td class="text-sm font-weight-normal">Software Engineer</td>
                                <td class="text-sm font-weight-normal">$206,850</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Fiona Green</td>
                                <td class="text-sm font-weight-normal">Chief Operating Officer (COO)</td>
                                <td class="text-sm font-weight-normal">$850,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Shou Itou</td>
                                <td class="text-sm font-weight-normal">Regional Marketing</td>
                                <td class="text-sm font-weight-normal">$163,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Michelle House</td>
                                <td class="text-sm font-weight-normal">Integration Specialist</td>
                                <td class="text-sm font-weight-normal">$95,400</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Suki Burks</td>
                                <td class="text-sm font-weight-normal">Developer</td>
                                <td class="text-sm font-weight-normal">$114,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Prescott Bartlett</td>
                                <td class="text-sm font-weight-normal">Technical Author</td>
                                <td class="text-sm font-weight-normal">$145,000</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Gavin Cortez</td>
                                <td class="text-sm font-weight-normal">Team Leader</td>
                                <td class="text-sm font-weight-normal">$235,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Martena Mccray</td>
                                <td class="text-sm font-weight-normal">Post-Sales support</td>
                                <td class="text-sm font-weight-normal">$324,050</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Unity Butler</td>
                                <td class="text-sm font-weight-normal">Marketing Designer</td>
                                <td class="text-sm font-weight-normal">$85,675</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Howard Hatfield</td>
                                <td class="text-sm font-weight-normal">Office Manager</td>
                                <td class="text-sm font-weight-normal">$164,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Hope Fuentes</td>
                                <td class="text-sm font-weight-normal">Secretary</td>
                                <td class="text-sm font-weight-normal">$109,850</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Vivian Harrell</td>
                                <td class="text-sm font-weight-normal">Financial Controller</td>
                                <td class="text-sm font-weight-normal">$452,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Timothy Mooney</td>
                                <td class="text-sm font-weight-normal">Office Manager</td>
                                <td class="text-sm font-weight-normal">$136,200</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Jackson Bradshaw</td>
                                <td class="text-sm font-weight-normal">Director</td>
                                <td class="text-sm font-weight-normal">$645,750</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Olivia Liang</td>
                                <td class="text-sm font-weight-normal">Support Engineer</td>
                                <td class="text-sm font-weight-normal">$234,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Bruno Nash</td>
                                <td class="text-sm font-weight-normal">Software Engineer</td>
                                <td class="text-sm font-weight-normal">$163,500</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm font-weight-normal">Sakura Yamamoto</td>
                                <td class="text-sm font-weight-normal">Support Engineer</td>
                                <td class="text-sm font-weight-normal">$139,575</td>
                                <td class="text-center">
                                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit tipe kamar">
                                        <i class="fa fa-edit"></i>&nbsp; Edit &nbsp;
                                    </a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="text-secondary font-weight-bold text-xs" onclick="this.closest('form').submit();return false;"> 
                                            <i class="fa fa-trash"></i> Delete &nbsp;
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
            searchable: true,
            fixedHeight: true
        });

    </script>
@endpush
