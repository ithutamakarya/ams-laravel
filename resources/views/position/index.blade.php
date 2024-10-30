<x-app-layout>
    <x-slot name="breadcumb">
        <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="inner" style="transform: translateY(0px); opacity: 1;">
                    <!-- START BREADCRUMB -->
                    <ul class="breadcrumb">
                        <li>
                            <p><a href="main_page.php">Home</a></p>
                        </li>
                        <li><a href="main_page.php?method=par_audit_main">Parameter Auditor</a></li>
                        <li><a href="#" class="active">Parameter jabatan</a></li>
                    </ul>
                    <!-- END BREADCRUMB -->
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid container-fixed-lg">
        <!-- START PANEL -->
        <div class="panel panel-default">
            <form method="post" name="f" action="#">
                <input type="hidden" value="" name="data_action" id="data_action">
                <input type="hidden" value="" name="data_id" id="data_id">
                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <div class="panel-title">Daftar Jabatan</div>
                    </div>
                    <div class="col-xs-2">
                        <select name="key_search" class="form-control">
                            <option value="">Semua Pilihan</option>
                            <option value="jenis_jabatan">Jenis Jabatan</option>
                            <option value="jenis_jabatan_sub">Jabatan</option>
                        </select>
                    </div>
                    <div class="col-xs-3">
                        <input type="text" name="val_search" id="val_search" class="form-control" value="">
                    </div>
                    <div class="col-xs-1">
                        <a href="#" class="btn btn-danger" onclick="return set_action('');">Cari</a>
                    </div>
                    <div class="pull-right">
                        <div class="col-xs-4">
                            <a href="{{ route('position.create') }}" class="btn btn-primary btn-cons">
                                <i class="fa fa-plus"></i> Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="panel-body">
                        <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                            <div>
                                <table class="table table-hover table-responsive-block" border="1">
                                    <thead>
                                        <tr role="row">
                                            <th width="5%">No</th>
                                            <th width="30%">Jenis Jabatan</th>
                                            <th width="40%">Jabatan</th>
                                            <th width="10%">Urutan</th>
                                            <th width="15%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($positions as $position)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $position->type }}</td>
                                                <td>{{ $position->name }}</td>
                                                <td>{{ $position->order }}</td>
                                                <td>
                                                    <div class="btn-group dropdown-default">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle text-center" data-toggle="dropdown" style="width: 173px;" aria-expanded="false">
                                                            Pilih Satu<span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1" style="width: 173px;">
                                                            <li>
                                                                <a href="{{ route('position.edit', $position->id) }}">Ubah Data</a>
                                                            </li>
                                                            <li>
                                                                <form action="{{ route('position.destroy', $position->id) }}" method="POST" style="display: inline;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" title="Delete Record" onclick="return confirm('Do you want to delete?');" style="border: none; background: none; cursor: pointer; margin: 0; padding: 0; font-size: 13px; height: 35px; width: 100%; text-align: left;">
                                                                        <span style="color: inherit; padding: 0 20px;">Hapus Data</span>
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="tableWithDynamicRows_paginate">
                                        <ul class="">
                                            <li class="paginate_button active"><a href="#"
                                                    aria-controls="tableWithDynamicRows" data-dt-idx="1"
                                                    tabindex="0">1</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- END PANEL -->
    </div>
</x-app-layout>
