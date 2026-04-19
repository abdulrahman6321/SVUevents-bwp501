<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الفعاليات - SVU Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.html">SVU Events</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.html">الرئيسية</a>
                <a class="nav-link active" href="events.php">الفعاليات</a>
                <a class="nav-link" href="about.php">من نحن</a>
                <a class="nav-link" href="contact.php">اتصل بنا</a>
            </div>
        </div>
    </nav>

    <!-- Search & Filter -->
    <div class="container my-4">
        <div class="row g-3">
            <div class="col-md-4">
                <input type="text" class="form-control" id="search" placeholder="ابحث بالعنوان...">
            </div>
            <div class="col-md-3">
                <select class="form-select" id="category">
                    <option>جميع التصنيفات</option>
                    <option>رياضة</option>
                    <option>ثقافة</option>
                    <option>علمي</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="date" class="form-control" id="date">
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary w-100" onclick="filterEvents()">فلترة</button>
            </div>
        </div>
    </div>

    <!-- Events Grid -->
    <div class="container">
        <div class="row" id="eventsGrid">
            <!-- البيانات ستأتي من MySQL لاحقاً -->
            <div class="col-md-4 mb-4 event-card" data-category="رياضة" data-date="2026-05-15">
                <div class="card h-100 shadow">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400" class="card-img-top">
                    <div class="card-body">
                        <h5>مهرجان الرياضة</h5>
                        <p class="text-muted">15/05/2026 - الملعب الرئيسي</p>
                        <span class="badge bg-primary">رياضة</span>
                        <a href="event.php" class="btn btn-primary mt-2 w-100">التفاصيل</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 event-card" data-category="ثقافة" data-date="2026-05-20">
                <div class="card h-100 shadow">
                    <img src="https://images.unsplash.com/photo-1579952363873-27d3bfad9c6b?w=400" class="card-img-top">
                    <div class="card-body">
                        <h5>معرض ثقافي</h5>
                        <p class="text-muted">20/05/2026 - قاعة الفنون</p>
                        <span class="badge bg-success">ثقافة</span>
                        <a href="event.php" class="btn btn-primary mt-2 w-100">التفاصيل</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function filterEvents() {
            const search = document.getElementById('search').value.toLowerCase();
            const category = document.getElementById('category').value;
            const date = document.getElementById('date').value;
            
            document.querySelectorAll('.event-card').forEach(card => {
                const title = card.querySelector('h5').textContent.toLowerCase();
                const cardCategory = card.dataset.category;
                const cardDate = card.dataset.date;
                
                let show = true;
                if(search && !title.includes(search)) show = false;
                if(category !== 'جميع التصنيفات' && category !== cardCategory) show = false;
                if(date && date !== cardDate) show = false;
                
                card.style.display = show ? 'block' : 'none';
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>