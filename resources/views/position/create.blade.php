<x-app-layout>
    <x-slot name="breadcumb">
        <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                <div class="inner" style="transform: translateY(0px); opacity: 1;">
                    <ul class="breadcrumb">
                        <li>
                            <p><a href="main_page.php">Home</a></p>
                        </li>
                        <li><a href="main_page.php?method=par_audit_main">Parameter Auditor</a></li>
                        <li><a href="#" class="active">Parameter jabatan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container-fluid container-fixed-lg">
        <!-- START PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Tambah Jabatan</div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" action="{{ route('position.store') }}" class="form-horizontal" role="form" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 m-t-10">Jenis Auditee *</label>
                                <div class="col-sm-3">
                                    <select name="type" class="form-control" required="">
                                        <option value="">Pilih Satu</option>
                                        <option value="Struktural">Struktural</option>
                                        <option value="Fungsional">Fungsional</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 m-t-10">Nama Jabatan *</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 m-t-10">Urutan *</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="order" required="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-sm-2">&nbsp;</label>
                                <div class="col-sm-9">
                                    <a href="{{ route('position.index')}}">
                                        <button type="button" class="btn btn-default">Kembali</button>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                    <input type="hidden" name="data_action" id="data_action" value="postadd">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PANEL -->
    </div>
</x-app-layout>
