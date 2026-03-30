<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container my-5">
    <!-- Property Header -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="fw-bold">فيلا فاخرة في عمان</h1>
            <p class="text-muted"><i class="fas fa-map-marker-alt"></i> عبدون، عمان، المملكة الأردنية الهاشمية</p>
        </div>
        <div class="col-md-4 text-left">
            <h2 class="text-primary fw-bold">750,000 د.أ</h2>
            <p class="text-muted">للبيع</p>
        </div>
    </div>

    <!-- Image Gallery -->
    <div class="row mb-4">
        <div class="col-md-8">
            <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?w=800" class="img-fluid rounded shadow w-100" alt="Main Image">
        </div>
        <div class="col-md-4">
            <div class="row g-2">
                <div class="col-6"><img src="https://images.unsplash.com/photo-1613545325278-f24b0cae1224?w=300" class="img-fluid rounded" alt="Gallery"></div>
                <div class="col-6"><img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=300" class="img-fluid rounded" alt="Gallery"></div>
                <div class="col-6"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=300" class="img-fluid rounded" alt="Gallery"></div>
                <div class="col-6"><img src="https://images.unsplash.com/photo-1600596542815-27bfefd0c3c6?w=300" class="img-fluid rounded" alt="Gallery"></div>
            </div>
        </div>
    </div>

    <!-- Property Details -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <i class="fas fa-bed fa-2x text-primary mb-2"></i>
                <h5>4 غرف نوم</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <i class="fas fa-bath fa-2x text-primary mb-2"></i>
                <h5>3 حمامات</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <i class="fas fa-ruler-combined fa-2x text-primary mb-2"></i>
                <h5>350 م²</h5>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3">
                <i class="fas fa-car fa-2x text-primary mb-2"></i>
                <h5>2 موقف سيارات</h5>
            </div>
        </div>
    </div>

    <!-- 3D Viewer Section -->
    <section class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold"><i class="fas fa-cube"></i> جولة افتراضية 3D</h2>
            <div>
                <button class="btn btn-outline-primary me-2" id="emptyRoomBtn">غرفة فارغة</button>
                <button class="btn btn-3d" id="furnishedBtn">غرفة مؤثثة</button>
            </div>
        </div>
        
        <!-- 3D Canvas Container -->
        <div id="3d-container" class="border rounded shadow" style="width: 100%; height: 500px; background: #1a1a2e;"></div>
        
        <!-- Furniture Controls -->
        <div class="row mt-3">
            <div class="col-md-12">
                <h5 class="mb-3">إضافة أثاث:</h5>
            </div>
            <div class="col-md-3">
                <button class="btn btn-3d w-100 mb-2" onclick="addFurniture('sofa')">
                    <i class="fas fa-couch"></i> كنبة
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-3d w-100 mb-2" onclick="addFurniture('table')">
                    <i class="fas fa-table"></i> طاولة
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-3d w-100 mb-2" onclick="addFurniture('lamp')">
                    <i class="fas fa-lightbulb"></i> إضاءة
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-3d w-100 mb-2" onclick="addFurniture('plant')">
                    <i class="fas fa-leaf"></i> نبات
                </button>
            </div>
        </div>
    </section>

    <!-- Description -->
    <section class="mb-5">
        <h3 class="fw-bold mb-3">وصف العقار</h3>
        <p class="text-muted">
            فيلا فاخرة بتصميم عصري في حي عبدون الراقي في عمان. تتميز بمساحة واسعة وتشطيبات عالية الجودة.
            تحتوي على 4 غرف نوم واسعة، 3 حمامات، مجلس، غرفة معيشة، مطبخ مجهز، وحديقة خاصة.
            موقع متميز قريب من المدارس والمستشفيات والمراكز التجارية في عمان.
        </p>
    </section>

    <!-- Contact Agent -->
    <section class="mb-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3 class="fw-bold mb-3">تواصل مع الوكيل</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="60" alt="Agent">
                            <div>
                                <h5 class="mb-0">أحمد محمد</h5>
                                <p class="text-muted mb-0">وكيل عقاري معتمد</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <a href="tel:+962790000000" class="btn btn-success me-2">
                            <i class="fas fa-phone"></i> اتصال
                        </a>
                        <a href="https://wa.me/962790000000" class="btn btn-outline-success">
                            <i class="fas fa-whatsapp"></i> واتساب
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Three.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="assets/js/3d-viewer.js"></script>

<?php include 'includes/footer.php'; ?>