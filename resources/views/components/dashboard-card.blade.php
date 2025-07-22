@props([
    'icon' => 'bi-circle',
    'color' => 'primary',
    'label' => '',
    'count' => 0,
])
<div class="col-6 col-lg-3 col-md-6">
    <div class="card shadow-sm border-0">
        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-3 d-flex align-items-center justify-content-start">
                    <div class="bg-{{ $color }} d-flex align-items-center justify-content-center"
                         style="border-radius: 50%; width: 50px; height: 50px;">
                        <i class="bi {{ $icon }} text-white fs-6"></i>
                    </div>
                </div>
                <div class="col-9">
                    <h6 class="text-muted font-semibold mb-1">{{ $label }}</h6>
                    <h6 class="font-extrabold mb-0 text-dark">{{ $count }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
