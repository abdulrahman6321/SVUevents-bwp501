<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الفعالية - SVU Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{font-family:'Segoe UI',sans-serif;background:#f8f9fa;}
        .hero{background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1400') center/cover;height:400px;}
        .card{box-shadow:0 10px 30px rgba(0,0,0,0.1);}
        .scroll-top{position:fixed;bottom:20px;right:20px;background:#0d6efd;border:none;border-radius:50%;width:50px;height:50px;color:white;display:none;}
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.html">
            <img src="https://via.placeholder.com/40/0D6EFD/FFFFFF?text=SVU" width="35" class="me-2 rounded-circle">SVU Events
        </a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.html">الرئيسية</a>
            <a class="nav-link" href="events.php">الفعاليات</a>
            <a class="nav-link" href="about.php">من نحن</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero d-flex align-items-end text-white p-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">مهرجان الرياضة السنوي</h1>
                <p class="lead mb-4">
                    <i class="bi bi-calendar3 me-2"></i>15 مايو 2026 
                    <i class="bi bi-geo-alt me-2 ms-4"></i>الملعب الرئيسي 
                    <span class="badge bg-primary ms-2">رياضة</span>
                </p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="bi bi-calendar-plus me-1"></i>إضافة للتقويم
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-share me-1"></i>مشاركة
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Details Section -->
<section class="container my-5">
    <div class="row g-5">
        <div class="col-lg-8">
            <h2 class="mb-4">تفاصيل الفعالية</h2>
            <div class="card">
                <div class="card-body">
                    <p class="lead">
                        مرحباً بكم في <strong>مهرجان الرياضة السنوي</strong> الذي ينظمه قسم الرياضة بجامعة الشام الافتراضية!
                    </p>
                    <p>
                        فعالية رياضية كبرى تشمل بطولات في كرة القدم، كرة السلة، التنس، الطائرة، والمصارعة. 
                        مناسبة لجميع الطلاب والموظفين.
                    </p>
                    <hr>
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <h3>9:00 ص</h3>
                            <p>افتتاح المهرجان</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h3>2:00 م</h3>
                            <p>النهائيات</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <h3>6:00 م</h3>
                            <p>ختام الحفل</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card sticky-top" style="top:20px;">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=500&h=300&fit=crop" class="card-img-top" alt="مهرجان الرياضة">
                <div class="card-body">
                    <h5 class="card-title">معلومات سريعة</h5>
                    <ul class="list-unstyled">
                        <li><strong>التاريخ:</strong> 15/05/2026</li>
                        <li><strong>المكان:</strong> الملعب الرئيسي</li>
                        <li><strong>التصنيف:</strong> رياضة</li>
                        <li><strong>المدة:</strong> 9 ساعات</li>
                    </ul>
                    <a href="events.php" class="btn btn-primary w-100">← رجوع للفعاليات</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scroll & Dark Mode -->
<button class="scroll-top" onclick="window.scrollTo(0,0)" title="أعلى الصفحة">⬆️</button>
<button class="scroll-top" onclick="document.body.classList.toggle('dark-mode')" title="الوضع الليلي">🌙</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
window.onscroll=()=>{document.querySelectorAll('.scroll-top').forEach(btn=>btn.style.display=window.scrollY>300?'block':'none');};
</script>
</body>
</html>