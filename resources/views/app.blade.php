<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dear as salt</title>
    <base href="{{asset('')}}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href=" vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href=" vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href=" vendors/typicons/typicons.css">
    <link rel="stylesheet" href=" vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href=" vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href=" css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href=" images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="loading/css/modal-loading.css" />
    <link rel="stylesheet" type="text/css" href="loading/css/modal-loading-animate.css" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                @yield('content')
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- container-scroller -->
<!-- plugins:js -->
<script src=" vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src=" vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src=" js/off-canvas.js"></script>
<script src=" js/hoverable-collapse.js"></script>
<script src=" js/template.js"></script>
<script src=" js/settings.js"></script>
<script src=" js/todolist.js"></script>
<script type="text/javascript" src="loading/js/modal-loading.js"></script>
@yield('script')
<script>
    function loadingShow() {
        return loading = new Loading({
            title: 					'Dear as salt',
            titleColor: 			'rgb(217, 83, 79)',
            discription: 			'Loading...',
            discriptionColor: 		'rgb(77, 150, 223)',
            animationOriginColor: 	'rgb(33, 179, 132)',
            mask: 					true,
            loadingPadding: 		'20px 50px',
            defaultApply: 	true,
        });
    }
    function loadingHide(loading){
        setTimeout(() => loading.out(), 3000);
    }
</script>
<!-- endinject -->
</body>

</html>
