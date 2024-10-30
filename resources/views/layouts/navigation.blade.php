<div class="page-sidebar" data-pages="sidebar">
    <div id="appMenu" class="sidebar-overlay-slide from-top"></div>
    <!-- BEGIN SIDEBAR HEADER -->
    <div class="sidebar-header">
        <img src="/images/logo.png" alt="logo" class="brand" data-src="/images/logo.png"
            data-src-retina="/images/logo.png" height="22">
        <div class="sidebar-header-controls">
            <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20"
                data-pages-toggle="#appMenu">
                <i class="fa fa-angle-down fs-16"></i>
            </button>
            <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar">
                <i class="fa fs-12"></i>
            </button>
        </div>
    </div>
    <!-- END SIDEBAR HEADER -->
    <!-- BEGIN SIDEBAR MENU -->
    <div class="sidebar-menu">
        <div class="scroll-wrapper menu-items" style="position: relative;">
            <ul class="menu-items scroll-content"
                style="height: 562px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Manajemen Audit</span>
                        <span class="arrow"></span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>MA</i>
                    </span>
                    <ul class="sub-menu" style="display: none;">
                        <li class="">
                            <a href=" main_page.php?method=auditplan ">Perencanaan Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=auditassign ">Pelaksanaan Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=reportaudit ">Pelaporan Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=followupassign ">Tindak Lanjut Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=tanggapanaudit ">Tanggapan Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                    </ul>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Dashboard RMS</span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>DSH</i>
                    </span>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Manajemen Pegawai</span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>MP</i>
                    </span>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Manajemen Auditee</span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>MS</i>
                    </span>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Pustaka Audit</span>
                        <span class="arrow   "></span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>PA</i>
                    </span>
                    <ul class="sub-menu" style="display:none">
                        <li class="">
                            <a href=" main_page.php?method=ref_program ">Pustaka Program Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=ref_audit ">Pustaka Referensi Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                    </ul>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Parameter Aplikasi</span>
                        <span class="arrow   "></span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>PAR</i>
                    </span>
                    <ul class="sub-menu" style="display:none">
                        <li class="">
                            <a href="#">Parameter Audit</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href="{{ route('position.main')}}">Parameter Pegawai</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href="#">Parameter Auditee</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                    </ul>
                </li>
                <li class=" " onclick="handleClick(event)">
                    <a href="#">
                        <span class="title">Manajemen Pengguna</span>
                        <span class="arrow"></span>
                    </a>
                    <span class="icon-thumbnail">
                        <i>USR</i>
                    </span>
                    <ul class="sub-menu" style="display: none;">
                        <li class="active">
                            <a href=" main_page.php?method=par_group ">Group</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=usermgmt ">Daftar Pengguna</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=backuprestore ">Back Up Restore Data</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                        <li class="">
                            <a href=" main_page.php?method=log_aktifitas ">Log Aktifitas</a>
                            <span class="icon-thumbnail">sp</span>
                        </li>
                    </ul>
                </li>
                <div class="clearfix"></div>
            </ul>
            <div class="scroll-element scroll-x">
                <div class="scroll-element_outer">
                    <div class="scroll-element_size"></div>
                    <div class="scroll-element_track"></div>
                    <div class="scroll-bar" style="width: 96px;"></div>
                </div>
            </div>
            <div class="scroll-element scroll-y">
                <div class="scroll-element_outer">
                    <div class="scroll-element_size"></div>
                    <div class="scroll-element_track"></div>
                    <div class="scroll-bar" style="height: 96px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function clearActiveItem() {
        document.querySelectorAll('.active, .open').forEach(element => {
            element.classList.remove('active');
            element.classList.remove('open');
        });

        document.querySelectorAll('.sub-menu').forEach(subMenu => {
            subMenu.style.display = 'none';
        });
    }
    
    function handleClick(event) {        
        const target = event.target
        const item = target.closest('li')
        const arrow = item.querySelector('.arrow');
        const list = item.querySelector('.sub-menu');

        // need to clear all .active and .open item & arrow, need to hide showed list
        console.log(item.classList.contains('active'))
        if (!item.classList.contains('active')) {
            clearActiveItem()
        }

        item.classList.toggle('active')
        item.classList.toggle('open')
        arrow.classList.toggle('active')
        arrow.classList.toggle('open')

        if (list.style.display != 'block') {
            list.style.display = 'block'
        } else {
            list.style.display = 'none'
        }
    }
</script>